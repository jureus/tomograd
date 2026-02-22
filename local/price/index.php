<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

global $USER;
if (!$USER->IsAdmin()) {
    die("Доступ запрещен");
}

// ID инфоблока
$IBLOCK_ID = 29;

// Поля инфоблока
$PROPERTY_CODES = [
    'TYPE' => 'TYPE',               // Тип (категория)
    'PRICE' => 'PRICE',             // Цена Климовск
    'PRICE_PODOLSK' => 'PRICE_PODOLSK', // Цена Подольск
    'PRICE_KIROV' => 'PRICE_KIROV', // Цена Кирова
    'TIME' => 'TIME',               // Длительность
    'CODE_NUM' => 'CODE_NUM',       // Код номенклатуры
];

// Путь к CSV файлу
$csvFile = $_SERVER['DOCUMENT_ROOT'] . '/local/price/price.csv';

// Открываем файл
if (!file_exists($csvFile)) {
    die("Файл не найден: " . $csvFile);
}

$file = fopen($csvFile, 'r');
if (!$file) {
    die("Не удалось открыть файл");
}

// Пропускаем BOM если есть
$bom = pack('H*', 'EFBBBF');
$firstLine = fgets($file);
if (strncmp($firstLine, $bom, 3) !== 0) {
    // Если нет BOM, возвращаемся к началу файла
    rewind($file);
} else {
    // Удаляем BOM из первой строки
    $firstLine = substr($firstLine, 3);
    // Создаем временный файл без BOM
    $tempFile = tempnam(sys_get_temp_dir(), 'csv_');
    file_put_contents($tempFile, $firstLine . stream_get_contents($file));
    fclose($file);
    $file = fopen($tempFile, 'r');
}

$currentCategory = '';
$rowNumber = 0;

// Получаем все существующие элементы инфоблока для сравнения
$existingElements = [];

$res = CIBlockElement::GetList(
    [],
    ['IBLOCK_ID' => $IBLOCK_ID, 'ACTIVE' => 'Y'],
    false,
    false,
    ['ID', 'NAME', 'CODE']
);
while ($element = $res->Fetch()) {
    $existingElements[trim($element['NAME'])] = $element['ID'];
}

// Получаем ID свойства TYPE
$propertyId = null;
$property = CIBlockProperty::GetList([], [
    'IBLOCK_ID' => $IBLOCK_ID,
    'CODE' => 'TYPE'
])->Fetch();
if ($property) {
    $propertyId = $property['ID'];
} else {
    die("Свойство TYPE не найдено в инфоблоке!");
}

// Получаем список значений для свойства TYPE
$typePropertyValues = [];
$typePropertyValueIds = [];
$propertyEnums = CIBlockPropertyEnum::GetList(
    ['SORT' => 'ASC'],
    ['IBLOCK_ID' => $IBLOCK_ID, 'CODE' => 'TYPE']
);
while ($enum = $propertyEnums->Fetch()) {
    $typePropertyValues[$enum['VALUE']] = $enum['ID'];
    $typePropertyValueIds[$enum['ID']] = $enum['VALUE'];
}

while (($row = fgetcsv($file, 10000, ',')) !== false) {
    $rowNumber++;

    // Пропускаем пустые строки
    if (empty(array_filter($row))) {
        continue;
    }

    // Проверяем, является ли строка заголовком категории
    if (count(array_filter($row)) == 1 && !empty(trim($row[0]))) {
        $currentCategory = trim($row[0]);
        continue;
    }

    // Проверяем, является ли строка заголовком секции
    if (isset($row[0]) && trim($row[0]) == 'Наименование') {
        continue;
    }

    // Если у нас есть текущая категория и это не заголовок, то это строка с данными
    if (!empty($currentCategory)) {
        // Обрабатываем строку с данными
        $name = isset($row[0]) ? trim($row[0]) : '';
        $priceKlimovsk = isset($row[1]) ? trim($row[1]) : '0';
        $pricePodolsk = isset($row[2]) ? trim($row[2]) : '0';
        $priceKirov = isset($row[3]) ? trim($row[3]) : '0';
        $duration = isset($row[4]) ? trim($row[4]) : '';
        $codeNum = isset($row[5]) ? trim($row[5]) : '';

        // Проверяем, что название не пустое
        if (empty($name)) {
            continue;
        }

        // Очищаем название от лишних кавычек
        $name = trim($name, '"');

        // Формируем символьный код из названия
        $code = CUtil::translit($name, 'ru', [
            'replace_space' => '-',
            'replace_other' => '-'
        ]);
        
        // Проверяем и добавляем значение категории в список TYPE если его нет
        if (!isset($typePropertyValues[$currentCategory])) {
            $propertyEnum = new CIBlockPropertyEnum();
            $enumId = $propertyEnum->Add([
                'PROPERTY_ID' => $propertyId,
                'VALUE' => $currentCategory
            ]);
            
            if ($enumId) {
                $typePropertyValues[$currentCategory] = $enumId;
                $typePropertyValueIds[$enumId] = $currentCategory;
                echo "Добавлено значение в список TYPE: $currentCategory (ID: $enumId)<br>";
            } else {
                echo "Ошибка при добавлении значения в список TYPE: $currentCategory<br>";
                continue;
            }
        }
        
        // Получаем ID значения из списка
        $typeValueId = $typePropertyValues[$currentCategory];
        
        // Подготавливаем данные для элемента
        $elementFields = [
            'IBLOCK_ID' => $IBLOCK_ID,
            'NAME' => $name,
            'CODE' => $code,
            'ACTIVE' => 'Y',
            'PROPERTY_VALUES' => [
                $PROPERTY_CODES['TYPE'] => $typeValueId, // Используем ID значения, а не строку
                $PROPERTY_CODES['PRICE'] => $priceKlimovsk,
                $PROPERTY_CODES['PRICE_PODOLSK'] => $pricePodolsk,
                $PROPERTY_CODES['PRICE_KIROV'] => $priceKirov,
                $PROPERTY_CODES['TIME'] => $duration,
                $PROPERTY_CODES['CODE_NUM'] => $codeNum,
            ]
        ];
        
        // Проверяем, существует ли элемент
        if (isset($existingElements[$name])) {
            // Обновляем существующий элемент
            $elementId = $existingElements[$name];
            $elementFields['ID'] = $elementId;
            
            $element = new CIBlockElement();
            if ($element->Update($elementId, $elementFields)) {
                echo "Обновлен элемент: $name (ID: $elementId) - Категория: $currentCategory<br>";
            } else {
                echo "Ошибка при обновлении элемента: $name - " . $element->LAST_ERROR . "<br>";
            }
        } else {
            // Создаем новый элемент
            $element = new CIBlockElement();
            if ($elementId = $element->Add($elementFields)) {
                $existingElements[$name] = $elementId;
                echo "Создан элемент: $name (ID: $elementId) - Категория: $currentCategory<br>";
            } else {
                echo "Ошибка при создании элемента: $name - " . $element->LAST_ERROR . "<br>";
            }
        }
    }
}

fclose($file);

echo "<hr>";
echo "Импорт завершен!<br>";
echo "Всего значений в списке TYPE: " . count($typePropertyValues) . "<br>";
echo "Значения в списке TYPE:<br>";
foreach ($typePropertyValues as $value => $id) {
    echo "- $value (ID: $id)<br>";
}
?>