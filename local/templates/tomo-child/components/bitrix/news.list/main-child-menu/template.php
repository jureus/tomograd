<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="block__padd block__padd__first block__padd__last ch-services js--chtabs-wrap" id="services">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2"><?=$arParams["TITLE"] ?: "Основные услуги"?></h2>
                </div>
            </div>
        </div>
        
        <!-- Desktop tabs -->
        <div class="ch-services__tabs js--chtabs">
            <div class="ch-services__tabs__nav">
                <div class="ch-services__tabs__nav__body">
                    <?foreach($arResult["ITEMS"] as $i => $arItem):?>
                        <a class="ch-services__tabs__nav__btn js--chtabs-btn <?=$i == 0 ? 'active' : ''?>" href="#chtab-<?=$i?>">
                            <?=$arItem["NAME"]?>
                        </a>
                    <?endforeach;?>
                </div>
            </div>
            
            <div class="ch-services__tabs__content">
                <?foreach($arResult["ITEMS"] as $i => $arItem):?>
                    <div class="ch-services__tabs__content__item <?=$i == 0 ? 'active' : ''?> js--chtabs-item" id="chtab-<?=$i?>">
                        <div class="ch-services__list">
                            <?php
                            // Строим древовидную структуру
                            $treeItems = [];
                            foreach($arItem["PROPERTIES"]["LINK"]["VALUE"] as $key => $value) {
                                $parts = explode('/', $value);
                                $parts = array_map('trim', $parts);
                                $link = $arItem["PROPERTIES"]["LINK"]["DESCRIPTION"][$key];
                                
                                if (count($parts) > 1) {
                                    // Дочерний элемент
                                    $parentName = $parts[0];
                                    $childName = $parts[1];
                                    
                                    if (!isset($treeItems[$parentName])) {
                                        $treeItems[$parentName] = [
                                            'name' => $parentName,
                                            'link' => '#',
                                            'children' => []
                                        ];
                                    }
                                    $treeItems[$parentName]['children'][] = [
                                        'name' => $childName,
                                        'link' => $link
                                    ];
                                } else {
                                    // Родительский элемент
                                    if (!isset($treeItems[$value])) {
                                        $treeItems[$value] = [
                                            'name' => $value,
                                            'link' => $link,
                                            'children' => []
                                        ];
                                    }
                                }
                            }
                            
                            // Группируем по первой букве
                            $groupedItems = [];
                            foreach ($treeItems as $item) {
                                $firstLetter = mb_strtoupper(mb_substr($item['name'], 0, 1));
                                $groupedItems[$firstLetter][] = $item;
                            }
                            ksort($groupedItems);
                            ?>
                            
                            <?foreach($groupedItems as $letter => $items):?>
                                <div class="ch-services__list__item">
                                    <div class="ch-services__list__card">
                                        <div class="ch-services__list__card__letter"><?=$letter?></div>
                                        <div class="ch-services__list__card__body">
                                            <ul>
                                                <?foreach($items as $item):?>
                                                    <li>
                                                        <?if(!empty($item['children'])):?>
                                                            <a href="<?=$item['link']?>"><?=$item['name']?></a>
                                                            <ul>
                                                                <?foreach($item['children'] as $child):?>
                                                                    <li>
                                                                        <a href="<?=$child['link']?>">
                                                                            <span><?=$child['name']?></span>
                                                                            <i><svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use></svg></i>
                                                                        </a>
                                                                    </li>
                                                                <?endforeach;?>
                                                            </ul>
                                                        <?else:?>
                                                            <a href="<?=$item['link']?>"><?=$item['name']?></a>
                                                        <?endif;?>
                                                    </li>
                                                <?endforeach;?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            <?endforeach;?>
                        </div>
                    </div>
                <?endforeach;?>
            </div>
        </div>
        
        <!-- Mobile version -->
        <div class="ch-services__filter d-md-none">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <div class="ch-services__filter__item">
                    <div class="ch-form__select js--select">
                        <div class="ch-form__select__label js--select-label">
                            <span class="ch-form__select__label__des"><?=$arItem["NAME"]?></span>
                            <span class="ch-form__select__label__text js--select-text"></span>
                            <i class="ch-form__select__label__icon"><svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use></svg></i>
                        </div>
                        <div class="ch-form__select__popup">
                            <div class="ch-form__select__popup__body js--styled-scroll">
                                <ul class="ch-form__select__sub">
                                    <?php
                                    // Строим дерево для мобильной версии
                                    $mobileTree = [];
                                    foreach($arItem["PROPERTIES"]["LINK"]["VALUE"] as $key => $value) {
                                        $parts = explode('/', $value);
                                        $parts = array_map('trim', $parts);
                                        $link = $arItem["PROPERTIES"]["LINK"]["DESCRIPTION"][$key];
                                        
                                        if (count($parts) > 1) {
                                            $parentName = $parts[0];
                                            $childName = $parts[1];
                                            
                                            if (!isset($mobileTree[$parentName])) {
                                                $mobileTree[$parentName] = [
                                                    'name' => $parentName,
                                                    'link' => '#',
                                                    'children' => []
                                                ];
                                            }
                                            $mobileTree[$parentName]['children'][] = [
                                                'name' => $childName,
                                                'link' => $link
                                            ];
                                        } else {
                                            if (!isset($mobileTree[$value])) {
                                                $mobileTree[$value] = [
                                                    'name' => $value,
                                                    'link' => $link,
                                                    'children' => []
                                                ];
                                            }
                                        }
                                    }
                                    ?>
                                    
                                    <?foreach($mobileTree as $item):?>
                                        <li>
                                            <a class="ch-form__select__sub__option js--select-option" href="<?=$item['link']?>">
                                                <?=$item['name']?>
                                            </a>
                                            <?if(!empty($item['children'])):?>
                                                <ul class="ch-form__select__sub__podmenu">
                                                    <?foreach($item['children'] as $child):?>
                                                        <li><a href="<?=$child['link']?>"><?=$child['name']?></a></li>
                                                    <?endforeach;?>
                                                </ul>
                                            <?endif;?>
                                        </li>
                                    <?endforeach;?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            <?endforeach;?>
        </div>
        
        <?$APPLICATION->IncludeComponent("bitrix:search.title", "tomograd-child-in-page", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "NUM_CATEGORIES" => "5",
                            "TOP_COUNT" => "5",
                            "ORDER" => "date",
                            "USE_LANGUAGE_GUESS" => "N",
                            "CHECK_DATES" => "Y",
                            "SHOW_OTHERS" => "Y",
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "SHOW_INPUT" => "Y",
                            "INPUT_ID" => "title-search-input",
                            "CONTAINER_ID" => "title-search",
                            "CATEGORY_0_TITLE" => "Услуги",
                            "CATEGORY_0" => array(0 => "iblock_services",),
                            "CATEGORY_0_iblock_services" => array(0 => "all",),
                            "CATEGORY_1_TITLE" => "Врачи и персонал",
                            "CATEGORY_1" => array(0 => "iblock_doctors",),
                            "CATEGORY_1_iblock_doctors" => array(0 => "all",),
                            "CATEGORY_2_TITLE" => "Статьи и новости",
                            "CATEGORY_2" => array(0 => "iblock_about",),
                            "CATEGORY_2_iblock_about" => array(0 => "10",),
                            "CATEGORY_3_TITLE" => "Отзывы",
                            "CATEGORY_3" => array(0 => "iblock_about",),
                            "CATEGORY_4_TITLE" => "",
                            "CATEGORY_4" => "",
                            "CATEGORY_OTHERS_TITLE" => "",
                            "CATEGORY_3_iblock_about" => array(0 => "11",)
                        ), false);?>
    </div>
</section>