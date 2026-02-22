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
<section class="block__padd">
            <div class="container">
                <div class="infopage-list">
				<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="infopage-list__item" id="block-<?=$arItem['ID']?>">
						<div class="infopage-list__card" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<h3 class="infopage-list__card__title"><?=$arItem["NAME"]?></h3>
							<div class="infopage-list__card__des">
								<?=$arItem["~PREVIEW_TEXT"]?>
                            </div>
							<? if (!empty($arItem["PROPERTIES"]["LINKS"]["VALUE"])){?>
								<ul class="infopage-list__docs">
								<?foreach($arItem["PROPERTIES"]["LINKS"]["VALUE"] as $key=>$link){?>
									<li>
										<a class="infopage-list__docs__card" href="<?=$link?>">
											<span class="infopage-list__docs__card__icon">
												<object data="<?=SITE_TEMPLATE_PATH?>/img/icons/ic-pdf.svg" type="image/svg+xml"></object>
											</span>
											<span class="infopage-list__docs__card__body"><?=$arItem["PROPERTIES"]["LINKS"]["DESCRIPTION"][$key]?></span>
										</a>
									</li>
								<?}?>
								</ul>
							<?}?>
							<? if (!empty($arItem["PROPERTIES"]["ELEMENTS_LIST"]["VALUE"])){?>
								<div class="infopage-list__contacts">
                                	<div class="row">
									<?foreach($arItem["PROPERTIES"]["ELEMENTS_LIST"]["~VALUE"] as $element){?>
										<div class="col-12 col-lg-4">
											<?=$element["TEXT"]?>
										</div>
									<?}?>
									</div>
								</div>
							<?}?>
						</div>
					</div>
				<?endforeach;?>
		</div>
    </div>
</section>
