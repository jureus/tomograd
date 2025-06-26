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
$linked_item = getElementWithProperties($arResult["PROPERTIES"]["LINKED_ITEM"]["VALUE"]);
$img = CFile::GetPath($arResult["DETAIL_PICTURE"]);
$salePrice = $arResult["PROPERTIES"]["PRICE"]["VALUE"] / 100 * $arResult["PROPERTIES"]["SALE_SIZE"]["VALUE"];
?>
<section class="block__padd">
        <div class="container">
            <div class="mainbanner">
                <div class="mainbanner__body">
                    <div class="mainbanner__body__bg">
                        <picture>
                            <source media="(min-width: 992px)"
                                    srcset="<?= SITE_TEMPLATE_PATH ?>/img/mainbanner/bg-mainbanner-desktop.svg"/>
                            <source media="(min-width: 768px) and (max-width: 992px)"
                                    srcset="<?= SITE_TEMPLATE_PATH ?>/img/mainbanner/bg-mainbanner-laptop.svg"/>
                            <source media="(max-width: 767px)"
                                    srcset="<?= SITE_TEMPLATE_PATH ?>/img/mainbanner/bg-mainbanner-mobile.svg"/>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/img/mainbanner/bg-mainbanner-mobile.svg" alt=""/>
                        </picture>
                    </div>
                    <div class="mainbanner__img"><img
                                src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""/></div>
                    <div class="mainbanner__content">
                        <div class="mainbanner__content__center">
                            <div class="mainbanner__head">
                                <div class="row">
                                    <div class="col-12 col-lg">
                                        <div class="mainbanner__head__title"><?=$arResult["NAME"]?></div>
                                    </div>
                                    <div class="col-12 col-lg-5">
                                        <ul class="mainbanner__head__list">
                                            <?=$arResult["~DETAIL_TEXT"]?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="mainbanner__label"><span>-<?=$arResult["PROPERTIES"]["SALE_SIZE"]["VALUE"]?>% скидка</span></div>
                            <div class="mainbanner__price"><span><?=$salePrice?> ₽</span><i><s>/</s> <?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</i></div>
                        </div>
                        <div class="mainbanner__content__footer">
                            <div class="row align-items-center">
                                <div class="col-12 col-lg-auto"><a class="mbtn mbtn__full mbtn__red mbtn__default"
                                                                   href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться на обследование</a></div>
                                <div class="col-12 col-lg-auto"><a class="link-wicon"
                                                                   href="#"><span>Узнать подробнее</span><i>
                                            <svg>
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                            </svg>
                                        </i></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>