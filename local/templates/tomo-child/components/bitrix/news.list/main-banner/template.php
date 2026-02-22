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

<section class="welcome">
            <div class="welcome__slider swiper js--sl-welcome">
                <div class="swiper-wrapper">
                	<?php foreach ($arResult["ITEMS"] as $arItem) { ?>
                		<div class="welcome__slider__item swiper-slide">
                        <div class="welcome__card">
                            <div class="welcome__card__bg">
                                <picture>
                                    <source media="(min-width: 992px)" srcset="<?=SITE_TEMPLATE_PATH?>/img/welcome/bg-welcome-desktop.svg" />
                                    <source media="(min-width: 768px) and (max-width: 992px)" srcset="<?=SITE_TEMPLATE_PATH?>/img/welcome/bg-welcome-laptop.svg" />
                                    <source media="(max-width: 767px)" srcset="<?=SITE_TEMPLATE_PATH?>/img/welcome/bg-welcome-desktop.svg" /><img src="<?=SITE_TEMPLATE_PATH?>/img/welcome/bg-welcome-mobile.svg" alt="" />
                                </picture>
                            </div>
                            <div class="welcome__card__wrap">
                                <div class="container">
                                    <div class="welcome__card__body">
                                        <div class="welcome__card__img">
                                        	<img src="<?=CFile::GetPath($arItem["PROPERTIES"]["FULL_IMG"]["VALUE"])?>" alt="" />
                                        </div>
                                        <div class="welcome__card__content">
                                            <div class="welcome__card__head">
                                                <div class="welcome__card__head__title"><?=$arItem["NAME"]?></div>
                                                <div class="welcome__card__head__text"><?=$arItem["PROPERTIES"]["HEADER_TEXT"]["VALUE"]?></div>
                                            </div>
                                            <div class="welcome__card__text"><?=$arItem["DETAIL_TEXT"]?></div>
                                            <div class="welcome__card__footer"><a class="mbtn mbtn__full mbtn__red mbtn__middle" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>"><?=$arItem["PROPERTIES"]["LINK_TEXT"]["VALUE"]?></a></div>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                	<?php	} ?>
                </div>
                <div class="welcome__slider__pag js--sl-welcome-pag"></div>
            </div>
        </section><!-- /welcome--><!-- каталог-->