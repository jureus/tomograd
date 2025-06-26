<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>
<section class="block__padd block__padd__pageinfidefirst block__padd__bglignt">
            <div class="container">
                <?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
		            "PATH" => "/",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
		            "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
		            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
		            ),
		            false
		        );?>
                <h1 class="h1">Врачи</h1>
                <div class="filter">
                    <form class="form" action="#">
                        <div class="form__line row">
                            <div class="col-12 col-lg">
                                <div class="form__line row">
                                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                                        <div class="filter__place"><input class="filter__place__input" type="text" placeholder="Введите ФИО врача" />
                                            <div class="filter__place__icon"><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
                                                </svg></div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6 col-lg-6 order-2 order-lg-1">
                                        <div class="filter__select js--select">
                                            <div class="filter__select__label js--select-label"><span class="filter__select__label__text js--select-text">Выбрать специальность</span><i class="filter__select__label__icon"><svg>
                                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down"></use>
                                                    </svg></i></div>
                                            <div class="filter__select__popup">
                                                <div class="filter__select__popup__body js--styled-scroll">
                                                    <ul class="filter__select__sub">
                                                        <li class="filter__select__sub__option js--select-option">Все</li>
                                                        <li class="filter__select__sub__option js--select-option">Гастроэнтерология</li>
                                                        <li class="filter__select__sub__option js--select-option">Гинекология</li>
                                                        <li class="filter__select__sub__option js--select-option">Дерматология</li>
                                                        <li class="filter__select__sub__option js--select-option">Кардиология</li>
                                                        <li class="filter__select__sub__option js--select-option">Неврология</li>
                                                        <li class="filter__select__sub__option js--select-option">Ревматология</li>
                                                        <li class="filter__select__sub__option js--select-option">Терапия</li>
                                                        <li class="filter__select__sub__option js--select-option">Травматология</li>
                                                        <li class="filter__select__sub__option js--select-option">Урология/андрология</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-3 col-lg-auto order-3"><label class="filter__radio d-block w-100"><input class="filter__radio__input" type="radio" name="direction" checked="checked" /><span class="filter__radio__text">Взрослым</span></label></div>
                                    <div class="col-6 col-md-3 col-lg-auto order-4"><label class="filter__radio d-block w-100"><input class="filter__radio__input" type="radio" name="direction" /><span class="filter__radio__text">Детям</span></label></div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-auto">
                                <div class="filter__line"></div>
                                <div class="form__line row align-items-center">
                                    <div class="col-12 col-md-auto col-lg-12"><button class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100 filter__submit" type="submit">Найти</button></div>
                                    <div class="col-12 col-md-auto col-lg-12 text-center"><button class="filter__clear" type="button">Сбросить фильтр</button></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section><!-- /page-->
        <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"doctors-page", 
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
		"DETAIL_URL" => "#SITE_DIR#/doctors/#ELEMENT_CODE#/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "14",
		"IBLOCK_TYPE" => "doctors",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "16",
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
		"COMPONENT_TEMPLATE" => "doctors-page"
	),
	false
);?><?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>