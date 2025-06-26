<?
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?$APPLICATION->ShowHead();?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<script src="<?=SITE_TEMPLATE_PATH?>/js/app.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/js/app.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/fancybox.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/swiper-bundle.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/simplebar.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/fancybox.umd.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/inputmask.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/gsap.min.js"></script>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/ScrollTrigger.min.js"></script>

    <?
    // Подключение CSS 
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/fancybox.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/swiper-bundle.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/assets/css/simplebar.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/font.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH."/css/style.css?v=".time());
    
    // Подключение JS 
// Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/app.min.js");

    // Фавиконки 
    Asset::getInstance()->addString('<link rel="icon" type="image/svg+xml" href="'.SITE_TEMPLATE_PATH.'/img/favicon.svg" />');
    Asset::getInstance()->addString('<link rel="icon" type="image/png" href="'.SITE_TEMPLATE_PATH.'/img/favicon.png" />');

    $contacts = getElementWithProperties(88);
    ?>
    
</head>


<body>
<?$APPLICATION->ShowPanel();?> <!-- Панель администрирования -->
    <!-- header start-->
    <header class="header js--nheader" data-top="true">
        <div class="container">
            <div class="header__top d-none d-md-block">
                <div class="row align-items-center flex-nowrap">
                    <div class="col-auto">
                        <div class="header__logofull"><a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/img/header-logo-full.png" alt="" /></a></div>
                    </div>
                    <div class="col-auto">
                        <div class="header__info">
                            <div class="header__info__item d-xl-none order-2 order-lg-1">
                                <div class="header__info__menu">
                                    <div class="header__info__menu__icon"><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use>
                                        </svg></div>
                                    <div class="header__info__card"><i class="header__info__card__icon">
                                        <svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-address"></use>
                                            </svg></i>
                                            <span class="header__info__card__text">
                                                <? $APPLICATION->IncludeComponent(
                                                        'bitrix:main.include',
                                                        '',
                                                        array (
                                                            'AREA_FILE_SHOW'   => 'file',
                                                            'AREA_FILE_SUFFIX' => 'inc',
                                                            'EDIT_TEMPLATE'    => '',
                                                            'PATH'             => '/include/header/address1.php'
                                                        )
                                                    ); ?>
                                            </span>
                                        </div>
                                    <div class="header__info__menu__popup">
                                        <div class="header__info__menu__popup__body">
                                            <ul>
                                                <li>
                                                    <div class="header__info__card">
                                                        <i class="header__info__card__icon">
                                                            <svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-address"></use>
                                                            </svg>
                                                        </i>
                                                        <span class="header__info__card__text">
                                                        <? $APPLICATION->IncludeComponent(
                                                            'bitrix:main.include',
                                                            '',
                                                            array (
                                                                'AREA_FILE_SHOW'   => 'file',
                                                                'AREA_FILE_SUFFIX' => 'inc',
                                                                'EDIT_TEMPLATE'    => '',
                                                                'PATH'             => '/include/header/address2.php'
                                                            )
                                                        ); ?>
                                                        </span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__info__item d-none d-xl-block">
                                <div class="header__info__card"><i class="header__info__card__icon"><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-address"></use>
                                        </svg></i>
                                        <span class="header__info__card__text">
                                            <? $APPLICATION->IncludeComponent(
                                                    'bitrix:main.include',
                                                    '',
                                                    array (
                                                        'AREA_FILE_SHOW'   => 'file',
                                                        'AREA_FILE_SUFFIX' => 'inc',
                                                        'EDIT_TEMPLATE'    => '',
                                                        'PATH'             => '/include/header/address1.php'
                                                    )
                                                ); ?>         
                                        </span>
                                </div>
                            </div>
                            <div class="header__info__item d-none d-xl-block">
                                <div class="header__info__card"><i class="header__info__card__icon"><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-address"></use>
                                        </svg></i>
                                        <span class="header__info__card__text">
                                            <? $APPLICATION->IncludeComponent(
                                                    'bitrix:main.include',
                                                    '',
                                                    array (
                                                        'AREA_FILE_SHOW'   => 'file',
                                                        'AREA_FILE_SUFFIX' => 'inc',
                                                        'EDIT_TEMPLATE'    => '',
                                                        'PATH'             => '/include/header/address2.php'
                                                    )
                                                ); ?>         
                                        </span>
                                </div>
                            </div>
                            <div class="header__info__item order-1 order-lg-2">
                                <? foreach ($contacts["PROPERTIES"]["PHONES"]["VALUE"] as $key => $phone) {?>
                                    <a class="header__info__card" href="tel:<?=$phone?>">
                                        <i class="header__info__card__icon">
                                            <svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-phone"></use>
                                            </svg>
                                        </i>
                                        <span class="header__info__card__text"><?=$contacts["PROPERTIES"]["PHONES"]["DESCRIPTION"][$key]?></span>
                                    </a>
                                <? }?>
                            </div>
                        </div>
                    </div>
                    <div class="col-auto ms-auto">
                        <div class="header__btns">
                            <div class="header__btns__item"><a class="mbtn mbtn__bordered mbtn__blue mbtn__icon" href="#"><svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-eye"></use>
                                    </svg></a></div>
                            <div class="header__btns__item d-lg-none"><a class="mbtn mbtn__bordered mbtn__red mbtn__icon" href="#"><svg>
                                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-user"></use>
                                    </svg></a></div>
                            <div class="header__btns__item d-none d-lg-block"><a class="mbtn mbtn__bordered mbtn__blue mbtn__wicon" href="#"><span><i><svg>
                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-user"></use>
                                            </svg></i><span>Личный кабинет</span></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__center js--headerfix">
                <div class="row header__center__row align-items-center flex-nowrap">
                    <div class="col-auto d-none d-md-block d-lg-none">
                        <div class="header__btnmobile js--mobilemenu-btn"><span class="line_0"></span><span class="line_1"></span><span class="line_2"></span></div>
                    </div>
                    <div class="col-auto header__logomini__wrap">
                        <div class="header__logomini"><a href="#"><svg width="54" height="40" viewBox="0 0 54 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="mask0_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask0_6202_11797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.883 6.15121C19.5103 1.24798 30.9956 -0.171371 41.003 3.48454C52.446 8.47379 54.0506 16.3448 49.8703 24.2157C47.6323 14.5383 31.5868 11.1835 20.4393 15.1405C18.9192 15.8716 17.5258 16.1727 16.5968 15.3985C14.4855 12.4308 11.8254 9.42003 9.67187 6.4953C9.5452 6.40927 9.75632 6.23723 9.883 6.15121Z" fill="#9EDBF4" />
                                    </g>
                                    <mask id="mask1_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_6202_11797)">
                                        <path d="M10.5553 5.84959C20.1826 0.946362 30.9923 -0.171918 40.9996 3.52701C52.4427 8.51625 54.0472 16.3872 49.8669 24.2582C51.8093 8.81733 29.4722 8.08615 18.3247 12.0431C16.6779 12.5593 15.7067 12.6883 15.1578 12.0001C13.0466 9.03238 11.7798 7.9141 9.71076 6.32271C9.54186 6.19367 10.4286 5.8926 10.5553 5.84959Z" stroke="white" stroke-width="0.530306" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <mask id="mask2_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask2_6202_11797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5553 5.84959C20.1826 0.946362 30.9923 -0.171918 40.9996 3.52701C52.4427 8.51625 54.0472 16.3872 49.8669 24.2582C51.8093 8.81733 29.4722 8.08615 18.3247 12.0431C16.6779 12.5593 15.7067 12.6883 15.1578 12.0001C13.0466 9.03238 11.7798 7.9141 9.71076 6.32271C9.54186 6.19367 10.4286 5.8926 10.5553 5.84959Z" fill="#005DA9" />
                                    </g>
                                    <mask id="mask3_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask3_6202_11797)">
                                        <path d="M10.5553 5.84959C20.1826 0.946362 30.9923 -0.171918 40.9996 3.52701C52.4427 8.51625 54.0472 16.3872 49.8669 24.2582C51.8093 8.81733 29.4722 8.08615 18.3247 12.0431C16.6779 12.5593 15.7067 12.6883 15.1578 12.0001C13.0466 9.03238 11.7798 7.9141 9.71076 6.32271C9.54186 6.19367 10.4286 5.8926 10.5553 5.84959Z" stroke="white" stroke-width="0.530306" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M16.9766 12.4744C17.4833 13.7647 17.8633 14.6679 18.4967 15.8292C21.6213 14.5389 24.9571 13.8507 28.4196 13.5926C28.0818 12.4313 27.7862 11.3991 27.4484 10.2378C23.5215 10.6679 20.2279 11.3991 16.9766 12.4744Z" fill="#009EE0" />
                                    <mask id="mask4_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask4_6202_11797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.38919 9.54736C4.47565 11.7839 2.06882 14.4506 0.88651 18.1925C-2.87153 28.9022 5.74241 36.5151 19.6767 38.1065C30.9931 38.9237 39.0581 36.7732 47.3764 30.2355C35.0889 34.4506 26.3061 32.5151 20.8168 30.6226C15.0742 28.6441 11.0206 25.1603 11.7806 19.5259C11.9495 18.4076 13.2163 18.1065 12.8362 15.956C11.3161 13.5904 9.50045 11.4398 7.38919 9.54736Z" fill="#102A83" />
                                    </g>
                                    <mask id="mask5_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask5_6202_11797)">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.89352 11.1816C8.40022 11.6548 8.56912 11.8698 9.11805 12.472C2.06644 17.4182 2.40424 24.8591 2.27757 26.3644C-0.298171 21.4612 3.5021 15.0956 7.89352 11.1816Z" fill="#009EE0" />
                                    </g>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M39.5292 0.558594C39.3603 0.601605 39.1914 0.644615 39.0225 0.687626C38.8536 0.687626 38.6847 0.730637 38.4736 0.730637H18.7122C18.5011 0.730637 18.3322 0.730637 18.1632 0.687626C17.9943 0.644615 17.8254 0.601605 17.6565 0.558594L16.0098 7.56935C16.6431 6.92419 17.361 6.45107 18.121 6.10698C18.9233 5.7629 19.8523 5.59085 20.8657 5.59085H23.6948V25.978C23.6948 26.5801 23.6525 27.1392 23.5681 27.6984C23.4836 28.2575 23.3147 28.7736 23.0614 29.2898C22.808 29.8059 22.428 30.236 21.9213 30.6231H33.4065C32.8998 30.236 32.5198 29.7629 32.2665 29.2898C32.0131 28.8167 31.8442 28.2575 31.7598 27.6984C31.6753 27.1392 31.6331 26.5801 31.6331 25.978V5.59085H34.4622C34.8844 5.59085 35.3067 5.59085 35.8134 5.67687C36.2779 5.71988 36.7423 5.89193 37.1224 6.14999C37.5446 6.36505 37.8402 6.75214 38.0513 7.26827L39.5292 0.558594Z" fill="#E30016" />
                                    <mask id="mask6_6202_11797" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0" y="0" width="158" height="40">
                                        <path d="M157.5 0H0V40H157.5V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask6_6202_11797)">
                                        <path d="M39.5155 0.558746C39.3466 0.601757 39.1777 0.644768 39.0088 0.687779C38.8399 0.687779 38.671 0.730789 38.4599 0.730789H18.6985C18.4874 0.730789 18.3185 0.730789 18.1496 0.687779C17.9807 0.644768 17.8118 0.601757 17.6429 0.558746L15.9961 7.5695C16.6295 6.92434 17.3473 6.45122 18.1074 6.10713C18.9096 5.76305 19.8386 5.59101 20.852 5.59101H23.6811V25.9781C23.6811 26.5803 23.6389 27.1394 23.5544 27.6985C23.47 28.2577 23.3011 28.7738 23.0477 29.2899C22.7943 29.8061 22.4143 30.2362 21.9076 30.6233H33.3929C32.8862 30.2362 32.5061 29.763 32.2528 29.2899C31.9994 28.8168 31.8305 28.2577 31.7461 27.6985C31.6616 27.1394 31.6194 26.5803 31.6194 25.9781V5.59101H34.4485C34.8708 5.59101 35.293 5.59101 35.7997 5.67703C36.2642 5.72004 36.7287 5.89208 37.1087 6.15015C37.5309 6.3652 37.8265 6.7523 38.0376 7.26842L39.5155 0.558746Z" stroke="white" stroke-width="0.654813" stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                            </a></div>
                    </div>
                    <div class="col-auto d-md-none">
                        <div class="header__logofull"><a href="#"><img src="<?=SITE_TEMPLATE_PATH?>/img/header-logo-full.png" alt="" /></a></div>
                    </div>
                    <?$APPLICATION->IncludeComponent("bitrix:menu", "header_menu", Array(
                        "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                        "CHILD_MENU_TYPE" => "top", // Тип меню для остальных уровней
                        "DELAY" => "N", // Откладывать выполнение шаблона меню
                        "MAX_LEVEL" => "1", // Уровень вложенности меню
                        "MENU_CACHE_GET_VARS" => array( // Значимые переменные запроса
                            0 => "",
                        ),
                        "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                        "MENU_CACHE_TYPE" => "N",   // Тип кеширования
                        "MENU_CACHE_USE_GROUPS" => "Y", // Учитывать права доступа
                        "ROOT_MENU_TYPE" => "top", // Тип меню для первого уровня
                        "USE_EXT" => "N",   // Подключать файлы с именами вида .тип_меню.menu_ext.php
                        ),
                        false
                    );?>
                    <div class="col-auto ms-auto">
                        <div class="header__btns">
                            <div class="header__btns__item">
                                <div class="header__search"><a class="mbtn mbtn__bordered mbtn__light mbtn__icon js--searchbtn" href="#"><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
                                        </svg></a>
                                    <div class="header__search__popup js--search-popup">
                                        <div class="header__search__popup__body">
                                            <form action="#">
                                                <div class="row header__search__popup__row">
                                                    <div class="col-auto">
                                                        <div class="header__search__popup__icon"><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
                                                            </svg></div>
                                                    </div>
                                                    <div class="col"><input class="header__search__popup__input js--search-input" type="text" placeholder="Введите название услуги" /></div>
                                                    <div class="col-auto">
                                                        <div class="header__search__popup__close js--searchbtn-close"><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#close"></use>
                                                            </svg></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="header__search__des js--search-rezult">
                                        <div class="header__search__des__container">
                                            <div class="header__search__des__body">
                                                <div class="header__search__des__default">
                                                    <div class="header__search__des__default__label">Популярные запросы</div>
                                                    <ul class="header__search__des__default__list">
                                                        <li><a href="#">Роды</a></li>
                                                        <li><a href="#">Невролог</a></li>
                                                        <li><a href="#">Гинеколог</a></li>
                                                        <li><a href="#">Уролог</a></li>
                                                    </ul>
                                                </div>
                                                <div class="header__search__des__noresult">По запросу “Капельница” ничего не нашлось.</div>
                                                <div class="header__search__des__result opened">
                                                    <div class="header__search__des__result__body js--styled-scroll">
                                                        <ul class="header__search__des__result__list">
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Терапевт</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Психотерапевт</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Филиппова Татьяна</a></div>
                                                                <div><span class="header__search__des__result__list__label">Врачи</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Профессиональный подход</a></div>
                                                                <div><span class="header__search__des__result__list__label">Отзывы</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Физиотерапевтическое отделение реабилитации</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Ребенок все время кашляет</a></div>
                                                                <div><span class="header__search__des__result__list__label">Симптомы</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Терапевт</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Психотерапевт</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Филиппова Татьяна</a></div>
                                                                <div><span class="header__search__des__result__list__label">Врачи</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Профессиональный подход</a></div>
                                                                <div><span class="header__search__des__result__list__label">Отзывы</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Физиотерапевтическое отделение реабилитации</a></div>
                                                                <div><span class="header__search__des__result__list__label">Направления</span></div>
                                                            </li>
                                                            <li>
                                                                <div><a class="header__search__des__result__list__link" href="#">Ребенок все время кашляет</a></div>
                                                                <div><span class="header__search__des__result__list__label">Симптомы</span></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="header__search__des__footer">
                                                <div class="header__search__des__footer__close"><button class="header__search__des__close" type="button">Закрыть поиск</button></div>
                                                <div class="header__search__des__footer__rezult"><a class="header__search__des__rezultlink" href="#"><span>Все результаты поиска</span><i>245</i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header__btns__item"><a class="mbtn mbtn__full mbtn__red mbtn__large" href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться<span class="header__menu__hiddentext"> на прием</span></a></div>
                        </div>
                    </div>
                    <div class="col-auto d-md-none">
                        <div class="header__btnmobile js--mobilemenu-btn"><span class="line_0"></span><span class="line_1"></span><span class="line_2"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <?/* это суб компонент для меню в шапке менять параметры бессмысленно */
        $APPLICATION->IncludeComponent("bitrix:menu", "header_section_for_menu", Array(
            "ALLOW_MULTI_SELECT" => "N",    
            "CHILD_MENU_TYPE" => "main_sections",   
            "DELAY" => "N",
            "MAX_LEVEL" => "1", 
            "MENU_CACHE_GET_VARS" => array( 
                0 => "",
            ),
            "MENU_CACHE_TIME" => "3600",    
            "MENU_CACHE_TYPE" => "N",   
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "main_sections",    
            "USE_EXT" => "N",   
            ),
            false
        );?>
    </header><!-- header end-->
    <div class="overlay js--overlay"></div><!-- mobile menu-->
    <div class="mobilemenu js--mobilemenu">
        <div class="mobilemenu__header d-md-none">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mobilemenu__search">
                            <div class="mobilemenu__search__icon"><svg>
                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
                                </svg></div>
                            <form action="#"><input class="mobilemenu__search__input" type="text" placeholder="Поиск" /></form>
                        </div>
                    </div>
                    <div class="col-auto"><a class="mbtn mbtn__bordered mbtn__grey mbtn__icon" href="#"><svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-eye"></use>
                            </svg></a></div>
                    <div class="col-auto">
                        <div class="mobilemenu__close js--mobilemenu-close"><span class="line_0"></span><span class="line_1"></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobilemenu__body">
            <div class="mobilemenu__center">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="mobilemenu__navmain">
                                <ul class="mobilemenu__navmain__list">
                                    <li class="mobilemenu__navmain__list__item js--mobilemenu-sub">
                                        <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link"><i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.76562 6.62109C9.85549 6.61923 9.94205 6.65499 10.0059 6.71973C10.0697 6.7847 10.1055 6.87354 10.1045 6.96582V8.42773H11.5254C11.6154 8.42572 11.7025 8.46148 11.7666 8.52637C11.8302 8.59114 11.866 8.67947 11.8652 8.77148V10.3438C11.8663 10.4366 11.8304 10.5259 11.7666 10.5918C11.7029 10.6578 11.6161 10.6947 11.5254 10.6943H10.1045V12.1494C10.1058 12.2423 10.0705 12.3323 10.0068 12.3984C9.94315 12.4644 9.8562 12.5012 9.76562 12.501H8.23438C8.14384 12.5012 8.05686 12.4643 7.99316 12.3984C7.92949 12.3323 7.89422 12.2423 7.89551 12.1494V10.6943H6.47461C6.38387 10.6947 6.29616 10.6578 6.23242 10.5918C6.16885 10.5259 6.13366 10.4364 6.13477 10.3438V8.77148C6.13401 8.67938 6.16965 8.59115 6.2334 8.52637C6.2975 8.46147 6.38461 8.42571 6.47461 8.42773H7.89551V6.96582C7.89445 6.87359 7.92941 6.78469 7.99316 6.71973C8.05702 6.65483 8.14438 6.6192 8.23438 6.62109H9.76562ZM8.58594 7.33008V8.77148C8.58382 8.97026 8.42805 9.13143 8.23438 9.13574H6.8252V9.98633H8.23438C8.42671 9.98734 8.58323 10.1464 8.58594 10.3438V11.793H9.41406V10.3438C9.41678 10.1463 9.57318 9.98721 9.76562 9.98633H11.1748V9.13574H9.76562C9.57182 9.13156 9.41616 8.97035 9.41406 8.77148V7.33008H8.58594Z" fill="currentColor" />
                                                    <path d="M9.76562 6.62109C9.85549 6.61923 9.94205 6.65499 10.0059 6.71973C10.0697 6.7847 10.1055 6.87354 10.1045 6.96582V8.42773H11.5254C11.6154 8.42572 11.7025 8.46148 11.7666 8.52637C11.8302 8.59114 11.866 8.67947 11.8652 8.77148V10.3438C11.8663 10.4366 11.8304 10.5259 11.7666 10.5918C11.7029 10.6578 11.6161 10.6947 11.5254 10.6943H10.1045V12.1494C10.1058 12.2423 10.0705 12.3323 10.0068 12.3984C9.94315 12.4644 9.8562 12.5012 9.76562 12.501H8.23438C8.14384 12.5012 8.05686 12.4643 7.99316 12.3984C7.92949 12.3323 7.89422 12.2423 7.89551 12.1494V10.6943H6.47461C6.38387 10.6947 6.29616 10.6578 6.23242 10.5918C6.16885 10.5259 6.13366 10.4364 6.13477 10.3438V8.77148C6.13401 8.67938 6.16965 8.59115 6.2334 8.52637C6.2975 8.46147 6.38461 8.42571 6.47461 8.42773H7.89551V6.96582C7.89445 6.87359 7.92941 6.78469 7.99316 6.71973C8.05702 6.65483 8.14438 6.6192 8.23438 6.62109H9.76562ZM8.58594 7.33008V8.77148C8.58382 8.97026 8.42805 9.13143 8.23438 9.13574H6.8252V9.98633H8.23438C8.42671 9.98734 8.58323 10.1464 8.58594 10.3438V11.793H9.41406V10.3438C9.41678 10.1463 9.57318 9.98721 9.76562 9.98633H11.1748V9.13574H9.76562C9.57182 9.13156 9.41616 8.97035 9.41406 8.77148V7.33008H8.58594Z" fill="currentColor" />
                                                    <path d="M8.77051 1.08984C8.90136 0.970229 9.09861 0.970261 9.22949 1.08984L16.8848 8.09668C16.9917 8.19384 17.0286 8.34945 16.9775 8.48633C16.9264 8.62285 16.7978 8.7129 16.6553 8.71191H15.041V16.6357C15.0409 16.8312 14.8956 17 14.7051 17H3.29492C3.10426 17 2.95908 16.8312 2.95898 16.6357V8.71191H1.34473C1.20217 8.71291 1.07363 8.62286 1.02246 8.48633C0.971422 8.34944 1.00835 8.19383 1.11523 8.09668L8.77051 1.08984ZM3.64941 15.2295V16.292H14.3506V15.2295H3.64941ZM2.25098 8.00293H3.29492C3.48822 8.0041 3.64522 8.1631 3.64941 8.36133V14.5205H14.3506V8.36133C14.3548 8.16311 14.5118 8.00412 14.7051 8.00293H15.75L9 1.8252L2.25098 8.00293Z" fill="currentColor" />
                                                    <path d="M8.77051 1.08984C8.90136 0.970229 9.09861 0.970261 9.22949 1.08984L16.8848 8.09668C16.9917 8.19384 17.0286 8.34945 16.9775 8.48633C16.9264 8.62285 16.7978 8.7129 16.6553 8.71191H15.041V16.6357C15.0409 16.8312 14.8956 17 14.7051 17H3.29492C3.10426 17 2.95908 16.8312 2.95898 16.6357V8.71191H1.34473C1.20217 8.71291 1.07363 8.62286 1.02246 8.48633C0.971422 8.34944 1.00835 8.19383 1.11523 8.09668L8.77051 1.08984ZM3.64941 15.2295V16.292H14.3506V15.2295H3.64941ZM2.25098 8.00293H3.29492C3.48822 8.0041 3.64522 8.1631 3.64941 8.36133V14.5205H14.3506V8.36133C14.3548 8.16311 14.5118 8.00412 14.7051 8.00293H15.75L9 1.8252L2.25098 8.00293Z" fill="currentColor" />
                                                </svg>
                                            </i><span>О клинике</span><b><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use>
                                                </svg></b></div>
                                        <div class="mobilemenu__navmain__sub js--mobilemenu-popup">
                                            <div class="mobilemenu__navmain__sub__body">
                                                <ul class="mobilemenu__navmain__sub__list">
                                                    <li><a href="#">О нас</a></li>
                                                    <li><a href="#">Новости</a></li>
                                                    <li><a href="#">Отзывы</a></li>
                                                    <li><a href="#">Лицензии</a></li>
                                                    <li><a href="#">Вакансии</a></li>
                                                    <li><a href="#">Контакты</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobilemenu__navmain__list__item js--mobilemenu-sub">
                                        <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link"><i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.9857 3.3701L16.7547 2.4117C16.7299 2.30461 16.6447 2.22281 16.5374 2.20305L9.0522 0.754247C9.01917 0.748584 8.98345 0.748584 8.95042 0.754247L1.45959 2.20028C1.35512 2.22281 1.26992 2.30461 1.24512 2.4117L1.01408 3.37009C0.238689 6.60062 0.761181 13.5968 8.28774 16.9597L8.89003 17.2275C8.92575 17.2443 8.96148 17.25 9.00002 17.25C9.03857 17.25 9.0743 17.2416 9.11002 17.2275L9.71231 16.9597C17.2386 13.5968 17.7613 6.60062 16.986 3.37009L16.9857 3.3701ZM9.49205 16.441L8.99977 16.6609L8.50748 16.441C1.31647 13.2303 0.810482 6.57517 1.54747 3.5054L1.73444 2.7218L8.99993 1.31806L16.2626 2.7218L16.4496 3.5054C17.1893 6.57514 16.6834 13.2305 9.49238 16.441H9.49205Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                    <path d="M15.3108 3.52496L9.05197 2.31577C9.01895 2.31011 8.98322 2.31011 8.9502 2.31577L2.68851 3.52496C2.58404 3.54472 2.49871 3.62639 2.47121 3.73361C2.45476 3.81528 0.626053 11.8631 8.88973 15.5501C8.92545 15.5669 8.96117 15.5726 8.99972 15.5726C9.03827 15.5726 9.074 15.5642 9.10972 15.5501C17.3734 11.8602 15.5446 3.81543 15.5254 3.73361C15.5007 3.62928 15.4154 3.54472 15.3109 3.52496H15.3108ZM8.9998 14.9835C1.85813 11.725 2.74377 5.22463 2.97194 4.04362L8.9998 2.87947L15.0277 4.04652C15.2559 5.22463 16.1414 11.725 8.9998 14.9835Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                    <path d="M12.2115 7.19547H10.2151V5.14907C10.2151 4.99403 10.0913 4.86719 9.9401 4.86719H8.05908C7.90783 4.86719 7.78408 4.99403 7.78408 5.14907V7.19547H5.78769C5.63644 7.19547 5.5127 7.32231 5.5127 7.47735V9.40548C5.5127 9.56052 5.63644 9.68736 5.78769 9.68736H7.78408V11.7338C7.78408 11.8888 7.90783 12.0156 8.05908 12.0156H9.9401C10.0913 12.0156 10.2151 11.8888 10.2151 11.7338V9.68736H12.2115C12.3627 9.68736 12.4865 9.56052 12.4865 9.40548V7.47735C12.4865 7.31954 12.3627 7.19547 12.2115 7.19547ZM11.9365 9.1207H9.9401C9.78885 9.1207 9.6651 9.24755 9.6651 9.40258V11.449H8.33407V9.40258C8.33407 9.24755 8.21032 9.1207 8.05908 9.1207H6.06268V7.75923H8.05908C8.21032 7.75923 8.33407 7.63238 8.33407 7.47735V5.43095H9.6651V7.47735C9.6651 7.63238 9.78885 7.75923 9.9401 7.75923H11.9365V9.1207Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                </svg>
                                            </i><span>Направления</span><b><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use>
                                                </svg></b></div>
                                        <div class="mobilemenu__navmain__sub js--mobilemenu-popup">
                                            <div class="mobilemenu__navmain__sub__body">
                                                <div class="mobilemenu__navmain__sub__title">Взрослые</div>
                                                <ul class="mobilemenu__navmain__sub__list mobilemenu__navmain__sub__list__columns">
                                                    <li><a href="#">Андрология</a></li>
                                                    <li><a href="#">Гастроэнтерология</a></li>
                                                    <li><a href="#">Гинекология</a></li>
                                                    <li><a href="#">Дерматология</a></li>
                                                    <li><a href="#">Диетология</a></li>
                                                    <li><a href="#">Кардиология</a></li>
                                                    <li><a href="#">Косметология</a></li>
                                                    <li><a href="#">Неврология</a></li>
                                                    <li><a href="#">Остеопатия</a></li>
                                                    <li><a href="#">Оториноларингология</a></li>
                                                    <li><a href="#">Офтальмология</a></li>
                                                    <li><a href="#">Проктология</a></li>
                                                    <li><a href="#">Психиатрия</a></li>
                                                    <li><a href="#">Пульмонология</a></li>
                                                    <li><a href="#">Ревматология</a></li>
                                                    <li><a href="#">Терапия</a></li>
                                                    <li><a href="#">Травматология</a></li>
                                                    <li><a href="#">Трихология</a></li>
                                                    <li><a href="#">Урология</a></li>
                                                    <li><a href="#">Физиотерапия</a></li>
                                                    <li><a href="#">Хирургия</a></li>
                                                    <li><a href="#">Дерматологическая хирургия</a></li>
                                                    <li><a href="#">Эндокринология</a></li>
                                                </ul>
                                                <div class="mobilemenu__navmain__sub__title">Детские</div>
                                                <ul class="mobilemenu__navmain__sub__list mobilemenu__navmain__sub__list__columns">
                                                    <li><a href="#">Педиатрия</a></li>
                                                    <li><a href="#">Гинекология</a></li>
                                                    <li><a href="#">Дерматология</a></li>
                                                    <li><a href="#">Неврология</a></li>
                                                    <li><a href="#">Остеопатия</a></li>
                                                    <li><a href="#">Оториноларингология</a></li>
                                                    <li><a href="#">Офтальмология</a></li>
                                                    <li><a href="#">Кардиология</a></li>
                                                    <li><a href="#">Урология</a></li>
                                                    <li><a href="#">Эндокринология</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobilemenu__navmain__list__item js--mobilemenu-sub">
                                        <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link"><i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.75 12.6175C0.75 12.8108 0.878621 12.9672 1.03746 12.9672H12.0657C12.2244 12.9672 12.3531 12.8108 12.3531 12.6175C12.3531 12.4244 12.2244 12.2677 12.0657 12.2677H11.3226C11.6756 11.8373 11.8941 11.2431 11.8941 10.5884C11.8941 9.27715 11.0174 8.21042 9.93992 8.21042C8.96309 8.21042 8.15391 9.08712 8.00991 10.227C7.48646 9.5519 6.74684 9.12777 5.9255 9.12777C4.39155 9.12777 1.14764 9.50096 1.01038 9.51674C0.852215 9.53496 0.736295 9.70594 0.751403 9.89806C0.766378 10.0907 0.907568 10.2321 1.0648 10.2133C1.09809 10.2094 4.41858 9.82762 5.9255 9.82762C7.09284 9.82762 8.05724 10.8943 8.19953 12.2679H1.03769C0.878988 12.2677 0.750099 12.4244 0.750099 12.6175L0.75 12.6175ZM9.93983 8.90997C10.7002 8.90997 11.319 9.66286 11.319 10.5882C11.319 11.5143 10.7001 12.2676 9.93983 12.2676C9.17868 12.2676 8.55977 11.5142 8.55977 10.5882C8.56004 9.66286 9.17895 8.90997 9.93983 8.90997ZM10.4697 0.750137C7.44466 0.750137 4.76253 3.22812 3.94722 6.77641C3.92302 6.88183 3.94067 6.99489 3.99509 7.08209C4.0495 7.16929 4.13427 7.22037 4.22412 7.22037H5.86466C5.98392 7.22037 6.09089 7.13073 6.13314 6.99505C6.81396 4.8226 8.55209 3.36267 10.4582 3.36267C13.0128 3.36267 15.0913 5.89158 15.0913 8.99955C15.0913 12.1074 13.0127 14.636 10.4582 14.636H1.03764C0.878799 14.636 0.750178 14.7927 0.750178 14.9858C0.750178 15.1789 0.878799 15.3355 1.03764 15.3355H6.13724C7.35421 16.571 8.88831 17.25 10.4698 17.25C14.2082 17.25 17.25 13.5488 17.25 8.99938C17.25 4.45072 14.2083 0.75 10.4698 0.75L10.4697 0.750137ZM10.4697 16.5505C9.27157 16.5505 8.10289 16.1241 7.10399 15.3356H10.4579C13.3296 15.3356 15.666 12.493 15.666 8.99943C15.666 5.50548 13.3297 2.66289 10.4579 2.66289C8.38151 2.66289 6.48234 4.20331 5.67046 6.52058H4.61515C5.47485 3.51273 7.82976 1.44968 10.4698 1.44968C13.8913 1.44968 16.675 4.83655 16.675 8.99939C16.675 13.1631 13.8913 16.5503 10.4698 16.5503L10.4697 16.5505Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                </svg>
                                            </i><span>Диагностика</span><b><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use>
                                                </svg></b></div>
                                        <div class="mobilemenu__navmain__sub js--mobilemenu-popup">
                                            <div class="mobilemenu__navmain__sub__body">
                                                <ul class="mobilemenu__navmain__sub__list">
                                                    <li><a href="#">Пункт 1</a></li>
                                                    <li><a href="#">Пункт 2</a></li>
                                                    <li><a href="#">Пункт 3</a></li>
                                                    <li><a href="#">Пункт 4</a></li>
                                                    <li><a href="#">Пункт 5</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobilemenu__navmain__list__item js--mobilemenu-sub">
                                        <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link"><i><svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.53506 16.5C10.4783 16.5 11.25 15.7617 11.25 14.8594V2.39062C11.25 1.48825 10.4783 0.75 9.53506 0.75H1.71494C0.771692 0.75 0 1.48825 0 2.39062V14.8594C0 15.7617 0.771692 16.5 1.71494 16.5H9.53506ZM0.685975 3.22734H10.5812V13.3172H0.685975V3.22734ZM1.715 1.40625H9.55227C10.1182 1.40625 10.5813 1.84925 10.5813 2.39068V2.57116L0.686098 2.57104V2.39057C0.686098 1.84916 1.14916 1.40625 1.71512 1.40625L1.715 1.40625ZM0.685975 14.8594V13.9735H10.5812V14.8594C10.5812 15.4008 10.1181 15.8438 9.55215 15.8438L1.71488 15.8437C1.14895 15.8437 0.685853 15.4008 0.685853 14.8594L0.685975 14.8594Z" fill="currentColor" />
                                                    <path d="M4.90448 15.122H6.345C6.53365 15.122 6.68796 14.9744 6.68796 14.7939C6.68796 14.6135 6.53364 14.4658 6.345 14.4658H4.90448C4.71583 14.4658 4.56152 14.6135 4.56152 14.7939C4.56152 14.9743 4.71584 15.122 4.90448 15.122Z" fill="currentColor" />
                                                    <path d="M8.66006 8.92036C8.04268 8.32974 7.15088 8.11643 6.32774 8.34608V5.91811C6.32774 4.72048 5.31596 3.80176 4.11553 3.80176C2.89786 3.80176 1.90332 4.75332 1.90332 5.91811V9.92123C1.90332 11.0861 2.89798 12.0376 4.11553 12.0376C4.4414 12.0376 4.75003 11.972 5.04154 11.8407C5.12731 11.9556 5.21308 12.0541 5.29873 12.1525C5.74458 12.579 6.34484 12.8252 6.97934 12.8252C9.08881 12.8251 10.152 10.3478 8.66007 8.92019L8.66006 8.92036ZM7.90545 9.18289L5.55602 11.4306C5.12728 10.8072 5.19582 9.93763 5.779 9.39623C6.36192 8.82195 7.25372 8.77276 7.90546 9.18291L7.90545 9.18289ZM4.09829 4.45789C4.93864 4.45789 5.62459 5.11408 5.62459 5.91804V7.59151L2.57199 7.5914V5.91805C2.57199 5.11411 3.25791 4.45789 4.09829 4.45789V4.45789ZM4.09829 11.3813C3.25794 11.3813 2.57199 10.7251 2.57199 9.92117V8.24782H5.64173V8.65798C5.52163 8.74003 5.40165 8.82209 5.29878 8.93687C4.64707 9.56033 4.45843 10.4791 4.73285 11.2666C4.52709 11.3321 4.32132 11.3813 4.09835 11.3813L4.09829 11.3813ZM6.97933 12.1689C6.63637 12.1689 6.32762 12.0705 6.05332 11.9064L8.40276 9.65876C9.14024 10.7251 8.3171 12.1689 6.97936 12.1689L6.97933 12.1689Z" fill="currentColor" />
                                                </svg>
                                            </i><span>Поиск по симптомам</span><b><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use>
                                                </svg></b></div>
                                        <div class="mobilemenu__navmain__sub js--mobilemenu-popup">
                                            <div class="mobilemenu__navmain__sub__body">
                                                <ul class="mobilemenu__navmain__sub__list">
                                                    <li><a href="#">Пункт 1</a></li>
                                                    <li><a href="#">Пункт 2</a></li>
                                                    <li><a href="#">Пункт 3</a></li>
                                                    <li><a href="#">Пункт 4</a></li>
                                                    <li><a href="#">Пункт 5</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mobilemenu__navmain__list__item"><a class="mobilemenu__navmain__link" href="#"><i><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M15.5 8.00185C15.5 7.75741 15.3421 7.59444 15.1053 7.59444H12.3816L13.3684 4.90556L13.9605 5.19074C14 5.23148 14.0789 5.23148 14.1184 5.23148C14.2763 5.23148 14.4342 5.15 14.4737 4.98704C14.5526 4.78333 14.4737 4.53889 14.2763 4.45741L13.2895 4.00926L12.8553 3.80556L11.1184 3.03148C10.9211 2.95 10.6842 3.03148 10.6053 3.23519C10.5263 3.43889 10.6053 3.68333 10.8026 3.76481L11.3158 4.00926L9.57895 7.59444H5.67105V5.39444C7.76316 5.19074 9.38158 3.35741 9.38158 1.15741C9.38158 0.912963 9.22368 0.75 8.98684 0.75C7.21053 0.75 5.67105 1.93148 5.11842 3.56111C4.52632 2.66481 3.53947 2.0537 2.43421 2.0537C2.19737 2.0537 2.03947 2.21667 2.03947 2.46111C2.03947 4.17222 3.30263 5.59815 4.88158 5.80185V7.5537H0.894737C0.657895 7.5537 0.5 7.71667 0.5 7.96111C0.5 10.9759 2.19737 13.6238 4.68421 14.887H2.75C2.51316 14.887 2.35526 15.05 2.35526 15.2944V16.8426C2.35526 17.087 2.51316 17.25 2.75 17.25H13.2892C13.5261 17.25 13.684 17.087 13.684 16.8426V15.2944C13.684 15.05 13.5261 14.887 13.2892 14.887H11.355C13.8024 13.6648 15.4998 11.0574 15.4998 8.00162L15.5 8.00185ZM8.59233 1.6463C8.39496 3.19444 7.21075 4.41667 5.71075 4.62037C5.90812 3.07222 7.09233 1.85 8.59233 1.6463ZM2.86842 2.95C3.89474 3.11296 4.68421 3.96852 4.8421 5.02778C3.85526 4.86481 3.06579 4.05 2.86842 2.95ZM12.066 4.33519L12.4608 4.49815L12.6976 4.57963L11.5529 7.59444H10.4871L12.066 4.33519ZM12.8555 15.7426V16.4759H3.14496V15.7426H12.8555ZM8.00045 14.9278C4.44782 14.9278 1.48707 12.0352 1.28992 8.40926H14.711C14.5136 12.0759 11.5531 14.9278 8.00045 14.9278Z" fill="currentColor" />
                                                </svg>
                                            </i><span>Восстановительное лечение</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mobilemenu__navelse">
                                <ul class="mobilemenu__navelse__list">
                                    <li class="mobilemenu__navelse__list__item"><a class="mobilemenu__navelse__link" href="#"><i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M16.4801 11.1562C16.0035 10.9124 15.4535 10.9686 15.0501 11.2875L12.465 12.8062C12.3183 12.8812 12.1717 12.9375 12.0067 12.9563C12.08 12.7875 12.1351 12.6 12.1351 12.3937C12.1351 11.6625 11.5668 11.0812 10.8518 11.0812H7.47841L7.05677 10.7438C6.21336 10.1062 5.24171 9.74993 4.23334 9.74993H1.85008C1.24507 9.74993 0.75 10.2562 0.75 10.875V15.375C0.75 15.9938 1.24504 16.5001 1.85008 16.5001H2.21672C2.73005 16.5001 3.17009 16.1251 3.28006 15.6375L5.53505 16.9875C5.81 17.1562 6.14006 17.25 6.47003 17.25H10.7601C11.1267 17.25 11.4751 17.1375 11.7867 16.9313L16.7001 13.5563L16.7184 13.5376C17.0668 13.2751 17.25 12.8626 17.25 12.4125C17.2503 11.8875 16.9569 11.4001 16.4803 11.1562L16.4801 11.1562ZM2.58329 15.375C2.58329 15.5812 2.41832 15.7499 2.21665 15.7499H1.85002C1.64834 15.7499 1.48338 15.5812 1.48338 15.375L1.48325 10.875C1.48325 10.6687 1.64822 10.5 1.84989 10.5H2.58316L2.58329 15.375ZM16.2784 12.9563L11.3651 16.3125C11.1817 16.4438 10.98 16.5001 10.76 16.5001H6.47C6.26832 16.5001 6.08493 16.4438 5.91996 16.3501L3.3166 14.7938V10.5001H4.25158C5.07655 10.5001 5.90153 10.8001 6.59827 11.3251L7.12988 11.7376C7.20315 11.7938 7.27656 11.8125 7.34984 11.8125H10.8332C11.1449 11.8125 11.3832 12.0563 11.3832 12.3751C11.3832 12.6751 11.1449 12.9376 10.8332 12.9376H6.25015C6.14017 12.9376 6.04848 12.9751 5.9752 13.0501C5.92021 13.125 5.88351 13.2188 5.88351 13.3126C5.88351 13.5188 6.04848 13.6875 6.25015 13.6875H11.9152C12.2269 13.6875 12.5569 13.5938 12.8319 13.4438L15.4169 11.925L15.4536 11.8875C15.6553 11.7375 15.912 11.6999 16.1504 11.8126C16.3703 11.925 16.517 12.15 16.517 12.4126C16.517 12.6376 16.4253 12.825 16.2786 12.9563L16.2784 12.9563ZM10.65 9.00001C12.8685 9.00001 14.6834 7.14373 14.6834 4.87501C14.6835 2.60619 12.8685 0.75 10.65 0.75C8.43162 0.75 6.61667 2.60629 6.61667 4.87501C6.61667 7.14369 8.43172 9.00001 10.65 9.00001ZM10.65 1.5C12.4651 1.5 13.9501 3.01872 13.9501 4.87501C13.9501 6.73129 12.4651 8.25001 10.65 8.25001C8.83499 8.25001 7.35001 6.73129 7.35001 4.87501C7.35014 3.01872 8.83512 1.5 10.65 1.5ZM9.36673 3.93754C9.36673 3.20629 9.93504 2.62507 10.65 2.62507H11.3833C11.585 2.62507 11.75 2.79379 11.75 3.00004C11.75 3.20629 11.585 3.375 11.3833 3.375H10.65C10.3384 3.375 10.1 3.61879 10.1 3.93754C10.1 4.23757 10.3384 4.50007 10.65 4.50007C11.3651 4.50007 11.9334 5.08129 11.9334 5.81254C11.9334 6.54379 11.3651 7.12501 10.65 7.12501H9.91677C9.71509 7.12501 9.55013 6.95629 9.55013 6.75004C9.55013 6.54379 9.7151 6.37508 9.91677 6.37508H10.65C10.9617 6.37508 11.2001 6.11258 11.2001 5.81254C11.2001 5.49381 10.9617 5.25001 10.65 5.25001C9.93504 5.25001 9.36673 4.66879 9.36673 3.93754Z" fill="currentColor" />
                                                </svg>
                                            </i><span>Цены</span></a></li>
                                    <li class="mobilemenu__navelse__list__item"><a class="mobilemenu__navelse__link" href="#"><i><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_5587_506610)">
                                                        <path d="M12.025 10.9249H11.75C11.6771 10.9249 11.6071 10.9539 11.5555 11.0055L9.00001 13.5611L6.4445 11.0056V11.0055C6.39294 10.9539 6.32296 10.9249 6.25004 10.9249H5.97504C4.59489 10.9431 3.2765 11.4993 2.30043 12.4754C1.32442 13.4514 0.768166 14.7698 0.75 16.15V16.975C0.75 17.1268 0.873137 17.25 1.025 17.25C1.17686 17.25 1.3 17.1268 1.3 16.975V16.15C1.31362 15.1547 1.63958 14.1888 2.23169 13.3886C2.82368 12.5884 3.6521 11.9944 4.59998 11.6903V13.2694C4.22444 13.3041 3.8754 13.4777 3.62114 13.7561C3.36677 14.0346 3.22558 14.3978 3.22499 14.775V16.15C3.22499 16.2229 3.25396 16.2929 3.30552 16.3444C3.35708 16.396 3.42706 16.425 3.49999 16.425H4.04998C4.20185 16.425 4.32498 16.3018 4.32498 16.15C4.32498 15.9981 4.20185 15.875 4.04998 15.875H3.77498V14.775C3.77498 14.5197 3.87639 14.2749 4.05686 14.0944C4.23745 13.9139 4.48224 13.8125 4.73747 13.8125H5.01247C5.26771 13.8125 5.5125 13.9139 5.69309 14.0944C5.87355 14.275 5.97496 14.5197 5.97496 14.775V15.875H5.69996C5.5481 15.875 5.42496 15.9981 5.42496 16.15C5.42496 16.3018 5.5481 16.425 5.69996 16.425H6.24996C6.32288 16.425 6.39286 16.396 6.44442 16.3444C6.49599 16.2929 6.52496 16.2229 6.52496 16.15V14.775C6.52434 14.3978 6.38316 14.0346 6.1288 13.7561C5.87455 13.4777 5.52554 13.3041 5.14997 13.2694V11.5555C5.42189 11.5032 5.69811 11.4762 5.97496 11.475H6.13616L8.72495 14.0638V16.975C8.72495 17.1268 8.84808 17.25 8.99994 17.25C9.15181 17.25 9.27494 17.1268 9.27494 16.975V14.0638L11.8637 11.475H12.0249C12.3018 11.4762 12.578 11.5032 12.8499 11.5555V14.264C12.5013 14.354 12.2188 14.609 12.0936 14.9466C11.9683 15.2842 12.0163 15.6618 12.222 15.9572C12.4276 16.2529 12.7648 16.4292 13.1249 16.4292C13.485 16.4292 13.8223 16.2529 14.0279 15.9572C14.2335 15.6617 14.2815 15.2842 14.1563 14.9466C14.031 14.609 13.7485 14.3541 13.3999 14.264V11.6903C14.3478 11.9944 15.1762 12.5884 15.7682 13.3886C16.3603 14.1888 16.6863 15.1547 16.6999 16.15V16.975C16.6999 17.1268 16.823 17.25 16.9749 17.25C17.1268 17.25 17.2499 17.1268 17.2499 16.975V16.15C17.2317 14.7698 16.6755 13.4514 15.6995 12.4754C14.7235 11.4993 13.4051 10.9431 12.0249 10.9249L12.025 10.9249ZM13.675 15.3249C13.675 15.4708 13.617 15.6107 13.5139 15.7138C13.4108 15.817 13.2708 15.8749 13.125 15.8749C12.9791 15.8749 12.8392 15.817 12.736 15.7138C12.6329 15.6107 12.575 15.4708 12.575 15.3249C12.575 15.1791 12.6329 15.0391 12.736 14.936C12.8392 14.8329 12.9791 14.7749 13.125 14.7749C13.2708 14.7749 13.4108 14.8329 13.5139 14.936C13.617 15.0391 13.675 15.1791 13.675 15.3249Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                        <path d="M5.42492 7.07497H5.44468C5.56757 8.22996 6.43628 9.20264 7.35751 9.78639H7.35763C7.35407 9.79904 7.35149 9.81193 7.3499 9.82494V10.9249C7.3499 11.0768 7.47303 11.1999 7.6249 11.1999C7.77676 11.1999 7.89989 11.0768 7.89989 10.9249V10.0826C8.24231 10.2554 8.61684 10.3549 8.99989 10.3749C9.38294 10.3549 9.75747 10.2554 10.0999 10.0826V10.9249C10.0999 11.0768 10.223 11.1999 10.3749 11.1999C10.5267 11.1999 10.6499 11.0768 10.6499 10.9249V9.82494C10.6483 9.81193 10.6457 9.79904 10.6421 9.78639C11.5634 9.20251 12.4321 8.22848 12.555 7.07497H12.5749C12.9267 7.0757 13.2576 6.90764 13.4644 6.62306C13.6714 6.33836 13.7293 5.97177 13.62 5.63737C13.5107 5.30281 13.2476 5.04108 12.9126 4.93353C13.1419 4.02248 13.2362 3.63613 13.1166 3.15845C12.8175 1.96135 11.3074 0.75 8.99983 0.75C6.69223 0.75 5.18222 1.96135 4.88302 3.15845C4.76345 3.63613 4.85773 4.02248 5.08706 4.93353C4.75204 5.04108 4.48895 5.30281 4.37967 5.63737C4.27041 5.9718 4.32823 6.33838 4.53522 6.62306C4.74208 6.90763 5.07293 7.07569 5.4248 7.07497H5.42492ZM8.9999 9.82495C8.0039 9.82495 5.97491 8.42466 5.97491 6.79997V5.32849C7.52339 5.05361 9.00053 4.46911 10.3177 3.60999C10.6573 4.05661 11.3596 4.90518 12.0249 5.25998V6.79997C12.0249 8.42466 9.9959 9.82495 8.9999 9.82495ZM13.1249 5.97497C13.1249 6.12082 13.0669 6.26078 12.9638 6.3639C12.8607 6.46702 12.7207 6.52497 12.5749 6.52497V5.42498C12.7207 5.42498 12.8607 5.48292 12.9638 5.58605C13.0669 5.68917 13.1249 5.82913 13.1249 5.97497ZM5.41674 3.29152C5.65823 2.32595 6.99602 1.3 8.9999 1.3C11.0038 1.3 12.3417 2.32598 12.5831 3.29152C12.6702 3.64104 12.5894 3.96478 12.3726 4.82598C11.8644 4.61016 11.0672 3.72071 10.5984 3.06599C10.5541 3.00387 10.4858 2.96299 10.4101 2.95304C10.3343 2.94322 10.258 2.96532 10.1992 3.01406C10.1834 3.02732 8.63805 4.2777 5.62853 4.83285C5.41049 3.96587 5.32898 3.64187 5.41651 3.29151L5.41674 3.29152ZM5.42497 5.42498V6.52497C5.22842 6.52497 5.04685 6.42013 4.94864 6.24997C4.85043 6.07982 4.85043 5.87013 4.94864 5.69998C5.04685 5.52982 5.22843 5.42498 5.42497 5.42498Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                        <path d="M11.2001 5.97492C11.2001 6.27865 10.9538 6.52492 10.6501 6.52492C10.3464 6.52492 10.1001 6.27865 10.1001 5.97492C10.1001 5.6712 10.3464 5.42493 10.6501 5.42493C10.9538 5.42493 11.2001 5.6712 11.2001 5.97492Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                        <path d="M7.90004 5.97492C7.90004 6.27865 7.65377 6.52492 7.35005 6.52492C7.04632 6.52492 6.80005 6.27865 6.80005 5.97492C6.80005 5.6712 7.04632 5.42493 7.35005 5.42493C7.65377 5.42493 7.90004 5.6712 7.90004 5.97492Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                        <path d="M9.65286 7.96061C9.46331 8.09909 9.23471 8.17361 9 8.17361C8.76529 8.17361 8.53668 8.09909 8.34714 7.96061C8.29066 7.91175 8.21676 7.88806 8.14249 7.89481C8.06809 7.90156 7.99971 7.93827 7.95293 7.99646C7.90628 8.05465 7.88517 8.12929 7.8945 8.20332C7.90395 8.27735 7.94299 8.34438 8.0029 8.38907C8.28919 8.60796 8.63958 8.72655 9.00003 8.72655C9.36048 8.72655 9.71085 8.60796 9.99716 8.38907C10.0571 8.34438 10.0961 8.27735 10.1056 8.20332C10.1149 8.12929 10.0938 8.05465 10.0471 7.99646C10.0003 7.93827 9.93197 7.90156 9.85757 7.89481C9.7833 7.88806 9.70939 7.91175 9.65292 7.96061H9.65286Z" fill="currentColor" stroke="currentColor" stroke-width="0.2" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_5587_506610">
                                                            <rect width="18" height="18" fill="white" />
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </i><span>Специалисты</span></a></li>
                                    <li class="mobilemenu__navelse__list__item"><a class="mobilemenu__navelse__link" href="#"><i><svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M6.46803 11.4869C6.54322 11.4869 6.6055 11.4189 6.6055 11.3368V8.28831H9.39571C9.4709 8.28831 9.53317 8.22031 9.53317 8.13822L9.5333 5.24194C9.5333 5.15984 9.47103 5.09185 9.39583 5.09185L6.60549 5.09171V2.04338C6.60549 1.96129 6.54322 1.89329 6.46802 1.89329H3.81528C3.74009 1.89329 3.67781 1.96129 3.67781 2.04338V5.09185L0.887471 5.09171C0.812276 5.09171 0.75 5.15985 0.75 5.24194V8.13822C0.75 8.22032 0.812276 8.28831 0.887471 8.28831H3.67768V11.3368C3.67768 11.4189 3.73995 11.4869 3.81515 11.4869L6.46803 11.4869ZM1.02478 7.98811V5.392H3.81499C3.89018 5.392 3.95246 5.32401 3.95246 5.24191L3.95259 2.19344H6.3304V5.24191C6.3304 5.32401 6.39268 5.392 6.46787 5.392H9.25808V7.98811H6.46787C6.39268 7.98811 6.3304 8.0561 6.3304 8.1382V11.1867H3.95259V8.1382C3.95259 8.0561 3.89031 7.98811 3.81512 7.98811H1.02478ZM15.0459 12.1593V13.5565C15.0459 14.6274 14.2466 15.5 13.2658 15.5H6.78509C5.80424 15.5 5.00499 14.6274 5.00499 13.5565V12.4757L3.99665 13.5925C3.94345 13.6526 3.85547 13.6526 3.80227 13.5945C3.74907 13.5364 3.74728 13.4403 3.80048 13.3822L5.04349 12.0052C5.09477 11.9471 5.18837 11.9471 5.23965 12.0052L6.48266 13.3822C6.53586 13.4403 6.53586 13.5364 6.48087 13.5945C6.45338 13.6225 6.41859 13.6384 6.38368 13.6384C6.3489 13.6384 6.31219 13.6245 6.28649 13.5945L5.27814 12.4776V13.5584C5.27814 14.4651 5.95283 15.2018 6.78331 15.2018H13.266C14.0964 15.2018 14.7711 14.4652 14.7711 13.5584V12.1613C14.7711 12.0792 14.8334 12.0112 14.9086 12.0112C14.9838 12.0112 15.0461 12.0772 15.0461 12.1593H15.0459ZM17.0094 2.95802C17.0606 3.02002 17.1468 3.02407 17.2037 2.97003C17.2605 2.91404 17.266 2.81994 17.2147 2.75781C16.6684 2.08931 15.9919 1.76302 15.046 1.70297V0.650091C15.046 0.567993 14.9837 0.5 14.9085 0.5C14.8334 0.5 14.7711 0.567993 14.7711 0.650091V1.69696C14.0854 1.71902 13.4309 2.12337 13.0607 2.75781C12.7068 3.36433 12.6701 4.07486 12.9654 4.70944C13.3357 5.44399 14.2267 5.78033 14.7712 5.98042L14.7709 9.86352C13.8836 9.85556 13.2236 9.58134 12.8112 9.04686C12.7617 8.98278 12.6755 8.97482 12.6168 9.02885C12.5581 9.08289 12.5508 9.17699 12.6003 9.24108C13.0678 9.84352 13.7974 10.1538 14.771 10.1638V11.4568C14.771 11.5389 14.8332 11.6069 14.9084 11.6069C14.9836 11.6069 15.0459 11.5389 15.0459 11.4568V10.1478C15.8306 10.0678 16.5236 9.66942 16.8939 9.06697C17.1341 8.67659 17.3504 8.02221 17.0149 7.11341C16.6226 6.31478 15.6839 5.98848 15.1211 5.79443C15.0954 5.78438 15.0698 5.77642 15.0459 5.76846V2.0051C15.9058 2.06318 16.5181 2.35946 17.0094 2.95786L17.0094 2.95802ZM13.2089 4.56938C12.9614 4.03699 12.9925 3.43441 13.2932 2.92003C13.614 2.37159 14.1805 2.02324 14.7708 1.99922V5.66429C14.2612 5.47427 13.5077 5.16404 13.2089 4.56953L13.2089 4.56938ZM16.7674 7.23948C16.9929 7.852 16.9581 8.42639 16.6667 8.89887C16.3458 9.42133 15.739 9.76953 15.046 9.8476L15.0459 6.08066C15.5684 6.26287 16.4356 6.56708 16.7674 7.23966L16.7674 7.23948Z" fill="currentColor" stroke="currentColor" stroke-width="0.5" />
                                                </svg>
                                            </i><span>Акции и предложения</span></a></li>
                                    <li class="mobilemenu__navelse__list__item"><a class="mobilemenu__navelse__link" href="#"><i><svg width="12" height="17" viewBox="0 0 12 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M9.53506 16.5C10.4783 16.5 11.25 15.7617 11.25 14.8594V2.39062C11.25 1.48825 10.4783 0.75 9.53506 0.75H1.71494C0.771692 0.75 0 1.48825 0 2.39062V14.8594C0 15.7617 0.771692 16.5 1.71494 16.5H9.53506ZM0.685975 3.22734H10.5812V13.3172H0.685975V3.22734ZM1.715 1.40625H9.55227C10.1182 1.40625 10.5813 1.84925 10.5813 2.39068V2.57116L0.686098 2.57104V2.39057C0.686098 1.84916 1.14916 1.40625 1.71512 1.40625L1.715 1.40625ZM0.685975 14.8594V13.9735H10.5812V14.8594C10.5812 15.4008 10.1181 15.8438 9.55215 15.8438L1.71488 15.8437C1.14895 15.8437 0.685853 15.4008 0.685853 14.8594L0.685975 14.8594Z" fill="currentColor" />
                                                    <path d="M4.90472 15.1219H6.34524C6.53389 15.1219 6.6882 14.9743 6.6882 14.7938C6.6882 14.6133 6.53388 14.4657 6.34524 14.4657H4.90472C4.71608 14.4657 4.56177 14.6133 4.56177 14.7938C4.56177 14.9742 4.71608 15.1219 4.90472 15.1219Z" fill="currentColor" />
                                                </svg>
                                            </i><span>Контакты</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobilemenu__footer">
                <div class="container">
                    <div class="mobilemenu__footer__btns">
                        <div class="row">
                            <div class="col-6 col-md-auto"><a class="mbtn mbtn__bordered mbtn__blue mbtn__middle d-block w-100" href="#">Детское отделение</a></div>
                            <div class="col-6 col-md-auto"><a class="mbtn mbtn__bordered mbtn__blue mbtn__middle d-block w-100" href="#">Личный кабинет</a></div>
                            <div class="col-12 col-md-auto"><a class="mbtn mbtn__full mbtn__red mbtn__middle text__upper d-block w-100" href="#">Консультация специалиста</a></div>
                        </div>
                    </div>
                    <div class="mobilemenu__footer__info">
                        <div class="row">
                            <div class="col-12 col-md">
                                <div class="mobilemenu__footer__contacts">
                                    <div><a class="mobilemenu__footer__contacts__phone" href="tel:+74951330777">+7 495 133-07-77</a></div>
                                    <div><a class="mobilemenu__footer__contacts__link" href="#">Заказать звонок</a></div>
                                </div>
                            </div>
                            <div class="col-auto d-none d-md-block"><a class="mobilemenu__footer__linkeye" href="#"><span>Версия для слабовидящих</span><i><svg>
                                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-eye"></use>
                                        </svg></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- mobile menu-->
    <!-- header end-->
    <main class="main">