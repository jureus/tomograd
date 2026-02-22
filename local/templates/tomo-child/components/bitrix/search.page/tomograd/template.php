<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
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

// 1. Группировка результатов
$result = [];
foreach ($arResult['SEARCH'] as $item) {
    $result[$item['PARAM1']][] = $item;
}

// 2. Подготовка фильтров
$arComponentFilters = [];

// Для акций
if (!empty($result['actions'])) {
    $arComponentFilters['actions'] = [
        'ID'                => array_column($result['actions'], 'ITEM_ID'),
        'IBLOCK_ID'         => 16,
        'ACTIVE'            => 'Y',
        'CHECK_PERMISSIONS' => 'Y'
    ];
}
//для врачей
if (!empty($result['doctors'])) {
    $arComponentFilters['doctors'] = [
        'ID'                => array_column($result['doctors'], 'ITEM_ID'),
        'IBLOCK_ID'         => 14,
        'ACTIVE'            => 'Y',
        'CHECK_PERMISSIONS' => 'Y'
    ];
}

// Для услуг
if (!empty($result['services'])) {
    // Собираем уникальные IBLOCK_ID из результатов поиска
    $iblockIdsServices = array_unique(array_column($result['services'], 'PARAM2'));

    $arComponentFilters['services'] = [
        'ID'        => array_column($result['services'], 'ITEM_ID'),
        'IBLOCK_ID' => $iblockIds,
        'ACTIVE'    => 'Y'
    ];
    if (count($iblockIdsServices) == 1) {
        $iblockIdsServices = current($iblockIdsServices);
    }
}

if (!empty($result['about'])) {
    $news = [];
    $reviews = [];

    foreach ($result['about'] as $item) {
        if (stripos($item['URL'], 'reviews/')) {
            $reviews[] = $item;
        } else {
            $news[] = $item;
        }
    }

    // Фильтр для новостей
    if (!empty($news)) {
        $arComponentFilters['news'] = [
            'ID'        => array_column($news, 'ITEM_ID'),
            'IBLOCK_ID' => 10, // Замените на ваш ID инфоблока новостей
            'ACTIVE'    => 'Y'
        ];
    }

    // Фильтр для отзывов
    if (!empty($reviews)) {
        $arComponentFilters['reviews'] = [
            'ID'        => array_column($reviews, 'ITEM_ID'),
            'IBLOCK_ID' => 11, // Замените на ваш ID инфоблока отзывов
            'ACTIVE'    => 'Y'
        ];
    }
}
?>

<section class="block__padd block__padd__pageinfidefirst">
    <div class="container">
        <div class="crumbs__offset"></div>
        <div class="crumbs">
            <ol style="padding-left: 0px; padding-right: 0px;">
                <li><a href="/">Главная страница</a></li>
                <li><span>Результат поиска</span></li>
            </ol>
        </div>
        <div class="page-searchresult">
            <!-- Строка поиска из целевого шаблона -->
            <div class="page-searchresult__form">
                <div class="header__search__popup__body">
                    <form action="<?= $APPLICATION->GetCurPage() ?>">
                        <div class="row header__search__popup__row">
                            <div class="col-auto">
                                <div class="header__search__popup__icon">
                                    <svg>
                                        <use xlink:href="img/icons.svg#ic-loop"></use>
                                    </svg>
                                </div>
                            </div>
                            <div class="col"><input class="header__search__popup__input js--prsearch-input" type="text"
                                                    name="q" placeholder="Введите название услуги"
                                                    value="<?= htmlspecialcharsbx($arResult['REQUEST']['QUERY']) ?>">
                            </div>
                            <div class="header__search__popup__close js--prsearch-clear active">
                                <svg>
                                    <use xlink:href="img/icons.svg#close"></use>
                                </svg>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <?php
            if (is_object($arResult['NAV_RESULT'])): ?>
                <div class="page-searchresult__des">Найдено <?= $arResult['NAV_RESULT']->SelectedRowsCount() ?>
                    результатов
                </div>
            <?php
            endif; ?>

            <div class="page-searchresult__wrap js--navpin--wrap">
                <!-- Навигационное меню из целевого шаблона -->
                <div class="page-searchresult__nav">
                            <div class="servicearticle-nav__offset"></div>
                            <div class="servicearticle-nav">
                                <div class="servicearticle-nav__body js--navpin">
                                    <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_0" href="#des_0">Услуги</a></div>
                                    <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_1" href="#des_1">Направления</a></div>
                                    <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_2" href="#des_2">Врачи и персонал</a></div>
                                    <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_3" href="#des_3">Статьи и новости</a></div>
                                    <div class="servicearticle-nav__item"><a class="servicearticle-nav__link js--linkto js--linkfolow" id="link_4" href="#des_4">Отзывы</a></div>
                                </div>
                            </div>
                        </div>

                <div class="page-searchresult__list">
                    <!-- Секция услуг -->
                    <?php
                    if (!empty($arComponentFilters['services'])): ?>
                        <div class="page-searchresult__list__item anchor-section js--navpin--section" id="des_0"
                             data-link="#link_0">
                            <div class="page-searchresult__card">
                                <div class="page-searchresult__card__head">
                                    <h5 class="h5">Услуги</h5>
                                </div>
                                <div class="page-searchresult__card__body">
                                    <?php
                                    $GLOBALS['arFilterServices'] = $arComponentFilters['services'];
                                    $APPLICATION->IncludeComponent("bitrix:news.list", "simple_search", Array(
	"IBLOCK_ID" => $iblockIdsServices,	// Код информационного блока
		"FILTER_NAME" => "arFilterServices",	// Фильтр
	),
	false
);
                                    ?>
                                </div>
                                <div class="page-searchresult__card__footer"><a class="link__more" href="#"><span>Показать все</span><i>
                                            <svg>
                                                <use xlink:href="img/icons.svg#ic-right"></use>
                                            </svg>
                                        </i></a></div>
                            </div>
                        </div>
                    <?php
                    endif; ?>

                    <!-- Секция врачей -->
                    <?php
                    if (!empty($arComponentFilters['doctors'])): ?>
                        <div class="page-searchresult__list__item anchor-section js--navpin--section" id="des_2"
                             data-link="#link_2">
                            <div class="page-searchresult__card">
                                <div class="page-searchresult__card__head">
                                    <h5 class="h5">Врачи и персонал</h5>
                                </div>
                                <div class="page-searchresult__card__body">
                                    <?php
                                    $GLOBALS['arFilterDoctros'] = $arComponentFilters['doctors'];
                                    $APPLICATION->IncludeComponent(
                                        'bitrix:news.list',
                                        'doctors_slider',
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
                                                0 => 'NAME',
                                                1 => 'PREVIEW_TEXT',
                                                2 => 'DETAIL_TEXT',
                                                3 => 'DETAIL_PICTURE',
                                                4 => '',
                                            ),
                                            'FILTER_NAME'                     => 'arFilterDoctros',
                                            'HIDE_LINK_WHEN_NO_DETAIL'        => 'N',
                                            'IBLOCK_ID'                       => '14',
                                            'IBLOCK_TYPE'                     => 'doctors',
                                            'INCLUDE_IBLOCK_INTO_CHAIN'       => 'Y',
                                            'INCLUDE_SUBSECTIONS'             => 'Y',
                                            'MESSAGE_404'                     => '',
                                            'NEWS_COUNT'                      => '20',
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
                                                0 => 'STATE',
                                                1 => 'SHORT_DESCRIPTION',
                                                2 => 'WORK_PLACE',
                                                3 => 'RECIPIENTS',
                                                4 => 'WORK_OLD',
                                                5 => '',
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
                                            'COMPONENT_TEMPLATE'              => 'doctors_slider'
                                        ),
                                        false
                                    );
                                    ?>
                                </div>
                                <div class="page-searchresult__card__footer"><a class="link__more" href="#"><span>Показать все</span><i>
                                            <svg>
                                                <use xlink:href="img/icons.svg#ic-right"></use>
                                            </svg>
                                        </i></a></div>
                            </div>
                        </div>
                    <?php
                    endif; ?>

                    <!-- Секция статей и новостей -->
                    <?php
                    if (!empty($arComponentFilters['news'])): ?>
                        <div class="page-searchresult__list__item anchor-section js--navpin--section" id="des_3"
                             data-link="#link_3">
                            <div class="page-searchresult__card">
                                <div class="page-searchresult__card__head">
                                    <h5 class="h5">Статьи и новости</h5>
                                </div>
                                <div class="page-searchresult__card__body">
                                    <?php
                                    $GLOBALS['arFilterNews'] = $arComponentFilters['news'];
                                    $APPLICATION->IncludeComponent(
                                        'bitrix:news.list',
                                        'simple_search',
                                        array (
                                            'IBLOCK_ID'   => 10,
                                            'FILTER_NAME' => 'arFilterNews',
                                        ),
                                        false
                                    );
                                    ?>
                                </div>
                                <div class="page-searchresult__card__footer"><a class="link__more" href="#"><span>Показать все</span><i>
                                            <svg>
                                                <use xlink:href="img/icons.svg#ic-right"></use>
                                            </svg>
                                        </i></a></div>
                            </div>
                        </div>
                    <?php
                    endif; ?>

                    <!-- Секция отзывов -->
                    <?php
                    if (!empty($arComponentFilters['reviews'])): ?>
                        <div class="page-searchresult__list__item anchor-section js--navpin--section" id="des_4"
                             data-link="#link_4">
                            <div class="page-searchresult__card">
                                <div class="page-searchresult__card__head">
                                    <h5 class="h5">Отзывы</h5>
                                </div>
                                <div class="page-searchresult__card__body">
                                    <?php
                                    $GLOBALS['arFilterReviews'] = $arComponentFilters['reviews'];
                                    $APPLICATION->IncludeComponent(
                                        'bitrix:news.list',
                                        'main_reviews',
                                        array (
                                            'ACTIVE_DATE_FORMAT'              => 'j F Y',
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
                                                0 => 'NAME',
                                                1 => 'DATE_ACTIVE_FROM',
                                                2 => '',
                                            ),
                                            'FILTER_NAME'                     => 'arFilterReviews',
                                            'HIDE_LINK_WHEN_NO_DETAIL'        => 'N',
                                            'IBLOCK_ID'                       => '11',
                                            'IBLOCK_TYPE'                     => 'about',
                                            'INCLUDE_IBLOCK_INTO_CHAIN'       => 'Y',
                                            'INCLUDE_SUBSECTIONS'             => 'Y',
                                            'MESSAGE_404'                     => '',
                                            'NEWS_COUNT'                      => '20',
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
                                                0 => 'SOURCE_NAME',
                                                1 => 'SOURCE_LINK',
                                                2 => 'ABOUT',
                                                3 => 'RATE',
                                                4 => 'SOURCE_IMG',
                                                5 => '',
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
                                            'COMPONENT_TEMPLATE'              => 'main_reviews'
                                        ),
                                        false
                                    );
                                    ?>
                                </div>
                                <div class="page-searchresult__card__footer"><a class="link__more" href="#"><span>Показать все</span><i>
                                            <svg>
                                                <use xlink:href="img/icons.svg#ic-right"></use>
                                            </svg>
                                        </i></a></div>
                            </div>
                        </div>
                    <?php
                    endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>