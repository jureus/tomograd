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
<section class="block__padd block__overflow">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2">Отзывы</h2>
                </div>
                <div class="col-12 col-md-auto d-none d-md-block"><a class="link__more" href="#"><span>Смотреть все отзывы</span><i>
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                    </svg>
                </i></a></div>
            </div>
        </div>
        <div class="reviews__offset js--sl-reviews-offset"></div>
        <div class="reviews">
            <div class="reviews__slider__btns d-none d-lg-block">
                <div class="slider__nav">
                    <div class="slider__nav__btn left js--sl-reviews-prev">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                        </svg>
                    </div>
                    <div class="slider__nav__btn right js--sl-reviews-next">
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="reviews__body">
                <div class="reviews__wrap">
                    <div class="reviews__slider swiper js--sl-reviews">
                        <div class="swiper-wrapper">
                          <?foreach($arResult["ITEMS"] as $arItem){?>
                             <?
                             $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                             $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                             $raiting_width = $arItem["PROPERTIES"]["RATE"]["VALUE"] / 5 * 100;

                             $linked_item = getElementWithProperties($arItem["PROPERTIES"]["LINKED_ITEM"]["VALUE"]);
                             ?>
                             <div class="reviews__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                    <div class="reviews__card">
                                        <div class="reviews__card__head">
                                            <div class="row align-items-center justify-content-between">
                                                <div class="col-auto">
                                                    <div class="rating">
                                                        <div class="rating__default">
                                                            <i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i></div>
                                                        <div class="rating__hover" style="width: <?=$raiting_width?>%;"><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-star"></use>
                                                                </svg>
                                                            </i></div>
                                                    </div>
                                                </div>
                                                <div class="col-auto">
                                                    <div class="reviews__card__head__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="reviews__card__head__name">
                                                        <?=$arItem["NAME"]?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="reviews__card__center">
                                            <div class="reviews__card__center__body">
                                                <div class="reviews__card__label"><?=$arItem["PROPERTIES"]["ABOUT"]["VALUE"]?>:</div>
                                                <a class="reviews__card__doctor" href="#"><?=$linked_item["NAME"]?></a>
                                                <div class="reviews__card__text">
                                                    <div class="reviews__card__text__body">
                                                        <?=$arItem["~DETAIL_TEXT"]?>
                                                    </div>
                                                    <div class="reviews__card__text__more"><a href="#"><span>Читать дальше</span><i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                                                </svg>
                                                            </i></a></div>
                                                </div>
                                            </div>
                                            <div class="reviews__card__center__footer">
                                                <a href="<?=$arItem["PROPERTIES"]["SOURCE_LINK"]["VALUE"]?>">
                                                    <i>
                                                    <img src="<?=CFILE::GetPath($arItem["PROPERTIES"]["SOURCE_IMG"]["VALUE"])?>" alt=""/>
                                                    </i>
                                                    <span><?=$arItem["PROPERTIES"]["SOURCE_NAME"]["VALUE"]?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?}?>
                    </div>
                </div>
                <div class="reviews__slider__more">
                    <div class="slider__pag js--sl-reviews-pag"></div>
                </div>
                <div class="page-searchresult__card__footer"><a class="link__more"
                    href="#"><span>Показать все</span><i>
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                        </svg>
                    </i></a></div>
                </div>
                <div class="block__padd__more d-md-none"><a class="link__more"
                    href="#"><span>Смотреть все отзывы</span><i>
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                        </svg>
                    </i></a></div>
                </div>
                <div class="reviews__aside">
                    <div class="reviews__invite">
                        <div class="reviews__invite__img"><img
                            src="<?= SITE_TEMPLATE_PATH ?>/img/reviews/bg-reviews-invite.png" alt=""/></div>
                            <div class="reviews__center">
                                <div class="reviews__invite__title">Нам важно ваше мнение</div>
                                <div class="reviews__invite__text">Расскажите о&nbsp;своих впечатлениях во&nbsp;время
                                    сотрудничества с&nbsp;поликлиникой ТомоГрад
                                </div>
                            </div>
                            <div class="reviews__invite__footer"><a
                                class="mbtn mbtn__full mbtn__white mbtn__default d-block w-100" href="#">Оставить
                            отзыв</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>