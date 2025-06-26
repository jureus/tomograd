<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>

<section class="block__padd block__padd__pageinfidefirst block__overflow">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
		            "PATH" => "/",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		            "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
		            ),
		            false
		        );?>
                <h1 class="h1">Вакансии</h1>
                <div class="vacancies__article">
                    <div class="row">
                        <div class="col-12 col-lg-7 col-xl-6 order-2 order-lg-1">
                            <div class="vacancies__article__content">
                                <div class="block__text">
                                    <h3>Добро пожаловать</h3>
                                    <p>
                                    	<? $APPLICATION->IncludeComponent(
											    'bitrix:main.include',
											    '',
											    array (
											        'AREA_FILE_SHOW'   => 'file',
											        'AREA_FILE_SUFFIX' => 'inc',
											        'EDIT_TEMPLATE'    => '',
											        'PATH'             => '/include/vacancyes/1st.php'
											    )
										); ?>
                                    </p>
                                    <h3>ТомоГрад предлагает своим сотрудникам:</h3>
                                    <? $APPLICATION->IncludeComponent(
											    'bitrix:main.include',
											    '',
											    array (
											        'AREA_FILE_SHOW'   => 'file',
											        'AREA_FILE_SUFFIX' => 'inc',
											        'EDIT_TEMPLATE'    => '',
											        'PATH'             => '/include/vacancyes/2nd.php'
											    )
										); ?>
                                    <h3>Мы&nbsp;будем рады вас видеть в&nbsp;дружном коллективе наших сотрудников!</h3>
                                    <p>
                                    	<? $APPLICATION->IncludeComponent(
											    'bitrix:main.include',
											    '',
											    array (
											        'AREA_FILE_SHOW'   => 'file',
											        'AREA_FILE_SUFFIX' => 'inc',
											        'EDIT_TEMPLATE'    => '',
											        'PATH'             => '/include/vacancyes/3rd.php'
											    )
										); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-6 order-1 order-lg-2">
                            <div class="vacancies__article__img"><img src="<?=SITE_TEMPLATE_PATH?>/img/vacancies/img-vacancy-0.jpg" alt="" /></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent("bitrix:news.list", "vacancyes", Array(
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
		"IBLOCK_ID" => "13",	// Код информационного блока
		"IBLOCK_TYPE" => "about",	// Тип информационного блока (используется только для проверки)
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
			0 => "",
			1 => "CHARGES",
			2 => "REQUIRMENTS",
			3 => "OPTIONS",
			4 => "",
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
);?><?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>