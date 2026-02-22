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
?>
<section class="block__padd block__padd__pageinfidefirst block__overflow">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
		            "PATH" => "/",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		            "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
		        ),
					false
				);?>
                <div class="acrticle__content">
                    <div class="acrticle__content__body">
                        <div class="acrticle__header">
                            <h1 class="acrticle__header__title"><?=$arResult["NAME"]?></h1>
                            <div class="acrticle__header__date"><?=$arResult["DISPLAY_ACTIVE_FROM"]?></div>
                            <div class="acrticle__header__img"><img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""></div>
                        </div>
                        <div class="acrticle__tablecontents">
                            <div class="acrticle__tablecontents__title">Содержание</div>
                            <ul class="acrticle__tablecontents__list">
                            	<? foreach ($arResult["PROPERTIES"]["SECTION"]["DESCRIPTION"] as $key => $header) { ?>
                            		<li><a class="js--linkto" href="#par-<?=$key?>"><?=$header?></a></li>
                            	<? }?>
                            </ul>
                        </div>
                        <div class="acrticle__paragraphs">
                        	<? foreach ($arResult["PROPERTIES"]["SECTION"]["VALUE"] as $key => $section) {?>
                        		<div class="acrticle__paragraphs__item" id="par-<?=$key?>">
	                                <div class="acrticle__paragraphs__card">
	                                    <h5 class="acrticle__paragraphs__card__title"><?=$arResult["PROPERTIES"]["SECTION"]["DESCRIPTION"][$key]?></h5>
	                                    <div class="block__text">
	                                        <?=htmlspecialchars_decode($section["TEXT"])?>
	                                    </div>
	                                </div>
	                            </div>
                        	<? }?>
                        </div>
                        <div class="acrticle__footer">
                            <div class="acrticle__footer__socio">
                                <div class="acrticle__footer__socio__label">Поделиться новостью</div>
                                <ul class="acrticle__footer__socio__list">
                                    <li><a href="#"><svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-vk"></use>
                                            </svg></a></li>
                                    <li><a href="#"><svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-tg"></use>
                                            </svg></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:news.list", "news_small", Array(
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
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "10",	// Код информационного блока
		"IBLOCK_TYPE" => "about",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "4",	// Количество новостей на странице
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
			1 => "DESCRIPTION_TITLE",
			2 => "DESCRIPTION_VALUE",
			3 => "PROPERTY_1_TITLE",
			4 => "PROPERTY_1_VALUE",
			5 => "PROPERTY_2_TITLE",
			6 => "PROPERTY_2_VALUE",
			7 => "PROPERTY_3_TITLE",
			8 => "PROPERTY_3_VALUE",
			9 => "SALE_SIZE",
			10 => "TYPE",
			11 => "PRICE",
			12 => "",
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
                </div>
            </div>
        </section>	