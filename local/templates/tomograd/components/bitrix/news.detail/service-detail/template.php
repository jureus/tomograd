<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
$APPLICATION->SetPageProperty("title", "Новый заголовок страницы");
$top_banner_id = !empty($arResult["PROPERTIES"]["BANNER"]["VALUE"]) ? $arResult["PROPERTIES"]["BANNER"]["VALUE"] : null;

$main = [
    "title" => !empty($arResult["PROPERTIES"]["SECTION_TITLE"]["~VALUE"]) ? $arResult["PROPERTIES"]["SECTION_TITLE"]["~VALUE"] : '',
    "description" => !empty($arResult["PROPERTIES"]["SECTION_DESCRIPTION"]["~VALUE"]["TEXT"]) ? $arResult["PROPERTIES"]["SECTION_DESCRIPTION"]["~VALUE"]["TEXT"] : '',
    "svg" => !empty($arResult["PROPERTIES"]["SECTION_SVG"]["VALUE"]) ? $arResult["PROPERTIES"]["SECTION_SVG"]["VALUE"] : []
];

$symptoms = [
    "title" => !empty($arResult["PROPERTIES"]["SYMPT_TITLE"]["VALUE"]) ? $arResult["PROPERTIES"]["SYMPT_TITLE"]["VALUE"] : '',
    "description" => !empty($arResult["PROPERTIES"]["SYMPTOMS_DESCRIPTION"]["~VALUE"]["TEXT"]) ? $arResult["PROPERTIES"]["SYMPTOMS_DESCRIPTION"]["~VALUE"]["TEXT"] : '',
    "list" => !empty($arResult["PROPERTIES"]["SYMPTOMS_LIST"]['VALUE']) ? $arResult["PROPERTIES"]["SYMPTOMS_LIST"]['VALUE'] : []
];

$advantages = [
    "title" => !empty($arResult["PROPERTIES"]["ADVANTAGES"]["VALUE"]) ? $arResult["PROPERTIES"]["ADVANTAGES"]["VALUE"] : '',
    "list" => !empty($arResult["PROPERTIES"]["ADVANTAGES_LIST"]["~VALUE"]) ? $arResult["PROPERTIES"]["ADVANTAGES_LIST"]["~VALUE"] : []
];

//slimDump($arResult["PROPERTIES"]);
?>
<?if($top_banner_id):?>
    <?$APPLICATION->IncludeComponent(
        "bitrix:news.detail", 
        "banners_inpage", 
        array(
            "ACTIVE_DATE_FORMAT" => "d.m.Y",
            "ADD_ELEMENT_CHAIN" => "N",
            "ADD_SECTIONS_CHAIN" => "N",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "BROWSER_TITLE" => "-",
            "CACHE_GROUPS" => "Y",
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "CHECK_DATES" => "Y",
            "DETAIL_URL" => "",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "DISPLAY_DATE" => "Y",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",
            "DISPLAY_TOP_PAGER" => "N",
            "ELEMENT_CODE" => "",
            "ELEMENT_ID" => $top_banner_id,
            "FIELD_CODE" => array(
                0 => "NAME",
                1 => "PREVIEW_TEXT",
                2 => "DETAIL_TEXT",
                3 => "DETAIL_PICTURE",
                4 => "",
            ),
            "IBLOCK_ID" => "25",
            "IBLOCK_TYPE" => "content",
            "IBLOCK_URL" => "",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
            "MESSAGE_404" => "",
            "META_DESCRIPTION" => "-",
            "META_KEYWORDS" => "-",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_TEMPLATE" => ".default",
            "PAGER_TITLE" => "Страница",
            "PROPERTY_CODE" => array(
                0 => "SVG",
                1 => "",
            ),
            "SET_BROWSER_TITLE" => "N",
            "SET_CANONICAL_URL" => "N",
            "SET_LAST_MODIFIED" => "N",
            "SET_META_DESCRIPTION" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_STATUS_404" => "N",
            "SET_TITLE" => "N",
            "SHOW_404" => "N",
            "STRICT_SECTION_CHECK" => "N",
            "USE_PERMISSIONS" => "N",
            "USE_SHARE" => "N",
            "COMPONENT_TEMPLATE" => "banners_inpage",
			"BUTTON" => "Записаться на прием"
        ),
        false
    );?>
<?endif;?>

<?if(!empty($main["title"]) || !empty($main["description"]) || !empty($main["svg"])):?>
<section class="block__padd block__overflow">
    <div class="container">
        <div class="servicearticle-about">
            <div class="row servicearticle-about__row">
                <?if(!empty($main["title"]) || !empty($main["description"])):?>
                <div class="col-12 col-lg-5">
                    <div class="servicearticle-about__text">
                        <div class="block__text">
                            <?if(!empty($main["title"])):?><h2><?=$main["title"]?></h2><?endif;?>
                            <?if(!empty($main["description"])):?><?=$main["description"]?><?endif;?>
                        </div>
                    </div>
					<div class="servicearticle-about__more"><a class="mbtn mbtn__full mbtn__red mbtn__default" href="#">Получить консультацию</a></div>
                </div>
                <?endif;?>
                
                <?if(!empty($main["svg"])):?>
                <div class="col-12 col-lg-7">
                    <div class="advantageslist row">
                        <? foreach ($main["svg"] as $svg_id) {
                            $svg = getElementWithProperties($svg_id);
                            if(!empty($svg)):?>
                                <div class="advantageslist__item col-6">
                                    <div class="advantageslist__card">
                                        <div class="advantageslist__card__head">
                                            <?if(!empty($svg["~DETAIL_TEXT"])):?><i><?=$svg["~DETAIL_TEXT"]?></i><?endif;?>
                                            <?if(!empty($svg["NAME"])):?><span><?=$svg["NAME"]?></span><?endif;?>
                                        </div>
                                    </div>
                                </div>
                            <?endif;
                        } ?>
                    </div>
                </div>
                <?endif;?>
            </div>
        </div>
    </div>
</section>
<?endif;?>

<?/*Эта секция закрывается в теле страницы после блока отзывы*/?>
<?if(!empty($advantages["title"]) || !empty($advantages["list"]) || !empty($symptoms["title"]) || !empty($symptoms["description"]) || !empty($symptoms["list"])):?>
<section class="servicearticle-nav__wrap js--navpin--wrap">
    <div class="container">
        <div class="servicearticle-nav__offset"></div>
        <div class="servicearticle-nav">
            <div class="servicearticle-nav__body js--navpin">
                <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_0" href="#des_0">Общая информация</a></div>
                <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_1" href="#des_1">Цены</a></div>
                <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_2" href="#des_2">Врачи и персонал</a></div>
                <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_3" href="#des_3">Отзывы</a></div>
            </div>
        </div>
        <section class="anchor-section js--navpin--section block__padd block__overflow" id="des_0" data-link="#link_0">
            <div class="container">
                <div class="servicearticle-about">
                    <div class="row">
                        <?if(!empty($advantages["title"]) || !empty($advantages["list"])):?>
                        <div class="col-12 col-lg-8">
                            <div class="servicearticle-about__content">
                                <div class="servicearticle-about__content__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/services/img-servabout-0.png" alt="" /></div>
                                <div class="servicearticle-about__content__body">
                                    <?if(!empty($advantages["title"])):?><div class="servicearticle-about__content__title"><?=$advantages["title"]?></div><?endif;?>
                                    <?if(!empty($advantages["list"])):?>
                                    <div class="servicearticle-about__content__text">
                                        <div class="block__text">
                                            <? 
                                            foreach ($advantages["list"] as $value) {
                                                if(!empty($value)) {
                                                    echo $value;
                                                }
                                            }?>
                                        </div>
                                    </div>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                        <?endif;?>
                        
                        <?if(!empty($symptoms["title"]) || !empty($symptoms["description"]) || !empty($symptoms["list"])):?>
                        <div class="col-12 col-lg-4">
                            <div class="servicearticle-about__side">
                                <div class="servicearticle-about__side__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/services/img-servabout-1.png" alt="" /></div>
                                <div class="servicearticle-about__side__body">
                                    <?if(!empty($symptoms["title"])):?><div class="servicearticle-about__side__title"><?=$symptoms["title"]?></div><?endif;?>
                                    <?if(!empty($symptoms["description"]) || !empty($symptoms["list"])):?>
                                    <div class="servicearticle-about__side__text">
                                        <?if(!empty($symptoms["description"])):?><?=$symptoms["description"]?><?endif;?>
                                        <?if(!empty($symptoms["list"])):?>
                                        <ul>
                                            <?foreach ($symptoms["list"] as $value) {
                                                if(!empty($value)):?>
                                                    <li><?=$value?></li>    
                                                <?endif;
                                            }?>
                                        </ul>
                                        <?endif;?>
                                    </div>
                                    <?endif;?>
                                </div>
                            </div>
                        </div>
                        <?endif;?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
<?endif;?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "actions-slider-big", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
        0 => "ID",
        1 => "CODE",
        2 => "XML_ID",
        3 => "NAME",
        4 => "TAGS",
        5 => "SORT",
        6 => "PREVIEW_TEXT",
        7 => "PREVIEW_PICTURE",
        8 => "DETAIL_TEXT",
        9 => "DETAIL_PICTURE",
        10 => "DATE_ACTIVE_FROM",
        11 => "ACTIVE_FROM",
        12 => "DATE_ACTIVE_TO",
        13 => "ACTIVE_TO",
        14 => "SHOW_COUNTER",
        15 => "SHOW_COUNTER_START",
        16 => "IBLOCK_TYPE_ID",
        17 => "IBLOCK_ID",
        18 => "IBLOCK_CODE",
        19 => "IBLOCK_NAME",
        20 => "IBLOCK_EXTERNAL_ID",
        21 => "DATE_CREATE",
        22 => "CREATED_BY",
        23 => "CREATED_USER_NAME",
        24 => "TIMESTAMP_X",
        25 => "MODIFIED_BY",
        26 => "USER_NAME",
        27 => "",
    ),
    "FILTER_NAME" => "",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "16",
    "IBLOCK_TYPE" => "actions",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "N",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
        0 => "DESCRIPTION_TITLE",
        1 => "DESCRIPTION_VALUE",
        2 => "PROPERTY_1_TITLE",
        3 => "PROPERTY_1_VALUE",
        4 => "PROPERTY_2_TITLE",
        5 => "PROPERTY_2_VALUE",
        6 => "PROPERTY_3_TITLE",
        7 => "PROPERTY_3_VALUE",
        8 => "SALE_SIZE",
        9 => "TYPE",
        10 => "PRICE",
        11 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "actions-slider"
),
false
);?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "articles-service", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",
    "ADD_SECTIONS_CHAIN" => "N",
    "AJAX_MODE" => "N",
    "AJAX_OPTION_ADDITIONAL" => "",
    "AJAX_OPTION_HISTORY" => "N",
    "AJAX_OPTION_JUMP" => "N",
    "AJAX_OPTION_STYLE" => "Y",
    "CACHE_FILTER" => "N",
    "CACHE_GROUPS" => "Y",
    "CACHE_TIME" => "36000000",
    "CACHE_TYPE" => "A",
    "CHECK_DATES" => "Y",
    "DETAIL_URL" => "",
    "DISPLAY_BOTTOM_PAGER" => "Y",
    "DISPLAY_DATE" => "Y",
    "DISPLAY_NAME" => "Y",
    "DISPLAY_PICTURE" => "Y",
    "DISPLAY_PREVIEW_TEXT" => "Y",
    "DISPLAY_TOP_PAGER" => "N",
    "FIELD_CODE" => array(
        0 => "NAME",
        1 => "PREVIEW_TEXT",
        2 => "DETAIL_TEXT",
        3 => "",
    ),
    "FILTER_NAME" => "arrFilter",
    "HIDE_LINK_WHEN_NO_DETAIL" => "N",
    "IBLOCK_ID" => "28",
    "IBLOCK_TYPE" => "content",
    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
    "INCLUDE_SUBSECTIONS" => "Y",
    "MESSAGE_404" => "",
    "NEWS_COUNT" => "20",
    "PAGER_BASE_LINK_ENABLE" => "N",
    "PAGER_DESC_NUMBERING" => "N",
    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
    "PAGER_SHOW_ALL" => "N",
    "PAGER_SHOW_ALWAYS" => "N",
    "PAGER_TEMPLATE" => ".default",
    "PAGER_TITLE" => "Новости",
    "PARENT_SECTION" => "",
    "PARENT_SECTION_CODE" => "",
    "PREVIEW_TRUNCATE_LEN" => "",
    "PROPERTY_CODE" => array(
        0 => "",
        1 => "LINKED_ITEM",
        2 => "",
    ),
    "SET_BROWSER_TITLE" => "N",
    "SET_LAST_MODIFIED" => "N",
    "SET_META_DESCRIPTION" => "N",
    "SET_META_KEYWORDS" => "N",
    "SET_STATUS_404" => "N",
    "SET_TITLE" => "N",
    "SHOW_404" => "N",
    "SORT_BY1" => "ACTIVE_FROM",
    "SORT_BY2" => "SORT",
    "SORT_ORDER1" => "DESC",
    "SORT_ORDER2" => "ASC",
    "STRICT_SECTION_CHECK" => "N",
    "COMPONENT_TEMPLATE" => "articles-actions",
    "ELEMENT_ID" => $arResult["ID"]
),
false
);?>

<?if(!empty($arResult["PROPERTIES"]["LINKED_SERVICES"]["VALUE"])):?>
<section class="anchor-section js--navpin--section block__padd block__overflow" id="des_1" data-link="#link_1">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2">Стоимость</h2>
                </div>
            </div>
        </div>
        <div class="pagprice">
            <div class="pagprice__head">
                <div class="pagprice__row1 row align-items-end">
                    <div class="col-12 col-md">
                        <div class="pagprice__title">
                            <div class="pagprice__title__label">Услуга</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="pagprice__price">
                            <div class="pagprice__price__label">Цена</div>
                        </div>
                    </div>
                    <div class="col-auto d-none d-md-block">
                        <div class="pagprice__btn">&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="pagprice__body">
                <?foreach ($arResult["PROPERTIES"]["LINKED_SERVICES"]["VALUE"] as $serviceId) {
                    $service = getElementWithProperties($serviceId);
                    if(!empty($service)):?>
                        <div class="pagprice__body__item">
                            <div class="pagprice__row1 row align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col-12 col-md">
                                            <div class="pagprice__title">
                                                <?if(!empty($service["NAME"])):?><div class="pagprice__title__name"><?=$service["NAME"]?></div><?endif;?>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-auto">
                                            <div class="pagprice__price">
                                                <?if(!empty($service["PROPERTIES"]["PRICE"])):?><div class="pagprice__price__number"><?=$service["PROPERTIES"]["PRICE"]?> ₽</div><?endif;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="pagprice__btn"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#js--modal-order" data-fancybox-html="data-fancybox-html" type="button"><span>Записаться</span><span class="d-none d-md-inline-block">&nbsp;на прием</span></a></div>
                                </div>
                            </div>
                        </div>
                    <?endif;
                }?>
            </div>
        </div>
    </div>
</section>
<?endif;?>

<!-- запишитесь на прем-->
<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "main_in_page", Array(
	"CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHAIN_ITEM_LINK" => "",	// Ссылка на дополнительном пункте в навигационной цепочке
		"CHAIN_ITEM_TEXT" => "",	// Название дополнительного пункта в навигационной цепочке
		"EDIT_URL" => "",	// Страница редактирования результата
		"IGNORE_CUSTOM_TEMPLATE" => "N",	// Игнорировать свой шаблон
		"LIST_URL" => "",	// Страница со списком результатов
		"SEF_MODE" => "N",	// Включить поддержку ЧПУ
		"SUCCESS_URL" => "",	// Страница с сообщением об успешной отправке
		"USE_EXTENDED_ERRORS" => "N",	// Использовать расширенный вывод сообщений об ошибках
		"WEB_FORM_ID" => "1",	// ID веб-формы
		"COMPONENT_TEMPLATE" => ".default",
		"VARIABLE_ALIASES" => array(
			"WEB_FORM_ID" => "WEB_FORM_ID",
			"RESULT_ID" => "RESULT_ID",
		),
		"TITLE" => 'Запишитесь на прием прямо сейчас'
	),
	false
);?>
<!-- /запишитесь на прем-->

<!-- cимптомы-->
<?if(!empty($arResult["PROPERTIES"]["SIMPTOMS_IB"]["VALUE"])):?>
    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "simptoms", Array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ADD_SECTIONS_CHAIN" => "N",
        "AJAX_MODE" => "N",
        "AJAX_OPTION_ADDITIONAL" => "",
        "AJAX_OPTION_HISTORY" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "BROWSER_TITLE" => "-",
        "CACHE_GROUPS" => "Y",
        "CACHE_TIME" => "36000000",
        "CACHE_TYPE" => "A",
        "CHECK_DATES" => "Y",
        "DETAIL_URL" => "",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "DISPLAY_TOP_PAGER" => "N",
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => $arResult["PROPERTIES"]["SIMPTOMS_IB"]["VALUE"],
        "FIELD_CODE" => array(
            0 => "PREVIEW_TEXT",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "IBLOCK_ID" => "26",
        "IBLOCK_TYPE" => "content",
        "IBLOCK_URL" => "",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
        "MESSAGE_404" => "",
        "META_DESCRIPTION" => "-",
        "META_KEYWORDS" => "-",
        "PAGER_BASE_LINK_ENABLE" => "N",
        "PAGER_SHOW_ALL" => "N",
        "PAGER_TEMPLATE" => ".default",
        "PAGER_TITLE" => "Страница",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "N",
        "SET_CANONICAL_URL" => "N",
        "SET_LAST_MODIFIED" => "N",
        "SET_META_DESCRIPTION" => "N",
        "SET_META_KEYWORDS" => "N",
        "SET_STATUS_404" => "N",
        "SET_TITLE" => "N",
        "SHOW_404" => "N",
        "STRICT_SECTION_CHECK" => "N",
        "USE_PERMISSIONS" => "N",
        "USE_SHARE" => "N",
    ),
    false
);?>
<?endif;?>
<!-- /cимптомы-->