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
 <section class="block__padd block__overflow d-none d-md-block">
        <div class="container">
            <div class="block__padd__title">
                <div class="row flex-nowrap align-items-end">
                    <div class="col-12 col-md">
                        <h2 class="h2">Технологии и оборудование</h2>
                    </div>
                </div>
            </div>
            <div class="equipment__slider__offset js--sl-equipment-offset"></div>
            <div class="equipment">
                <div class="equipment__slider swiper js--sl-equipment">
                    <div class="swiper-wrapper">
					<?foreach($arResult["ITEMS"] as $arItem){?>
						<?
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
						<div class="equipment__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="equipment__card">
								<div class="equipment__card__head">
									<div class="equipment__card__img">
										<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""/>
									</div>
									<div class="equipment__card__title"><?=$arItem["NAME"]?></div>
									<div class="equipment__card__text">
										<?=$arItem["~DETAIL_TEXT"]?>
									</div>
								</div>
								<div class="equipment__card__des">
									<ul class="equipment__card__des__list">
										<li>
											<div class="equipment__card__des__title">
												<?=$arItem["PROPERTIES"]["TEXT_1_TITLE"]["VALUE"]?>	
											</div>
											<div class="equipment__card__des__text">
												<?=$arItem["PROPERTIES"]["TEXT_1"]["VALUE"]?>
											</div>
										</li>
										<li>
											<div class="equipment__card__des__title">
												<?=$arItem["PROPERTIES"]["TEXT_2_TITLE"]["VALUE"]?>
											</div>
											<div class="equipment__card__des__text">
												<?=$arItem["PROPERTIES"]["TEXT_2"]["VALUE"]?>
											</div>
										</li>
										<li>
											<div class="equipment__card__des__title">
												<?=$arItem["PROPERTIES"]["TEXT_3_TITLE"]["VALUE"]?>
											</div>
											<div class="equipment__card__des__text">
												<?=$arItem["PROPERTIES"]["TEXT_3"]["VALUE"]?>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<?}?>
					</div>
                </div>
                <div class="equipment__slider__more">
                    <div class="slider__pag js--sl-equipment-pag"></div>
                </div>
                <div class="equipment__slider__btns d-none d-lg-block">
                    <div class="slider__nav">
                        <div class="slider__nav__btn left js--sl-equipment-prev">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </div>
                        <div class="slider__nav__btn right js--sl-equipment-next">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>