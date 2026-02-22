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

$top_banner_id = $arResult["PROPERTIES"]["TOP_BANNER"]["VALUE"];
$bottom_banner_id = $arResult["PROPERTIES"]["BOTTOM_BANNER"]["VALUE"];

$main = [
    "title" => $arResult["PROPERTIES"]["SECTION_TITLE"]["VALUE"],
    "description" => $arResult["PROPERTIES"]["SECTION_DESCRIPTION"]["~VALUE"]["TEXT"],
    "svg" => $arResult["PROPERTIES"]["SECTION_SVG"]["VALUE"]
];

$symptoms = [
    "title" =>  $arResult["PROPERTIES"]["SYMPT_TITLE"]["VALUE"],
    "description" => $arResult["PROPERTIES"]["SYMPTOMS_DESCRIPTION"]["~VALUE"]["TEXT"],
    "list" => $arResult["PROPERTIES"]["SYMPTOMS_LIST"]['VALUE']
];

$contra = [
    "title" =>  $arResult["PROPERTIES"]["CONTRA"]['VALUE'],
    "list" => $arResult["PROPERTIES"]["CONTRA_LIST"]['VALUE'],
    "description" => $arResult["PROPERTIES"]['ACCENT']["~VALUE"]["TEXT"]
];

$description = [
    "title" =>  $arResult["PROPERTIES"]["DESCRIPTION_TITLE"]["VALUE"],
    "description" =>   $arResult["PROPERTIES"]["DESCRIPTION"]["~VALUE"]["TEXT"]
];

$prepare = [
    "title" => $arResult["PROPERTIES"]["PREPARE_TITLE"]["VALUE"],
    "description" => $arResult["PROPERTIES"]["PREPARE_TEXT"]["~VALUE"]["TEXT"]
];

//slimDump([$main, $symptoms, $contra, $description, $prepare, $top_banner_id, $bottom_banner_id]);
?>
<div class="actionarticle__head">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="actionarticle__head__content">
                <h1 class="actionarticle__head__content__title"><?=$arResult["NAME"]?></h1>
                <div class="actionarticle__head__content__text"><?=$arResult["~DETAIL_TEXT"]?></div>
                <div class="actionarticle__head__content__price">
                    <span>от <?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</span>
                </div>
                <div class="actionarticle__head__content__img">
                    <img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="actionarticle__head__side">
                <div class="actionarticle__head__side__content">
                    <ul class="actionarticle__head__side__list">
                        <? foreach ($arResult["PROPERTIES"]["SECTION_SVG"]["VALUE"] as $svg_item_id) {
                            $svg_item = getElementWithProperties($svg_item_id);
                            ?>
                            <li>
                                <div class="actionarticle__head__side__card">
                                    <div class="actionarticle__head__side__card__icon">
                                        <?=$svg_item["~DETAIL_TEXT"]?>
                                    </div>
                                    <div class="actionarticle__head__side__card__body">
                                        <span><?=$svg_item["NAME"]?>:</span>
                                        <p><?=$svg_item["PREVIEW_TEXT"]?></p>
                                    </div>
                                </div>
                            </li>
                        <? }?>
                    </ul>
                </div>
                <div class="actionarticle__head__side__footer"><a class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100" href="#">Записаться на прием</a></div>
            </div>
        </div>
    </section>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "actions-slider-big", Array(
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
		"IBLOCK_ID" => "16",	// Код информационного блока
		"IBLOCK_TYPE" => "actions",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "N",	// Показывать элементы подразделов раздела
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
		"COMPONENT_TEMPLATE" => "actions-slider"
	),
false
);?>

<section class="block__padd block__overflow">
    <div class="container">
        <div class="servicearticle-about">
            <div class="row servicearticle-about__row">
                <div class="col-12 col-lg-5">
                    <div class="servicearticle-about__text">
                        <div class="block__text">
                            <h2><?=$main["title"]?></h2>
                            <?=$main["description"]?>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="advantageslist row">
                        <? foreach ($main["svg"] as $svg_id) {
                            $svg = getElementWithProperties($svg_id);?>
                            <div class="advantageslist__item col-6">
                                <div class="advantageslist__card">
                                    <div class="advantageslist__card__head">
                                        <i><?=$svg["~DETAIL_TEXT"]?></i>
                                        <span><?=$svg["NAME"]?></span>
                                    </div>
                                </div>
                            </div>
                        <? } ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="block__padd">
    <div class="container">
        <div class="servarticle"><!-- el-->
            <?if(!empty($symptoms["title"]) || !empty($symptoms["description"]) || !empty($symptoms["list"])):?>
            <div class="servarticle__item">
                <div class="servarticle__card js--ServArticle-card">
                    <div class="servarticle__card__head js--servarticle-title">
                        <div class="servarticle__card__head__text">
                            <h2 class="h2"><?=$symptoms["title"]?></h2>
                        </div>
                        <div class="servarticle__card__head__icon"><svg>
                            <use xlink:href="img/icons.svg#ic-f-arrow-down2"></use>
                        </svg></div>
                    </div>
                    <div class="servarticle__card__content js--ServArticle-slide">
                        <div class="servarticle__card__body">
                            <div class="block__text">
                                <?=$symptoms["description"]?>
                                <?if(!empty($symptoms["list"])):?>
                                <ul class="ul-columns">
                                    <?foreach ($symptoms["list"] as $row) {?>
                                        <li><?=$row?></li>
                                        <?}?>
                                    </ul>
                                    <?endif;?>
                                    <?if(!empty($contra["title"]) || !empty($contra["list"]) || !empty($contra["description"])):?>
                                    <div class="row">
                                        <?if(!empty($contra["title"]) || !empty($contra["list"])):?>
                                        <div class="col-12 col-lg-5">
                                            <?if(!empty($contra["title"])):?>
                                            <h5><?=$contra["title"]?></h5>
                                            <?endif;?>
                                            <?if(!empty($contra["list"])):?>
                                            <ul>
                                                <?foreach ($contra["list"] as $row) {?>
                                                    <li><?=$row?></li>
                                                    <?}?>
                                                </ul>
                                                <?endif;?>
                                            </div>
                                            <?endif;?>
                                            <?if(!empty($contra["description"])):?>
                                            <div class="col-12 col-lg-7">
                                                <div class="text__accent">
                                                    <?=$contra["description"]?>
                                                </div>
                                            </div>
                                            <?endif;?>
                                        </div>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?><!-- /el--><!-- el-->
                    <?if(!empty($description["title"]) || !empty($description["description"])):?>
                    <div class="servarticle__item">
                        <div class="servarticle__card js--ServArticle-card">
                            <div class="servarticle__card__head js--servarticle-title">
                                <div class="servarticle__card__head__text">
                                    <h2 class="h2"><?=$description["title"]?></h2>
                                </div>
                                <div class="servarticle__card__head__icon"><svg>
                                    <use xlink:href="img/icons.svg#ic-f-arrow-down2"></use>
                                </svg></div>
                            </div>
                            <div class="servarticle__card__content js--ServArticle-slide">
                                <div class="servarticle__card__body">
                                    <div class="block__text">
                                        <?=$description["description"]?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                    <?if(!empty($prepare["title"]) || !empty($prepare["description"])):?>
                    <div class="servarticle__item">
                        <div class="servarticle__card js--ServArticle-card">
                            <div class="servarticle__card__head js--servarticle-title">
                                <div class="servarticle__card__head__text">
                                    <h2 class="h2"><?=$prepare["title"]?></h2>
                                </div>
                                <div class="servarticle__card__head__icon"><svg>
                                    <use xlink:href="img/icons.svg#ic-f-arrow-down2"></use>
                                </svg></div>
                            </div>
                            <div class="servarticle__card__content js--ServArticle-slide">
                                <div class="servarticle__card__body">
                                    <div class="block__text">
                                        <?=$prepare["description"]?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?endif;?>
                </div>
            </div>
        </section>
        <?if($bottom_banner_id):?>
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
		"ELEMENT_ID" => $bottom_banner_id,
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
<?endif;?>

<section class="anchor-section js--navpin--section block__padd block__overflow" id="des_4" data-link="#link_4">
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
                            <div class="pagprice__title__label"><?=$arItem["NAME"]?></div>
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
                <? foreach ($arResult["PROPERTIES"]["LINKED_SERVICES"]["VALUE"] as $serviceId) {
                    $service = getElementWithProperties($serviceId);
                    ?>
                    <div class="pagprice__body__item">
                        <div class="pagprice__row1 row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col-12 col-md">
                                        <div class="pagprice__title">
                                            <div class="pagprice__title__name"><?=$service["NAME"]?></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-auto">
                                        <div class="pagprice__price">
                                            <div class="pagprice__price__number"><?=$service["PROPERTIES"]["PRICE"]?> ₽</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="pagprice__btn"><button class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" type="button"><span>Записаться</span><span class="d-none d-md-inline-block">&nbsp;на прием</span></button></div>
                            </div>
                        </div>
                    </div>
                <? }?>
            </div>
        </div>
    </div>
</section>