<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");
$code = $_REQUEST["ELEMENT_CODE"];

$elementId = null;
$res = CIBlockElement::GetList(
	[],
	[
        'IBLOCK_ID' => 32, // Укажите ваш ID инфоблока
        'CODE' => $code,
        'ACTIVE' => 'Y',
    ],
    false,
    false,
    ['ID', 'IBLOCK_SECTION_ID']
);
if ($element = $res->Fetch()) {
	$elementId = $element['ID'];
	$iblockId = $element["IBLOCK_SECTION_ID"];
}

$GLOBALS['arrFilter'] = [
    'PROPERTY_LINKED_ITEM' => $elementId, // ID связанного элемента
    'ACTIVE' => 'Y', // Опционально: только активные элементы
];	
?>
<?/*ЭТИ ДВА ТЭГА ЗАКРЫВАЮТСЯ ВНУТРИ NEWS.DETAIL*/?>
<section class="block__padd block__padd__pageinfidefirst">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
		            "PATH" => "/",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		            "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
		        ),
		false
	);?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"symptom-detail", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
		"ELEMENT_CODE" => $code,
		"ELEMENT_ID" => $elementId,
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
		"IBLOCK_ID" => $iblockId,
		"IBLOCK_TYPE" => "services",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "symptom-detail"
	),
	false
);?>
<!-- запишитесь на прем-->
<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "main_in_page", Array(
    "CACHE_TIME" => "3600", // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHAIN_ITEM_LINK" => "",    // Ссылка на дополнительном пункте в навигационной цепочке
        "CHAIN_ITEM_TEXT" => "",    // Название дополнительного пункта в навигационной цепочке
        "EDIT_URL" => "",   // Страница редактирования результата
        "IGNORE_CUSTOM_TEMPLATE" => "N",    // Игнорировать свой шаблон
        "LIST_URL" => "",   // Страница со списком результатов
        "SEF_MODE" => "N",  // Включить поддержку ЧПУ
        "SUCCESS_URL" => "",    // Страница с сообщением об успешной отправке
        "USE_EXTENDED_ERRORS" => "N",   // Использовать расширенный вывод сообщений об ошибках
        "WEB_FORM_ID" => "1",   // ID веб-формы
        "COMPONENT_TEMPLATE" => ".default",
        "VARIABLE_ALIASES" => array(
            "WEB_FORM_ID" => "WEB_FORM_ID",
            "RESULT_ID" => "RESULT_ID",
        ),
        "TITLE" => 'Узнайте причины боли и&nbsp;рекомендации от&nbsp;врача',
        "DESCRIPTION" => "Запишитесь к врачу прямо сейчас. Получите бесплатную первичную консультацию врача и&nbsp;скидку на&nbsp;лечение 15%!"
    ),
    false
);?>
        <!-- /запишитесь на прем-->
<!-- победитель-->
<!-- блок скрывается в мобилке и планшете на главной странице сайта, классы "d-none d-lg-block", чтобы это произошло-->
<?
$APPLICATION->IncludeComponent(
    'bitrix:main.include',
    '',
    array (
        'AREA_FILE_SHOW'   => 'file',
        'AREA_FILE_SUFFIX' => 'inc',
        'EDIT_TEMPLATE'    => '',
        'PATH'             => '/include/main/winner.php'
    )
); ?>
<!-- отзывы-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_reviews", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
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
			1 => "DATE_ACTIVE_FROM",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "about",
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
			0 => "SOURCE_NAME",
			1 => "SOURCE_LINK",
			2 => "ABOUT",
			3 => "RATE",
			4 => "SOURCE_IMG",
			5 => "",
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
		"COMPONENT_TEMPLATE" => "main_reviews"
	),
	false
);?>
<!-- /отзывы-->
<!-- рейтинг независимых экспертов-->
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_sources", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
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
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "22",
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
			0 => "REVIEW_COUNT",
			1 => "RATE",
			2 => "BG_COLOR",
			3 => "",
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
		"COMPONENT_TEMPLATE" => "main_sources"
	),
	false
);?>
<!-- /рейтинг независимых экспертов-->
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>