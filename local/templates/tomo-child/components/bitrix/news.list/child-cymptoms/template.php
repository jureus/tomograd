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

$bg_enums = [
	32 => 0,
	33 => 1,
	34 => 2,
	35 => 3,
	36 => 5
]
?>
<section class="block__padd block__padd__first block__padd__last" id="simptoms">
	<div class="container">
		<div class="block__padd__title">
			<div class="row flex-nowrap align-items-end">
				<div class="col-12 col-md">
					<h2 class="h2">Что делать, если у&nbsp;ребенка:</h2>
				</div>
			</div>
		</div>
		<div class="ch-problems row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="ch-problems__item col-12 col-md-6 col-lg-4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="ch-problems__card ch-problems__card__<?=$bg_enums[$arItem["PROPERTIES"]["BG_COLOR"]["VALUE_ENUM_ID"]]?>">
					<div class="ch-problems__card__img">
						<img src="<?=$arItem["PREVIEW_PICTURE"]["SAFE_SRC"]?>" alt="" />
						<div class="ch-problems__card__img__bg">
							<svg width="156" height="155" viewBox="0 0 156 155" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M182 92.7515C182 142.874 141.258 183.507 91 183.507C40.7421 183.507 0 138.387 0 88.2636C0 38.1407 11.5 12.9664 91 1.99594C170.5 -8.97452 182 42.6286 182 92.7515Z" fill="currentColor" />
							</svg>
						</div>
					</div>
					<div class="ch-problems__card__title"><?=$arItem["NAME"]?></div>
					<div class="ch-problems__card__label">Помогут:</div>
					<ul class="ch-problems__card__list">
						<? foreach ($arItem["PROPERTIES"]["LINK"]["VALUE"] as $key => $value) {?>
							<li>
								<a href="<?=$arItem["PROPERTIES"]["LINK"]["DESCRIPTION"][$key]?>">
									<span><?=$value?></span>
									<i><svg>
										<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
									</svg></i>
								</a>
							</li>
						<?}?>
					</ul>
				</div>
			</div>
			<?endforeach;?>
		</div>
	</div>
</section>
