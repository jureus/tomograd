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
<div class="header__nav__tabs__item js--hnav-item" id="headtab_7">
	<div class="headactions row">
		<?foreach($arResult["ITEMS"] as $arItem){?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			$current_price = $arItem['PROPERTIES']['PRICE']['VALUE'] / 100 * $arItem['PROPERTIES']['SALE_SIZE']['VALUE'];
			?>
			<div class="headactions__item col-6 col-xl-4">
				<div class="headactions__card headactions__card__style-0">
					<a class="headactions__card__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>"></a>
					<div class="headactions__card__bg"><img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
					<div class="headactions__card__body">
						<div class="headactions__card__title"><span><?=$arItem["NAME"]?></span></div>
						<div class="headactions__card__label"><span>-<?=$arItem["PROPERTIES"]["SALE_SIZE"]["VALUE"]?>% скидка</span></div>
						<div class="headactions__card__price">
							<span><?=$current_price?> ₽</span>
							<i>/ <s><?=$arItem['PROPERTIES']['PRICE']['VALUE']?> ₽</s></i>
						</div>
					</div>
				</div>
			</div>
		<? }?>
	</div>
</div>