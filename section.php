<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Title");

// Получаем код раздела из запроса
$sectionCode = $_REQUEST["SECTION_CODE"];

// Создаем фильтр для компонента
$arrFilter = array();
if (!empty($sectionCode)) {
	$arrFilter["SECTION_CODE"] = $sectionCode;
}
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"service_subsection", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
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
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "services",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
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
		"PARENT_SECTION_CODE" => $sectionCode,
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "PRICE",
			2 => "LINKED_SERVICES",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "Y",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "service_subsection"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main-single", 
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
		"ELEMENT_ID" => "71",
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "actions",
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
			0 => "SALE_SIZE",
			1 => "LINKED_ITEM",
			2 => "",
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
		"COMPONENT_TEMPLATE" => "main-single"
	),
	false
);?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"doctors_slider", 
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
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "doctors",
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
			0 => "STATE",
			1 => "SHORT_DESCRIPTION",
			2 => "WORK_PLACE",
			3 => "RECIPIENTS",
			4 => "WORK_OLD",
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
		"COMPONENT_TEMPLATE" => "doctors_slider"
	),
	false
);?>

<!-- запишитесь на прем-->
<section class="block__padd block__overflow">
	<div class="container">
		<div class="mainorder">
			<div class="mainorder__bg"></div>
			<div class="mainorder__content">
				<div class="mainorder__head">
					<h2 class="mainorder__head__title">Запишитесь на&nbsp;прем прямо сейчас</h2>
					<div class="mainorder__head__text">Оставьте свои данные и&nbsp;наш администратор свяжется с&nbsp;вами
						в&nbsp;ближайшее время
					</div>
				</div>
				<div class="mainorder__body">
					<div class="form__line row">
						<div class="col-12"><label class="form__input js--form-label valid"><input
							class="form__input__text js--form-input" type="text"
							value="Пример поля прошедшего валидацию"/><span class="form__input__label">Ваше имя</span><i
							class="form__input__icon valid">
							<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
							xmlns="http://www.w3.org/2000/svg">
							<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
							fill="#0CC44D"/>
							<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
							stroke-width="1.38242"/>
						</svg>
					</i><i class="form__input__icon error">
						<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
						xmlns="http://www.w3.org/2000/svg">
						<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
						fill="#E30016"/>
						<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
						fill="white"/>
					</svg>
				</i></label></div>
				<div class="col-12"><label class="form__input js--form-label error"><input
					class="form__input__text js--form-input js--maskphone" type="tel"
					value="94955"/><span class="form__input__label">Мобильный телефон</span><i
					class="form__input__icon valid">
					<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
					xmlns="http://www.w3.org/2000/svg">
					<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
					fill="#0CC44D"/>
					<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
					stroke-width="1.38242"/>
				</svg>
			</i><i class="form__input__icon error">
				<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
				xmlns="http://www.w3.org/2000/svg">
				<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
				fill="#E30016"/>
				<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
				fill="white"/>
			</svg>
		</i></label>
		<div class="form__input__info error">Пример вывода текста ошибки</div>
	</div>
	<div class="col-12"><label class="form__textarea js--form-label"><textarea
		class="form__textarea__text js--form-textarea" name="#"></textarea><span
		class="form__textarea__label">Ваш комментарий</span><i
		class="form__textarea__icon valid">
		<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
		xmlns="http://www.w3.org/2000/svg">
		<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
		fill="#0CC44D"/>
		<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
		stroke-width="1.38242"/>
	</svg>
</i><i class="form__textarea__icon error">
	<svg width="13" height="14" viewBox="0 0 13 14" fill="none"
	xmlns="http://www.w3.org/2000/svg">
	<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
	fill="#E30016"/>
	<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
	fill="white"/>
</svg>
</i></label></div>
<div class="col-12">
	<div class="form__line2 row align-items-center">
		<div class="col-12 col-md-auto">
			<button class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100"
			type="submit">Отправить заявку
		</button>
	</div>
	<div class="col-12 col-md">
		<div class="form__info">Нажимая на кнопку Вы соглашаетесь с&nbsp;<a href="#">политикой
		конфиденциальности</a></div>
	</div>
</div>
</div>
</div>
</div>
<div class="mainorder__footer">
	<div class="mainorder__footer__label">Или позвоните на наш телефон</div>
	<div class="mainorder__footer__contacts"><a class="mainorder__footer__contacts__phone"
		href="tel:84951330777">8(495)133-07-77</a></div>
	</div>
</div>
</div>
</div>
</section>
<!-- /запишитесь на прем-->

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"devices_services", 
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
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"FILTER_NAME" => "arCatalogItems",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "20",
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
			0 => "TEXT_1_TITLE",
			1 => "TEXT_2_TITLE",
			2 => "TEXT_3_TITLE",
			3 => "TEXT_1",
			4 => "TEXT_2",
			5 => "TEXT_3",
			6 => "SECTION",
			7 => "",
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
		"COMPONENT_TEMPLATE" => "devices_services",
		"FILTER_SECTION" => "8"
	),
	false
);?>


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