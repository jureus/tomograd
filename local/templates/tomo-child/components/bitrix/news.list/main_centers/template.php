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
                        <h2 class="h2">Наши центры</h2>
                    </div>
                </div>
            </div>
            <div class="maincontacts__clinics__slider__offset js--sl-clinics-offset"></div>
            <div class="maincontacts">
                <div class="maincontacts__clinics">
                    <div class="maincontacts__clinics__slider swiper js--sl-clinics">
                        <div class="swiper-wrapper">
					<?foreach($arResult["ITEMS"] as $arItem){?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<div class="maincontacts__clinics__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="maincontacts__card">
                                    <div class="maincontacts__card__head">
                                        <div class="maincontacts__card__head__title"><?=$arItem["NAME"]?></div>
                                        <div class="maincontacts__card__head__address">
                                        	<?=$arItem["~DETAIL_TEXT"]?>
                                        </div>
                                    </div>
                                    <div class="maincontacts__card__des">
                                        <div class="maincontacts__card__des__worktime">
                                            <div class="row">
                                                <?=$arItem["PROPERTIES"]["WORK_TIME"]["~VALUE"]["TEXT"]?>
                                            </div>
                                        </div>
                                        <ul class="maincontacts__card__des__contacts">
                                            <li><a class="maincontacts__card__des__contacts__card"
                                                   href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>"><i>
                                                        <svg>
                                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-phone"></use>
                                                        </svg>
                                                    </i><span><?=formate_phone($arItem["PROPERTIES"]["PHONE"]["VALUE"])?></span></a></li>
                                            <li><a class="maincontacts__card__des__contacts__card" href="tel:+<?=$arItem["PROPERTIES"]["WHATSAPP"]["VALUE"]?>"><i>
                                                        <svg>
                                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-wa2"></use>
                                                        </svg>
                                                    </i><span><?=$arItem["PROPERTIES"]["WHATSAPP"]["VALUE"]?></span></a></li>
                                            <li><a class="maincontacts__card__des__contacts__card"
                                                   href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>"><i>
                                                        <svg>
                                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-mail2"></use>
                                                        </svg>
                                                    </i><span><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="maincontacts__card__footer">
                                        <div class="row">
                                            <div class="col-12">
                                            	<?=$arItem["PROPERTIES"]["MAP_DATA"]["~VALUE"]["TEXT"]?>
                                            </div>
                                            <div class="col-12"><a
                                                        class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100"
                                                        href="#">Записаться на прием</a></div>
                                        </div>
                                    </div>
                                    <div class="maincontacts__card__img"><img
                                                src="<?= SITE_TEMPLATE_PATH ?>/img/contacts/img-contacts-clinic-0.png"
                                                alt=""/></div>
                                </div>
                            </div>
						<? } ?>
					</div>
                    <div class="maincontacts__clinics__slider__more">
                        <div class="slider__pag js--sl-clinics-pag"></div>
                    </div>
                </div>
                <div class="maincontacts__map">
                    <div class="maincontacts__map__content" id="map-home"></div>
                </div>
            </div>
        </div>
    </div>
</section>