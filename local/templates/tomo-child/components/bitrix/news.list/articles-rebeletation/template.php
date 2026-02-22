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
$bg_colors = [
	"Оранжевый" => 0, "Голубой" => 1, "Фиолетовый" => 2, "Розовый" => 3 
];

$linked_el_id = $arParams["ELEMENT_ID"];
foreach ($arResult["ITEMS"] as $key => $item) {
	if (empty($item["PROPERTIES"]["LINKED_ITEM"]["VALUE"])) continue; 

	foreach ($item["PROPERTIES"]["LINKED_ITEM"]["VALUE"] as $id) {
		if ($id != $linked_el_id) {
			unset($arResult["ITEMS"][$key]);
		}
	}
}
?>
<section class="block__padd block__overflow">
            <div class="container">
                <div class="actionarticle__procedures row">
			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
				<div class="actionarticle__procedures__item col-6" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                    <div class="actionarticle__procedures__card color-<?=$bg_colors[$arItem["PROPERTIES"]["BG_COLOR"]["VALUE"]]?>">
                        <div class="actionarticle__procedures__card__icon">
                          	<?=$arItem["~DETAIL_TEXT"]?>
						</div>
                        <div class="actionarticle__procedures__card__text">
                            <div class="actionarticle__procedures__card__text2"><?=$arItem["NAME"]?></div>
                        </div>
                    </div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>
