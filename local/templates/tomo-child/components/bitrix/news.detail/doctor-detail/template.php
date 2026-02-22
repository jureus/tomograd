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

                <div class="doctor__nav__offset js--docnav-offset"></div>
                <div class="doctor">
                    <div class="doctor__side">
                        <div class="doctor__icard">
                            <div class="doctor__icard__head">
                                <div class="row flex-nowrap">
                                    <div class="col">
                                        <div class="doctor__icard__head__title"><?=$arResult["NAME"]?></div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="doctor__icard__rating">
                                            <div class="doctor__icard__rating__label">10 отзывов</div>
                                            <div class="doctor__icard__rating__stars">
                                                <div class="rating">
                                                    <div class="rating__default"><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i></div>
                                                    <div class="rating__hover" style="width: 50%;"><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i><i><svg>
                                                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                            </svg></i></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor__icard__img">
                            	<img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
                            </div>
                            <div class="doctor__icard__rating">
                                <div class="doctor__icard__rating__label">10 отзывов</div>
                                <div class="doctor__icard__rating__stars">
                                    <div class="rating">
                                        <div class="rating__default"><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i></div>
                                        <div class="rating__hover" style="width: 50%;"><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
                                                </svg></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor__icard__footer">
                                <div class="row">
                                    <div class="col-12"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#">Записаться на прием</a></div>
                                    <div class="col-12"><a class="link-wicon link-wicon__mini" href="#"><span>Оставить отзыв</span><i><svg>
                                                    <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
                                                </svg></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="doctor__content">
                        <div class="doctor__ides">
                            <div class="doctor__ides__head d-lg-none">
                                <div class="doctor__ides__title">О враче</div>
                            </div>
                            <div class="doctor__ides__head">
                                <div class="row align-items-center">
                                    <div class="col-12 col-sm-auto order-2">
                                        <div class="doctor__ides__head__post"><span><?=$arResult["PROPERTIES"]["STATE"]["VALUE"]?></span></div>
                                    </div>
                                    <div class="col-12 d-none d-lg-block">
                                        <h1 class="doctor__ides__head__title"><?=$arResult["NAME"]?></h1>
                                    </div>
                                    <div class="col-12 col-lg-12 order-1">
                                        <div class="doctor__ides__head__des"><?=$arResult["PROPERTIES"]["SHORT_DESCRIPTION"]["VALUE"]?></div>
                                    </div>
                                    <div class="col-12 col-sm-auto col-lg-12 order-3">
                                        <div class="doctor__ides__head__workexperience"><span>Стаж работы:</span><b><?=$arResult["PROPERTIES"]["WORK_OLD"]["VALUE"]?></b></div>
                                    </div>
                                </div>
                            </div>
                            <div class="doctor__ides__content">
                                <div class="doctor__ides__list">
                                    <div class="row">
                                        <div class="doctor__ides__list__item col-auto">
                                            <div class="doctor__ides__list__label">Место приема</div>
                                            <? foreach ($arResult["PROPERTIES"]["WORK_PLACE"]["VALUE"] as $place) {?>
                                            	<div class="doctor__ides__list__text"><?=$place?></div>
                                            <? }?>
                                        </div>
                                        <div class="doctor__ides__list__item col-auto">
                                            <div class="doctor__ides__list__label">Пациенты</div>
                                            <div class="doctor__ides__list__text"><?=$arResult["PROPERTIES"]["RECIPIENTS"]["VALUE"]?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__nav">
                            <div class="doctor__nav__body js--docnav">
                                <div class="doctor__nav__item"><a class="doctor__nav__link js--linkto" href="#des_0">Специализация</a></div>
                                <div class="doctor__nav__item"><a class="doctor__nav__link js--linkto" href="#des_1">Образование</a></div>
                                <div class="doctor__nav__item"><a class="doctor__nav__link js--linkto" href="#des_2">Отзывы</a></div>
                            </div>
                        </div>
                        <div class="doctor__ides" id="des_0">
                            <div class="doctor__ides__head">
                                <div class="doctor__ides__title">Специализация</div>
                            </div>
                            <div class="doctor__ides__content">
                                <div class="block__text">
                                    <?=$arResult["PREVIEW_TEXT"]?>
                                </div>
                            </div>
                        </div>
                        <div class="doctor__ides" id="des_1">
                            <div class="doctor__ides__head">
                                <div class="doctor__ides__title">Образование</div>
                            </div>
                            <div class="doctor__ides__content">
                                <div class="block__text">
                                    <?=$arResult["~DETAIL_TEXT"]?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- /page-->
       
