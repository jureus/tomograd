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
                            <h2 class="h2">Технологии и оборудование</h2>
                        </div>
                    </div>
                </div>
                <div class="technologies__slider__offset js--sl-technologies-offset"></div>
                <div class="technologies">
                    <div class="technologies__slider swiper js--sl-technologies swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden">
                        <div class="swiper-wrapper" id="swiper-wrapper-7a3cded1869c9853" aria-live="polite" style="height: 556px; transform: translate3d(0px, 0px, 0px);">
                        	<? $count = count($arResult["ITEMS"]);?>
                        	<?foreach($arResult["ITEMS"] as $key => $arItem){?>
								<?
								$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
								?>
                        	<!-- el-->
                            <div class="technologies__slider__item swiper-slide swiper-slide-active" role="group" aria-label="<?=$key + 1?> / <?=$count?>" style="width: 546px; margin-right: 24px;" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="technologies__card technologies__card__style-<?=$key%2?>">
                                    <div class="technologies__card__img">
                                        <div class="technologies__card__img__bg"></div>
                                        <img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="">
                                    </div>
                                    <div class="technologies__card__body">
                                        <div class="technologies__card__title"><?=$arItem["NAME"]?></div>
                                        <div class="technologies__card__text">
                                        	<?=$arItem["~DETAIL_TEXT"]?>
                                        </div>
                                        <ul class="technologies__card__list">
                                        	<li>
												<?=$arItem["PROPERTIES"]["TEXT_1_TITLE"]["VALUE"]?>	
												<?=$arItem["PROPERTIES"]["TEXT_1"]["VALUE"]?>
											</li>
											<li>
												<?=$arItem["PROPERTIES"]["TEXT_2_TITLE"]["VALUE"]?>	
												<?=$arItem["PROPERTIES"]["TEXT_2"]["VALUE"]?>
											</li>
											<li>
												<?=$arItem["PROPERTIES"]["TEXT_3_TITLE"]["VALUE"]?>	
												<?=$arItem["PROPERTIES"]["TEXT_3"]["VALUE"]?>
											</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <? }?>
                        </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                    <div class="technologies__slider__more">
                        <div class="slider__pag js--sl-technologies-pag swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock"><span class="slider__pag__bullet active" tabindex="0" role="button" aria-label="Go to slide 1" aria-current="true"></span></div>
                    </div>
                </div>
            </div>
        </section>
 