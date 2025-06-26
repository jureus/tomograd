<?php 

use Bitrix\Main\Loader;
use Bitrix\Main\EventManager;

CModule::IncludeModule("iblock");

function getMultiLevelMenuStructure(array $iblockIds): array
{
    if (!CModule::IncludeModule('iblock')) {
        return [];
    }

    $menuStructure = [];

    foreach ($iblockIds as $iblockId) {
        $iblock = CIBlock::GetByID($iblockId)->GetNext();
        if (!$iblock) {
            continue;
        }

        $iblockNode = [
            'NAME' => $iblock['NAME'],
            'LINK' => "/".$iblock["CODE"]."/",
            'ITEMS' => [],
            'ROOT_ELEMENTS' => [],
        ];

        // Получаем разделы
        $sections = CIBlockSection::GetList(
            ['LEFT_MARGIN' => 'ASC'],
            [
                'IBLOCK_ID' => $iblockId,
                'ACTIVE' => 'Y',
                'GLOBAL_ACTIVE' => 'Y',
                'CHECK_PERMISSIONS' => 'Y'
            ],
            false,
            ['ID', 'NAME', 'SECTION_PAGE_URL', 'IBLOCK_SECTION_ID', 'CODE', 'DEPTH_LEVEL', 'PICTURE']
        );

        $sectionItems = [];
        while ($section = $sections->GetNext()) {
            $sectionLink = $section['SECTION_PAGE_URL'];
            if (strpos($sectionLink, '#') !== false) {
                $sectionLink = str_replace(
                    ['#SITE_DIR#', '#SECTION_CODE_PATH#'],
                    [SITE_DIR, $section['CODE']],
                    $sectionLink
                );
            }

            $sectionItems[$section['ID']] = [
                'NAME' => $section['NAME'],
                'LINK' => $sectionLink,
                'ITEMS' => [],
                'IBLOCK_SECTION_ID' => $section['IBLOCK_SECTION_ID'],
                'DEPTH_LEVEL' => $section['DEPTH_LEVEL'],
                'PICTURE' => $section['PICTURE']
            ];
        }

        // Строим дерево разделов
        $sectionTree = [];
        foreach ($sectionItems as $id => &$section) {
            if (empty($section['IBLOCK_SECTION_ID'])) {
                $sectionTree[$id] = &$section;
            } else {
                if (isset($sectionItems[$section['IBLOCK_SECTION_ID']])) {
                    $sectionItems[$section['IBLOCK_SECTION_ID']]['ITEMS'][$id] = &$section;
                }
            }
        }
        unset($section);

        // Получаем элементы БЕЗ фильтра SECTION_GLOBAL_ACTIVE
        $elements = CIBlockElement::GetList(
            ['SORT' => 'ASC'],
            [
                'IBLOCK_ID' => $iblockId,
                'ACTIVE' => 'Y',
                // Убрали SECTION_GLOBAL_ACTIVE
                'CHECK_PERMISSIONS' => 'Y'
            ],
            false,
            false,
            ['ID', 'NAME', 'DETAIL_PAGE_URL', 'IBLOCK_SECTION_ID', 'CODE', 'PICTURE']
        );

        while ($element = $elements->GetNext()) {
            $elementLink = $element['DETAIL_PAGE_URL'];
            if (strpos($elementLink, '#') !== false) {
                $elementLink = str_replace(
                    ['#SITE_DIR#', '#ELEMENT_CODE#'],
                    [SITE_DIR, $element['CODE']],
                    $elementLink
                );
            }

            $elementData = [
                'NAME' => $element['NAME'],
                'LINK' => $elementLink,
                'PICTURE' => $element['PICTURE']
            ];

            $sectionId = $element['IBLOCK_SECTION_ID'];
            if ($sectionId && isset($sectionItems[$sectionId])) {
                $sectionItems[$sectionId]['ITEMS'][] = $elementData;
            } else {
                // Корневой элемент
                $iblockNode['ROOT_ELEMENTS'][] = $elementData;
            }
        }

        // Добавляем корневые элементы как отдельный раздел
        if (!empty($iblockNode['ROOT_ELEMENTS'])) {
            $sectionTree = array_merge([
                'ROOT_ITEMS' => [
                    'NAME' => "", // или другой заголовок
                    'ITEMS' => $iblockNode['ROOT_ELEMENTS'],
                    'LINK' => $iblockNode['LINK'],
                ]
            ], $sectionTree);
        }

        $iblockNode['ITEMS'] = array_values(array_filter($sectionTree, function($item) {
            return !empty($item['ITEMS']) || !empty($item['LINK']);
        }));
        
        if (!empty($iblockNode['ITEMS'])) {
            $menuStructure[] = $iblockNode;
        }
    }

    return $menuStructure;
}

function formate_phone($number) {
    // Убедимся, что номер состоит только из 11 цифр
    if (preg_match('/^\d{11}$/', $number)) {
        return substr($number, 0, 1) . '(' . substr($number, 1, 3) . ')' .
               substr($number, 4, 3) . '-' .
               substr($number, 7, 2) . '-' .
               substr($number, 9, 2);
    }
    return $number;
}

function getElementWithProperties($elementId) {
    if (!$elementId) return null;

    $element = CIBlockElement::GetByID($elementId)->GetNext();
    if (!$element) return null;
    
    // Инициализируем массив свойств, если его нет
    if (!isset($element['PROPERTIES'])) {
        $element['PROPERTIES'] = [];
    }
    
    // Получаем все свойства элемента
    $properties = CIBlockElement::GetProperty(
        $element['IBLOCK_ID'],
        $element['ID'],
        [],
        ['EMPTY' => 'N'] // Получаем только заполненные свойства
    );
    
    while ($prop = $properties->Fetch()) {
        $code = $prop['CODE'];
        $value = $prop['VALUE'];
        
        // Для свойств-списков получаем текстовое значение вместо ID
        if ($prop['PROPERTY_TYPE'] === 'L' && $value) {
            $enumValues = CIBlockPropertyEnum::GetList([], ['ID' => $value]);
            if ($enum = $enumValues->Fetch()) {
                $value = $enum['VALUE'];
            }
        }
        
        // Если свойство еще не добавлено
        if (!isset($element['PROPERTIES'][$code])) {
            // Для одиночных не-списковых свойств сохраняем простой формат
            if ($prop['PROPERTY_TYPE'] !== 'L' && $prop['MULTIPLE'] === 'N') {
                $element['PROPERTIES'][$code] = $value;
            } 
            // Для множественных и списковых свойств
            else {
                $element['PROPERTIES'][$code] = [
                    'VALUE' => [$value],
                    'DESCRIPTION' => [$prop['DESCRIPTION']],
                    'PROPERTY_TYPE' => $prop['PROPERTY_TYPE'],
                    'MULTIPLE' => $prop['MULTIPLE'],
                    'NAME' => $prop['NAME'],
                ];
            }
        } 
        // Если свойство уже существует
        else {
            // Если текущее значение - не массив (простой формат)
            if (!is_array($element['PROPERTIES'][$code])) {
                // Конвертируем в полный формат
                $element['PROPERTIES'][$code] = [
                    'VALUE' => [$element['PROPERTIES'][$code], $value],
                    'DESCRIPTION' => ['', $prop['DESCRIPTION']],
                    'PROPERTY_TYPE' => $prop['PROPERTY_TYPE'],
                    'MULTIPLE' => 'Y',
                    'NAME' => $prop['NAME'],
                ];
            } 
            // Если уже полный формат
            else {
                // Добавляем новое значение и описание
                $element['PROPERTIES'][$code]['VALUE'][] = $value;
                $element['PROPERTIES'][$code]['DESCRIPTION'][] = $prop['DESCRIPTION'];
            }
        }
    }
    
    return $element;
}

function slimDump($item){
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
}
