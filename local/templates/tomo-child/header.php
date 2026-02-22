<?
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="описание страницы" />
    <title>Главная</title>
    
    <?
    // Подключение CSS 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/fancybox.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/bootstrap-reboot.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/bootstrap-grid.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/swiper-bundle.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/simplebar.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/font.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css?v=".time());
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/custom.css");

    // Подключение JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/app.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/app.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/fancybox.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/swiper-bundle.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/simplebar.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/fancybox.umd.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/inputmask.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/gsap.min.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/assets/js/ScrollTrigger.min.js");

    // Фавиконки
    Asset::getInstance()->addString('<link rel="icon" type="image/svg+xml" href="'.SITE_TEMPLATE_PATH.'/img/favicon.svg" />');
    Asset::getInstance()->addString('<link rel="icon" type="image/png" href="'.SITE_TEMPLATE_PATH.'/img/favicon.png" />');
    ?>
</head>

<body class="children">
    <?$APPLICATION->ShowPanel();?>
    <header class="ch-header js--nheader">
        <div class="ch-header__top">
            <div class="container">
                <div class="ch-header__top__row">
                    <div class="ch-header__top__item">
                        <?$APPLICATION->IncludeComponent("bitrix:search.title", "tomograd-child", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "NUM_CATEGORIES" => "5",
                            "TOP_COUNT" => "5",
                            "ORDER" => "date",
                            "USE_LANGUAGE_GUESS" => "N",
                            "CHECK_DATES" => "Y",
                            "SHOW_OTHERS" => "Y",
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "SHOW_INPUT" => "Y",
                            "INPUT_ID" => "title-search-input",
                            "CONTAINER_ID" => "title-search",
                            "CATEGORY_0_TITLE" => "Услуги",
                            "CATEGORY_0" => array(0 => "iblock_services",),
                            "CATEGORY_0_iblock_services" => array(0 => "all",),
                            "CATEGORY_1_TITLE" => "Врачи и персонал",
                            "CATEGORY_1" => array(0 => "iblock_doctors",),
                            "CATEGORY_1_iblock_doctors" => array(0 => "all",),
                            "CATEGORY_2_TITLE" => "Статьи и новости",
                            "CATEGORY_2" => array(0 => "iblock_about",),
                            "CATEGORY_2_iblock_about" => array(0 => "10",),
                            "CATEGORY_3_TITLE" => "Отзывы",
                            "CATEGORY_3" => array(0 => "iblock_about",),
                            "CATEGORY_4_TITLE" => "",
                            "CATEGORY_4" => "",
                            "CATEGORY_OTHERS_TITLE" => "",
                            "CATEGORY_3_iblock_about" => array(0 => "11",)
                        ), false);?>
                    </div>
                    <div class="ch-header__top__item"><a class="ch-header__btn" href="/">Общее отделение</a></div>
                    <div class="ch-header__top__item ch-header__top__item__mlauto">
						<a class="ch-header__circle link-ideye" href="#" id="specialversion">
							<svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-eye"></use>
                            </svg>
						</a>
					</div>
                    <div class="ch-header__top__item"><a class="ch-header__btnwicon" href="#"><span><i><svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-user"></use>
                                    </svg></i><b>Личный кабинет</b></span></a></div>
                </div>
            </div>
        </div>
        <div class="ch-header__center">
            <div class="container">
                <div class="ch-header__center__row">
                    <div class="ch-header__center__item d-md-none order-1"><a class="ch-header__logomobile" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/dpchildren/logo-tomograd-mobile.png" alt="" /></a></div>
                    <div class="ch-header__center__item d-lg-none order-4 order-md-1"><button class="ch-header__btnmenu js--mobilemenu-btn"><span class="line-0"></span><span class="line-1"></span><span class="line-2"></span></button></div>
                    <div class="ch-header__center__item d-none d-lg-block order-lg-1"><a class="ch-header__logo" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/dpchildren/logo-tomograd-childrens.png" alt="" /></a></div>
                    <div class="ch-header__center__item ch-header__center__item__col d-none d-md-block order-md-2">
                        <ul class="ch-header__menu">
                            <?$APPLICATION->IncludeComponent("bitrix:menu", "child_menu", Array(
                                "ROOT_MENU_TYPE" => "child_menu",
                                "MAX_LEVEL" => "1",
                                "CHILD_MENU_TYPE" => "child_menu",
                                "USE_EXT" => "N",
                                "DELAY" => "N",
                                "ALLOW_MULTI_SELECT" => "N",
                                "MENU_CACHE_TYPE" => "N",
                                "MENU_CACHE_TIME" => "3600",
                                "MENU_CACHE_USE_GROUPS" => "Y",
                                "MENU_CACHE_GET_VARS" => array()
                            ), false);?>
                        </ul>
                    </div>
                    <div class="ch-header__center__item d-lg-none ms-auto order-2 order-md-4">
                        <div class="ch-header__modalsearch"><button class="ch-header__modalsearch__btn js--searchbtn"><svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
                                </svg></button>
                            <div class="ch-header__modalsearch__body js--search-popup">
                                <div class="ch-header__modalsearch__body__content">
                                    <?$APPLICATION->IncludeComponent("bitrix:search.title", "tomograd_mobile", Array(
                                        "COMPONENT_TEMPLATE" => ".default",
                                        "NUM_CATEGORIES" => "5",
                                        "TOP_COUNT" => "5",
                                        "ORDER" => "date",
                                        "USE_LANGUAGE_GUESS" => "N",
                                        "CHECK_DATES" => "Y",
                                        "SHOW_OTHERS" => "Y",
                                        "PAGE" => "#SITE_DIR#search/index.php",
                                        "SHOW_INPUT" => "Y",
                                        "INPUT_ID" => "title-search-input-mobile",
                                        "CONTAINER_ID" => "title-search-mobile",
                                        "CATEGORY_0_TITLE" => "Услуги",
                                        "CATEGORY_0" => array(0 => "iblock_services",),
                                        "CATEGORY_0_iblock_services" => array(0 => "all",),
                                        "CATEGORY_1_TITLE" => "Врачи и персонал",
                                        "CATEGORY_1" => array(0 => "iblock_doctors",),
                                        "CATEGORY_1_iblock_doctors" => array(0 => "all",),
                                        "CATEGORY_2_TITLE" => "Статьи и новости",
                                        "CATEGORY_2" => array(0 => "iblock_about",),
                                        "CATEGORY_2_iblock_about" => array(0 => "10",),
                                        "CATEGORY_3_TITLE" => "Отзывы",
                                        "CATEGORY_3" => array(0 => "iblock_about",),
                                        "CATEGORY_4_TITLE" => "",
                                        "CATEGORY_4" => "",
                                        "CATEGORY_OTHERS_TITLE" => "",
                                        "CATEGORY_3_iblock_about" => array(0 => "11",)
                                    ), false);?>
                                    <button class="js--searchbtn-close ch-header__modalsearch__close" type="button"><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-delete"></use>
                                        </svg></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ch-header__center__item d-none d-md-block d-lg-none order-md-3"><a class="ch-header__btnblue" href="/">Общее отделение</a></div>
                    <div class="ch-header__center__item ms-md-auto order-3 order-md-5"><a class="ch-header__pink" href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться</a></div>
                </div>
            </div>
        </div>
    </header>
    
    <div class="ch-mobilemanu js--mobilemenu">
        <div class="ch-mobilemanu__overlay js--mobilemenu-overlay"></div>
        <div class="ch-mobilemanu__body">
            <div class="ch-mobilemanu__content">
                <div class="container">
                    <div class="ch-mobilemanu__search">
                        <?$APPLICATION->IncludeComponent("bitrix:search.title", "tomograd_mobile", Array(
                            "COMPONENT_TEMPLATE" => ".default",
                            "NUM_CATEGORIES" => "5",
                            "TOP_COUNT" => "5",
                            "ORDER" => "date",
                            "USE_LANGUAGE_GUESS" => "N",
                            "CHECK_DATES" => "Y",
                            "SHOW_OTHERS" => "Y",
                            "PAGE" => "#SITE_DIR#search/index.php",
                            "SHOW_INPUT" => "Y",
                            "INPUT_ID" => "title-search-input-mobile-menu",
                            "CONTAINER_ID" => "title-search-mobile-menu",
                            "CATEGORY_0_TITLE" => "Услуги",
                            "CATEGORY_0" => array(0 => "iblock_services",),
                            "CATEGORY_0_iblock_services" => array(0 => "all",),
                            "CATEGORY_1_TITLE" => "Врачи и персонал",
                            "CATEGORY_1" => array(0 => "iblock_doctors",),
                            "CATEGORY_1_iblock_doctors" => array(0 => "all",),
                            "CATEGORY_2_TITLE" => "Статьи и новости",
                            "CATEGORY_2" => array(0 => "iblock_about",),
                            "CATEGORY_2_iblock_about" => array(0 => "10",),
                            "CATEGORY_3_TITLE" => "Отзывы",
                            "CATEGORY_3" => array(0 => "iblock_about",),
                            "CATEGORY_4_TITLE" => "",
                            "CATEGORY_4" => "",
                            "CATEGORY_OTHERS_TITLE" => "",
                            "CATEGORY_3_iblock_about" => array(0 => "11",)
                        ), false);?>
                    </div>
                    <div class="ch-mobilemanu__menu">
                        <?$APPLICATION->IncludeComponent("bitrix:menu", "child_menu_mobile", Array(
                            "ROOT_MENU_TYPE" => "child_menu_mobile",
                            "MAX_LEVEL" => "1",
                            "CHILD_MENU_TYPE" => "child_menu_mobile",
                            "USE_EXT" => "N",
                            "DELAY" => "N",
                            "ALLOW_MULTI_SELECT" => "N",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "MENU_CACHE_GET_VARS" => array()
                        ), false);?>
                    </div>
                    <div class="ch-mobilemanu__footer">
                        <div class="ch-mobilemanu__footer__btns">
                            <div class="row">
                                <div class="col-6"><a class="ch-header__btnblue d-block w-100" href="/">Общее отделение</a></div>
                                <div class="col-6"><a class="ch-header__btnblue d-block w-100" href="#">Личный кабинет</a></div>
                                <div class="col-12"><a class="ch-header__pink2 d-block w-100" href="#">Консультация специалиста</a></div>
                            </div>
                        </div>
                        <div class="ch-mobilemanu__footer__contacts"><a href="tel:+74951330777">+7 495 133-07-77</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="overlay js--overlay"></div>
    <main class="main">