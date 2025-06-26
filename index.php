<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle('Мебельная компания');
?>
<!-- Главный баннер -->
<?
$APPLICATION->IncludeComponent('bitrix:news.list', 'main-banner', array (
    'ACTIVE_DATE_FORMAT'              => 'd.m.Y',    // Формат показа даты
    'ADD_SECTIONS_CHAIN'              => 'Y',    // Включать раздел в цепочку навигации
    'AJAX_MODE'                       => 'N', // Включить режим AJAX
    'AJAX_OPTION_ADDITIONAL'          => '', // Дополнительный идентификатор
    'AJAX_OPTION_HISTORY'             => 'N',   // Включить эмуляцию навигации браузера
    'AJAX_OPTION_JUMP'                => 'N',  // Включить прокрутку к началу компонента
    'AJAX_OPTION_STYLE'               => 'Y', // Включить подгрузку стилей
    'CACHE_FILTER'                    => 'N',  // Кешировать при установленном фильтре
    'CACHE_GROUPS'                    => 'Y',  // Учитывать права доступа
    'CACHE_TIME'                      => '36000000', // Время кеширования (сек.)
    'CACHE_TYPE'                      => 'A',    // Тип кеширования
    'CHECK_DATES'                     => 'Y',   // Показывать только активные на данный момент элементы
    'DETAIL_URL'                      => '', // URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
    'DISPLAY_BOTTOM_PAGER'            => 'Y',  // Выводить под списком
    'DISPLAY_DATE'                    => 'Y',  // Выводить дату элемента
    'DISPLAY_NAME'                    => 'Y',  // Выводить название элемента
    'DISPLAY_PICTURE'                 => 'Y',   // Выводить изображение для анонса
    'DISPLAY_PREVIEW_TEXT'            => 'Y',  // Выводить текст анонса
    'DISPLAY_TOP_PAGER'               => 'N', // Выводить над списком
    'FIELD_CODE'                      => array (  // Поля
        0 => '',
        1 => '',
    ),
    'FILTER_NAME'                     => '',    // Фильтр
    'HIDE_LINK_WHEN_NO_DETAIL'        => 'N',  // Скрывать ссылку, если нет детального описания
    'IBLOCK_ID'                       => '5', // Код информационного блока
    'IBLOCK_TYPE'                     => 'content', // Тип информационного блока (используется только для проверки)
    'INCLUDE_IBLOCK_INTO_CHAIN'       => 'Y', // Включать инфоблок в цепочку навигации
    'INCLUDE_SUBSECTIONS'             => 'Y',   // Показывать элементы подразделов раздела
    'MESSAGE_404'                     => '',    // Сообщение для показа (по умолчанию из компонента)
    'NEWS_COUNT'                      => '20',   // Количество новостей на странице
    'PAGER_BASE_LINK_ENABLE'          => 'N',    // Включить обработку ссылок
    'PAGER_DESC_NUMBERING'            => 'N',  // Использовать обратную навигацию
    'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',   // Время кеширования страниц для обратной навигации
    'PAGER_SHOW_ALL'                  => 'N',    // Показывать ссылку "Все"
    'PAGER_SHOW_ALWAYS'               => 'N', // Выводить всегда
    'PAGER_TEMPLATE'                  => '.default', // Шаблон постраничной навигации
    'PAGER_TITLE'                     => 'Новости', // Название категорий
    'PARENT_SECTION'                  => '', // ID раздела
    'PARENT_SECTION_CODE'             => '',    // Код раздела
    'PREVIEW_TRUNCATE_LEN'            => '',   // Максимальная длина анонса для вывода (только для типа текст)
    'PROPERTY_CODE'                   => array (   // Свойства
        0 => 'LINK',
        1 => 'LINK_TEXT',
        2 => 'HEADER_TEXT',
        3 => '',
    ),
    'SET_BROWSER_TITLE'               => 'Y', // Устанавливать заголовок окна браузера
    'SET_LAST_MODIFIED'               => 'N', // Устанавливать в заголовках ответа время модификации страницы
    'SET_META_DESCRIPTION'            => 'Y',  // Устанавливать описание страницы
    'SET_META_KEYWORDS'               => 'Y', // Устанавливать ключевые слова страницы
    'SET_STATUS_404'                  => 'N',    // Устанавливать статус 404
    'SET_TITLE'                       => 'Y', // Устанавливать заголовок страницы
    'SHOW_404'                        => 'N',  // Показ специальной страницы
    'SORT_BY1'                        => 'ACTIVE_FROM',    // Поле для первой сортировки новостей
    'SORT_BY2'                        => 'SORT',   // Поле для второй сортировки новостей
    'SORT_ORDER1'                     => 'DESC',    // Направление для первой сортировки новостей
    'SORT_ORDER2'                     => 'ASC', // Направление для второй сортировки новостей
    'STRICT_SECTION_CHECK'            => 'N',  // Строгая проверка раздела для показа списка
    'COMPONENT_TEMPLATE'              => '.default'
),
false
); ?>

<!-- каталог-->
<?
$APPLICATION->IncludeComponent('bitrix:menu', 'main_section', array (
    'ALLOW_MULTI_SELECT'    => 'N',    // Разрешить несколько активных пунктов одновременно
    'CHILD_MENU_TYPE'       => 'left',    // Тип меню для остальных уровней
    'DELAY'                 => 'N', // Откладывать выполнение шаблона меню
    'MAX_LEVEL'             => '1', // Уровень вложенности меню
    'MENU_CACHE_GET_VARS'   => '',    // Значимые переменные запроса
    'MENU_CACHE_TIME'       => '3600',    // Время кеширования (сек.)
    'MENU_CACHE_TYPE'       => 'N',   // Тип кеширования
    'MENU_CACHE_USE_GROUPS' => 'Y', // Учитывать права доступа
    'ROOT_MENU_TYPE'        => 'main_sections',    // Тип меню для первого уровня
    'USE_EXT'               => 'N',   // Подключать файлы с именами вида .тип_меню.menu_ext.php
    'COMPONENT_TEMPLATE'    => '.default'
),
false
); ?>

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

<!-- широкий спектр услуг-->
<?
$APPLICATION->IncludeComponent(
    'bitrix:news.list',
    'main_spektr',
    array (
        'ACTIVE_DATE_FORMAT'              => 'd.m.Y',
        'ADD_SECTIONS_CHAIN'              => 'Y',
        'AJAX_MODE'                       => 'N',
        'AJAX_OPTION_ADDITIONAL'          => '',
        'AJAX_OPTION_HISTORY'             => 'N',
        'AJAX_OPTION_JUMP'                => 'N',
        'AJAX_OPTION_STYLE'               => 'Y',
        'CACHE_FILTER'                    => 'N',
        'CACHE_GROUPS'                    => 'Y',
        'CACHE_TIME'                      => '36000000',
        'CACHE_TYPE'                      => 'A',
        'CHECK_DATES'                     => 'Y',
        'DETAIL_URL'                      => '',
        'DISPLAY_BOTTOM_PAGER'            => 'Y',
        'DISPLAY_DATE'                    => 'Y',
        'DISPLAY_NAME'                    => 'Y',
        'DISPLAY_PICTURE'                 => 'Y',
        'DISPLAY_PREVIEW_TEXT'            => 'Y',
        'DISPLAY_TOP_PAGER'               => 'N',
        'FIELD_CODE'                      => array (
            0 => '',
            1 => '',
        ),
        'FILTER_NAME'                     => '',
        'HIDE_LINK_WHEN_NO_DETAIL'        => 'N',
        'IBLOCK_ID'                       => '17',
        'IBLOCK_TYPE'                     => 'content',
        'INCLUDE_IBLOCK_INTO_CHAIN'       => 'Y',
        'INCLUDE_SUBSECTIONS'             => 'Y',
        'MESSAGE_404'                     => '',
        'NEWS_COUNT'                      => '8',
        'PAGER_BASE_LINK_ENABLE'          => 'N',
        'PAGER_DESC_NUMBERING'            => 'N',
        'PAGER_DESC_NUMBERING_CACHE_TIME' => '36000',
        'PAGER_SHOW_ALL'                  => 'N',
        'PAGER_SHOW_ALWAYS'               => 'N',
        'PAGER_TEMPLATE'                  => '.default',
        'PAGER_TITLE'                     => 'Новости',
        'PARENT_SECTION'                  => '',
        'PARENT_SECTION_CODE'             => '',
        'PREVIEW_TRUNCATE_LEN'            => '',
        'PROPERTY_CODE'                   => array (
            0 => 'BLOCK_SIZE',
            1 => 'LINKED_ITEM',
            2 => 'IMAGE',
        ),
        'SET_BROWSER_TITLE'               => 'Y',
        'SET_LAST_MODIFIED'               => 'N',
        'SET_META_DESCRIPTION'            => 'Y',
        'SET_META_KEYWORDS'               => 'Y',
        'SET_STATUS_404'                  => 'N',
        'SET_TITLE'                       => 'Y',
        'SHOW_404'                        => 'N',
        'SORT_BY1'                        => 'ACTIVE_FROM',
        'SORT_BY2'                        => 'SORT',
        'SORT_ORDER1'                     => 'DESC',
        'SORT_ORDER2'                     => 'ASC',
        'STRICT_SECTION_CHECK'            => 'N',
        'COMPONENT_TEMPLATE'              => 'main_spektr'
    ),
    false
); ?>
<!-- акции и специальные предложения-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.detail", 
    "main-actions", 
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
        "ELEMENT_ID" => "51",
        "FIELD_CODE" => array(
            0 => "",
            1 => "",
        ),
        "IBLOCK_ID" => "18",
        "IBLOCK_TYPE" => "content",
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
            1 => "SLIDER_ITEMS",
            2 => "RIGHT_ITEM_1",
            3 => "RIGHT_ITEM_2",
            4 => "BOTTOM_ITEM_1",
            5 => "BOTTOM_ITEM_2",
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
        "COMPONENT_TEMPLATE" => "main-actions"
    ),
    false
);?>
<!-- /акции и специальные предложения-->

<!-- специалисты-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "doctors_slider", 
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
        "TITLE" => 'Запишитесь на прием прямо сейчас'
    ),
    false
);?><!-- /запишитесь на прем-->
<!-- о нас-->
<?$APPLICATION->IncludeComponent("bitrix:news.detail", "main-about", Array(
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
        "ELEMENT_ID" => "57",   // ID новости
        "FIELD_CODE" => array(  // Поля
            0 => "DETAIL_TEXT",
            1 => "DETAIL_PICTURE",
            2 => "",
        ),
        "IBLOCK_ID" => "9", // Код информационного блока
        "IBLOCK_TYPE" => "about",   // Тип информационного блока (используется только для проверки)
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
            0 => "TITLE",
            1 => "PROMO_1",
            2 => "PROMO_2",
            3 => "GALLERY",
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
    ),
false
);?>
<!-- /о нас-->

<!-- наши преимущества-->
<!-- блок скрывается в мобилке и планшете на главной странице сайта, классы "d-none d-lg-block", чтобы это произошло-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "main_advantages", 
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
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "19",
        "IBLOCK_TYPE" => "content",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "INCLUDE_SUBSECTIONS" => "Y",
        "MESSAGE_404" => "",
        "NEWS_COUNT" => "5",
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
            0 => "SVG",
            1 => "PLACE",
            2 => "",
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
        "COMPONENT_TEMPLATE" => "main_advantages"
    ),
    false
);?>
<!-- /наши преимущества-->

<!-- технологии и оборудование-->
<!-- блок скрывается в мобилке на главной странице сайта, классы "d-none d-md-block", чтобы это произошло-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "main_devices", 
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
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "FILTER_NAME" => "",
        "HIDE_LINK_WHEN_NO_DETAIL" => "N",
        "IBLOCK_ID" => "20",
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
            0 => "",
            1 => "TEXT_1_TITLE",
            2 => "TEXT_2_TITLE",
            3 => "TEXT_3_TITLE",
            4 => "TEXT_1",
            5 => "TEXT_2",
            6 => "TEXT_3",
            7 => "",
            8 => "",
            9 => "",
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
        "COMPONENT_TEMPLATE" => "main_devices"
    ),
    false
);?>
<!-- /технологии и оборудование-->

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

<!-- приложение на ваш смартфон-->
<?
$APPLICATION->IncludeComponent(
    'bitrix:main.include',
    '',
    array (
        'AREA_FILE_SHOW'   => 'file',
        'AREA_FILE_SUFFIX' => 'inc',
        'EDIT_TEMPLATE'    => '',
        'PATH'             => '/include/main/applications.php'
    )
); 
?>
<!-- приложение на ваш смартфон-->

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

    <!-- banner-->
    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "main-single", Array(
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
        "ELEMENT_ID" => "71",   // ID новости
        "FIELD_CODE" => array(  // Поля
            0 => "NAME",
            1 => "DETAIL_TEXT",
            2 => "DETAIL_PICTURE",
            3 => "",
        ),
        "IBLOCK_ID" => "16",    // Код информационного блока
        "IBLOCK_TYPE" => "actions", // Тип информационного блока (используется только для проверки)
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
            0 => "SALE_SIZE",
            1 => "LINKED_ITEM",
            2 => "",
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
<!-- /banner-->

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
<!-- отзывы-->
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list", 
    "main_reviews", 
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

<?
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>