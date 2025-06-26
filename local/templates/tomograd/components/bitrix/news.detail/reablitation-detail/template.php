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
$top_banner_id = !empty($arResult["PROPERTIES"]["TOP_BANNER"]["VALUE"]) ? $arResult["PROPERTIES"]["TOP_BANNER"]["VALUE"] : null;

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
        "COMPONENT_TEMPLATE" => "banners_inpage"
    ),
    false
);?>
<?endif;?>
</section>

<?
$GLOBALS['fullServices'] = [
   "ID" => $arResult["PROPERTIES"]["LINKED_SERVICES_FULL"]["VALUE"]
];

$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "shortServices_full", 
    array(
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
            3 => "DETAIL_PICTURE",
            4 => "",
        ),
        "FILTER_NAME" => "fullServices",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "31",
        "IBLOCK_TYPE" => "services_short",
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
            1 => "SVG",
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
        "COMPONENT_TEMPLATE" => "shortServices_full"
    ),
    false
);?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "articles-rebeletation", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
	"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
	"AJAX_MODE" => "N",	// Включить режим AJAX
	"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
	"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
	"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
	"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
	"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
	"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
	"CACHE_TYPE" => "A",	// Тип кеширования
	"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
	"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
	"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"FILTER_NAME" => "arrFilter",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "28",	// Код информационного блока
		"IBLOCK_TYPE" => "content",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "",
			1 => "LINKED_ITEM",
			2 => "SVG",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
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
                                    <div class="pagprice__btn"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" type="button" href="#js--modal-order" data-fancybox-html="data-fancybox-html"><span>Записаться</span><span class="d-none d-md-inline-block">&nbsp;на прием</span></a></div>
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