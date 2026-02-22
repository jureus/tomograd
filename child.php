<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
?>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "child-banner", 
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
            0 => "PREVIEW_TEXT",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "35",
        "IBLOCK_TYPE" => "child",
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
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
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
        "COMPONENT_TEMPLATE" => "child-banner"
    ),
    false
);?>
<!-- Что делать, если у ребенка-->
<?$APPLICATION->IncludeComponent("bitrix:news.list", "child-cymptoms", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N", // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
        "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",  // Учитывать права доступа
        "CACHE_TIME" => "36000000", // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
        "DISPLAY_DATE" => "Y",  // Выводить дату элемента
        "DISPLAY_NAME" => "Y",  // Выводить название элемента
        "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
        "FIELD_CODE" => array(  // Поля
            0 => "",
            1 => "NAME",
            2 => "PREVIEW_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "36",    // Код информационного блока
        "IBLOCK_TYPE" => "child",   // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",   // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
        "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости", // Название категорий
        "PARENT_SECTION" => "", // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(   // Свойства
            0 => "LINK",
            1 => "BG_COLOR",
            2 => "",
        ),
        "SET_BROWSER_TITLE" => "Y", // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",  // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y", // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "Y", // Устанавливать заголовок страницы
        "SHOW_404" => "N",  // Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
    ),
    false
);?>
<!-- /Что делать, если у ребенка-->
        <!-- Основные услуги-->
        <?$APPLICATION->IncludeComponent("bitrix:news.list", "main-child-menu", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
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
			1 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "38",	// Код информационного блока
		"IBLOCK_TYPE" => "child",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
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
			0 => "LINK",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
<!-- Основные услуги-->

<!-- запишитесь на прем-->
<?$APPLICATION->IncludeComponent("bitrix:form.result.new", "main_in_page_child", Array(
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
        "TITLE" => 'Запишитесь на прием прямо сейчас'
    ),
    false
);?>
<!-- /запишитесь на прем-->
<!-- специалисты-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "doctors_slider_child", 
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
        "COMPONENT_TEMPLATE" => "doctors_slider"
    ),
    false
);?>
<!-- /специалисты-->
<?
$APPLICATION->IncludeComponent(
    'bitrix:main.include',
    '',
    array (
        'AREA_FILE_SHOW'   => 'file',
        'AREA_FILE_SUFFIX' => 'inc',
        'EDIT_TEMPLATE'    => '',
        'PATH'             => '/include/main/child-banner.php'
    )
); ?>

<!-- о нас-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail", 
    "main-about-child", 
    array(
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "ADD_ELEMENT_CHAIN" => "N",
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
        "ELEMENT_CODE" => "",
        "ELEMENT_ID" => "239",
        "FIELD_CODE" => array(
            0 => "DETAIL_TEXT",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "IBLOCK_ID" => "9",
        "IBLOCK_TYPE" => "about",
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
            0 => "TITLE",
            1 => "PROMO_1",
            2 => "PROMO_2",
            3 => "GALLERY",
            4 => "",
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
        "COMPONENT_TEMPLATE" => "main-about-child"
    ),
    false
);?>
<!-- /о нас-->
       
        <!-- order-->
        <section class="block__padd block__padd__first block__overflow">
            <div class="container">
                <div class="mainorder">
                    <div class="mainorder__bg"></div>
                    <div class="mainorder__content">
                        <div class="mainorder__head">
                            <h2 class="mainorder__head__title"><span><i>Запишитесь на&nbsp;прием</i></span> прямо сейчас</h2>
                            <div class="mainorder__head__text">Оставьте свои данные и&nbsp;наш администратор свяжется с&nbsp;вами в&nbsp;ближайшее время</div>
                        </div>
                        <div class="mainorder__body">
                            <form class="ch-form" action="#">
                                <div class="ch-form__body">
                                    <div class="ch-form__line row">
                                        <div class="ch-form__line__item col-12"><label class="ch-form__input js--form-label"><input class="ch-form__input__text js--form-input" type="text" /><span class="ch-form__input__label">Ваше имя</span><i class="ch-form__input__icon valid"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="32" height="32" rx="16" fill="#88B059" />
                                                        <path d="M8.88867 15.6861L14.0087 21.3332L24.8887 10.6665" stroke="white" stroke-width="3.55556" />
                                                    </svg>
                                                </i><i class="ch-form__input__icon error"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="32" height="32" rx="16" fill="#E78EA0" />
                                                        <path d="M15.4321 22.5428C14.9241 22.5428 14.5074 22.3791 14.1818 22.0517C13.8301 21.7243 13.6543 21.3249 13.6543 20.8534C13.6543 20.3688 13.8236 19.9629 14.1622 19.6355C14.5139 19.3081 14.9372 19.1444 15.4321 19.1444C15.927 19.1444 16.3438 19.3081 16.6824 19.6355C17.034 19.9629 17.2099 20.3688 17.2099 20.8534C17.2099 21.3118 17.0405 21.7112 16.7019 22.0517C16.3503 22.3791 15.927 22.5428 15.4321 22.5428ZM13.8692 8.32056H17.034L16.6042 17.9854H14.299L13.8692 8.32056Z" fill="white" />
                                                    </svg>
                                                </i></label><!-- .ch-form__input__info.error Поле обязательно для заполнения--></div>
                                        <div class="ch-form__line__item col-12"><label class="ch-form__input js--form-label"><input class="ch-form__input__text js--form-input js--maskphone" type="text" /><span class="ch-form__input__label">Мобильный телефон</span><i class="ch-form__input__icon valid"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="32" height="32" rx="16" fill="#88B059" />
                                                        <path d="M8.88867 15.6861L14.0087 21.3332L24.8887 10.6665" stroke="white" stroke-width="3.55556" />
                                                    </svg>
                                                </i><i class="ch-form__input__icon error"><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect width="32" height="32" rx="16" fill="#E78EA0" />
                                                        <path d="M15.4321 22.5428C14.9241 22.5428 14.5074 22.3791 14.1818 22.0517C13.8301 21.7243 13.6543 21.3249 13.6543 20.8534C13.6543 20.3688 13.8236 19.9629 14.1622 19.6355C14.5139 19.3081 14.9372 19.1444 15.4321 19.1444C15.927 19.1444 16.3438 19.3081 16.6824 19.6355C17.034 19.9629 17.2099 20.3688 17.2099 20.8534C17.2099 21.3118 17.0405 21.7112 16.7019 22.0517C16.3503 22.3791 15.927 22.5428 15.4321 22.5428ZM13.8692 8.32056H17.034L16.6042 17.9854H14.299L13.8692 8.32056Z" fill="white" />
                                                    </svg>
                                                </i></label><!-- .ch-form__input__info.error Поле обязательно для заполнения--></div>
                                        <div class="ch-form__line__item col-12"><label class="ch-form__textarea js--form-label"><textarea class="ch-form__textarea__text js--form-textarea" name="#"></textarea><span class="ch-form__textarea__label">Ваш комментарий</span><i class="ch-form__textarea__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
                                                        <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
                                                    </svg>
                                                </i><i class="ch-form__textarea__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
                                                        <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
                                                    </svg>
                                                </i></label></div>
                                        <div class="ch-form__line__item col-12">
                                            <div class="ch-form__check__wrap"><label class="ch-form__check" for="check-confirm2"><input id="check-confirm2" type="checkbox" name="CONFIRM" /><span>Нажимая на&nbsp;кнопку Вы соглашаетесь с&nbsp;<a href="#" target="_blank">политикой конфиденциальности</a></span></label></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ch-form__footer">
                                    <div class="ch-form__line row">
                                        <div class="ch-form__line__item col-12"><button class="ch-form__btnpink" type="submit"><span><span>Записаться на прием</span><i><svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.2929L15.3431 0.928934C14.9526 0.538409 14.3195 0.538409 13.9289 0.928933C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 8L-8.74227e-08 9L21 9L21 8L21 7L8.74227e-08 7L0 8Z" fill="currentColor" />
                                                        </svg>
                                                    </i></span></button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="mainorder__footer">
                            <div class="mainorder__footer__label">Или позвоните на наш телефон</div>
                            <div class="mainorder__footer__contacts"><a class="mainorder__footer__contacts__phone" href="tel:84951330777">8(495)133-07-77</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- /order-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "child-banner-middle", 
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
            0 => "PREVIEW_TEXT",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "37",
        "IBLOCK_TYPE" => "child",
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
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "",
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
        "COMPONENT_TEMPLATE" => "child-banner-middle"
    ),
    false
);?>
<section class="ch-bglignt">
<!-- отзывы-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "main_reviews_child", 
    array(
        "ACTIVE_DATE_FORMAT" => "j F Y",
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
            0 => "NAME",
            1 => "DATE_ACTIVE_FROM",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "11",
        "IBLOCK_TYPE" => "about",
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
            0 => "NAME",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "22",
        "IBLOCK_TYPE" => "content",
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
        "PARENT_SECTION_CODE" => "",
        "PREVIEW_TRUNCATE_LEN" => "",
        "PROPERTY_CODE" => array(
            0 => "REVIEW_COUNT",
            1 => "RATE",
            2 => "BG_COLOR",
            3 => "",
            4 => "",
            5 => "",
            6 => "",
            7 => "",
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
        "COMPONENT_TEMPLATE" => "main_sources"
    ),
    false
);?>
<!-- /рейтинг независимых экспертов-->
        </section>

<!-- полезная информация-->
<?$APPLICATION->IncludeComponent("bitrix:news.detail", "main-news", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_ELEMENT_CHAIN" => "N", // Включать название элемента в цепочку навигации
        "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N", // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
        "BROWSER_TITLE" => "-", // Установить заголовок окна браузера из свойства
        "CACHE_GROUPS" => "Y",  // Учитывать права доступа
        "CACHE_TIME" => "36000000", // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
        "DISPLAY_DATE" => "Y",  // Выводить дату элемента
        "DISPLAY_NAME" => "Y",  // Выводить название элемента
        "DISPLAY_PICTURE" => "Y",   // Выводить детальное изображение
        "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
        "ELEMENT_CODE" => "",   // Код новости
        "ELEMENT_ID" => "87",   // ID новости
        "FIELD_CODE" => array(  // Поля
            0 => "DETAIL_PICTURE",
            1 => "",
        ),
        "IBLOCK_ID" => "23",    // Код информационного блока
        "IBLOCK_TYPE" => "content", // Тип информационного блока (используется только для проверки)
        "IBLOCK_URL" => "", // URL страницы просмотра списка элементов (по умолчанию - из настроек инфоблока)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "META_DESCRIPTION" => "-",  // Установить описание страницы из свойства
        "META_KEYWORDS" => "-", // Установить ключевые слова страницы из свойства
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
        "PAGER_TITLE" => "Страница",    // Название категорий
        "PROPERTY_CODE" => array(   // Свойства
            0 => "LEFT_BLOCK",
            1 => "TG_LINK",
            2 => "VK_LINK",
            3 => "RIGHT_BLOCK",
            4 => "",
        ),
        "SET_BROWSER_TITLE" => "Y", // Устанавливать заголовок окна браузера
        "SET_CANONICAL_URL" => "N", // Устанавливать канонический URL
        "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",  // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y", // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "Y", // Устанавливать заголовок страницы
        "SHOW_404" => "N",  // Показ специальной страницы
        "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа элемента
        "USE_PERMISSIONS" => "N",   // Использовать дополнительное ограничение доступа
        "USE_SHARE" => "N", // Отображать панель соц. закладок
        "COMPONENT_TEMPLATE" => ".default"
    ),
    false
);?>
    <!-- /полезная информация-->

<!-- лицензии-->
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_licenses", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N", // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
        "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",  // Учитывать права доступа
        "CACHE_TIME" => "36000000", // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
        "DISPLAY_DATE" => "Y",  // Выводить дату элемента
        "DISPLAY_NAME" => "Y",  // Выводить название элемента
        "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
        "FIELD_CODE" => array(  // Поля
            0 => "DETAIL_PICTURE",
            1 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "12",    // Код информационного блока
        "IBLOCK_TYPE" => "about",   // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",   // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
        "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости", // Название категорий
        "PARENT_SECTION" => "", // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(   // Свойства
            0 => "",
            1 => "",
        ),
        "SET_BROWSER_TITLE" => "Y", // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",  // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y", // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "Y", // Устанавливать заголовок страницы
        "SHOW_404" => "N",  // Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
    ),
false
);?>
<!-- /лицензии-->

<!-- наши центры-->
<?$APPLICATION->IncludeComponent("bitrix:news.list", "main_centers", Array(
    "ACTIVE_DATE_FORMAT" => "d.m.Y",    // Формат показа даты
        "ADD_SECTIONS_CHAIN" => "Y",    // Включать раздел в цепочку навигации
        "AJAX_MODE" => "N", // Включить режим AJAX
        "AJAX_OPTION_ADDITIONAL" => "", // Дополнительный идентификатор
        "AJAX_OPTION_HISTORY" => "N",   // Включить эмуляцию навигации браузера
        "AJAX_OPTION_JUMP" => "N",  // Включить прокрутку к началу компонента
        "AJAX_OPTION_STYLE" => "Y", // Включить подгрузку стилей
        "CACHE_FILTER" => "N",  // Кешировать при установленном фильтре
        "CACHE_GROUPS" => "Y",  // Учитывать права доступа
        "CACHE_TIME" => "36000000", // Время кеширования (сек.)
        "CACHE_TYPE" => "A",    // Тип кеширования
        "CHECK_DATES" => "Y",   // Показывать только активные на данный момент элементы
        "DETAIL_URL" => "", // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
        "DISPLAY_BOTTOM_PAGER" => "Y",  // Выводить под списком
        "DISPLAY_DATE" => "Y",  // Выводить дату элемента
        "DISPLAY_NAME" => "Y",  // Выводить название элемента
        "DISPLAY_PICTURE" => "Y",   // Выводить изображение для анонса
        "DISPLAY_PREVIEW_TEXT" => "Y",  // Выводить текст анонса
        "DISPLAY_TOP_PAGER" => "N", // Выводить над списком
        "FIELD_CODE" => array(  // Поля
            0 => "NAME",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",    // Фильтр
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",  // Скрывать ссылку, если нет детального описания
        "IBLOCK_ID" => "21",    // Код информационного блока
        "IBLOCK_TYPE" => "about",   // Тип информационного блока (используется только для проверки)
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y", // Включать инфоблок в цепочку навигации
        "INCLUDE_SUBSECTIONS" => "Y",   // Показывать элементы подразделов раздела
        "MESSAGE_404" => "",    // Сообщение для показа (по умолчанию из компонента)
        "NEWS_COUNT" => "20",   // Количество новостей на странице
        "PAGER_BASE_LINK_ENABLE" => "N",    // Включить обработку ссылок
        "PAGER_DESC_NUMBERING" => "N",  // Использовать обратную навигацию
        "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",   // Время кеширования страниц для обратной навигации
        "PAGER_SHOW_ALL" => "N",    // Показывать ссылку "Все"
        "PAGER_SHOW_ALWAYS" => "N", // Выводить всегда
        "PAGER_TEMPLATE" => ".default", // Шаблон постраничной навигации
        "PAGER_TITLE" => "Новости", // Название категорий
        "PARENT_SECTION" => "", // ID раздела
        "PARENT_SECTION_CODE" => "",    // Код раздела
        "PREVIEW_TRUNCATE_LEN" => "",   // Максимальная длина анонса для вывода (только для типа текст)
        "PROPERTY_CODE" => array(   // Свойства
            0 => "EMAIL",
            1 => "WHATSAPP",
            2 => "WORK_TIME",
            3 => "MAP_DATA",
            4 => "PHONE",
            5 => "",
            6 => "",
            7 => "",
            8 => "",
            9 => "",
            10 => "",
            11 => "",
        ),
        "SET_BROWSER_TITLE" => "Y", // Устанавливать заголовок окна браузера
        "SET_LAST_MODIFIED" => "N", // Устанавливать в заголовках ответа время модификации страницы
        "SET_META_DESCRIPTION" => "Y",  // Устанавливать описание страницы
        "SET_META_KEYWORDS" => "Y", // Устанавливать ключевые слова страницы
        "SET_STATUS_404" => "N",    // Устанавливать статус 404
        "SET_TITLE" => "Y", // Устанавливать заголовок страницы
        "SHOW_404" => "N",  // Показ специальной страницы
        "SORT_BY1" => "ACTIVE_FROM",    // Поле для первой сортировки новостей
        "SORT_BY2" => "SORT",   // Поле для второй сортировки новостей
        "SORT_ORDER1" => "DESC",    // Направление для первой сортировки новостей
        "SORT_ORDER2" => "ASC", // Направление для второй сортировки новостей
        "STRICT_SECTION_CHECK" => "N",  // Строгая проверка раздела для показа списка
        "COMPONENT_TEMPLATE" => "main_devices"
    ),
false
);?>
<!-- /наши центры-->
<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php');
?>