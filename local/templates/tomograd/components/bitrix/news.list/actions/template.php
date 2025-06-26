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
<div class="pageactions row" >

	<?foreach($arResult["ITEMS"] as $arItem) {?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$marker = 0; 
		if ($arItem["PROPERTIES"]["TYPE"]["VALUE"] == "Комплексное предложение") $marker = 1;

		$current_price = $arItem["PROPERTIES"]["PRICE"]["VALUE"] / 100 * $arItem["PROPERTIES"]["SALE_SIZE"]["VALUE"];
		?>
		
		<div class="pageactions__item col-12 col-sm-6 col-lg-4 col-xl-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="pageactions__card">
				<div class="pageactions__card__marker marker__<?=$marker?>"><span><?=$arItem["PROPERTIES"]["TYPE"]["VALUE"]?></span></div>
				<div class="pageactions__card__title"><?=$arItem["NAME"]?></div>
				<div class="pageactions__card__sale"><span>-<?=$arItem["PROPERTIES"]["SALE_SIZE"]["VALUE"]?>% скидка</span></div>
				<div class="pageactions__card__price"><span><?=$current_price?> ₽</span><i>/ <s><?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> ₽ </s></i></div>
				<div class="pageactions__card__img"><img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
				<div class="pageactions__card__footer">
					<a class="mbtn mbtn__full mbtn__default mbtn__white d-block w-100" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Подробнее</a>
				</div>
			</div>
		</div>
		
	<?}?>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
		<br /><?=$arResult["NAV_STRING"]?>
	<?endif;?>
</div>
