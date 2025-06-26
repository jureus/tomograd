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
		<div class="block__padd__title d-none d-lg-block">
			<div class="row flex-nowrap align-items-end">
				<div class="col-12 col-md">
					<h2 class="h2">Почему выбирают наш медицинский центр в&nbsp;Подольске?</h2>
				</div>
			</div>
		</div>
		<div class="servicearticle-why__slider__offset js--sl-servwhy-offset"></div>
		<div class="servicearticle-why">
			<div class="servicearticle-why__slider swiper js--sl-servwhy">
				<div class="swiper-wrapper">
					<?foreach($arResult["ITEMS"] as $arItem):?>
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="servicearticle-why__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="servicearticle-why__card">
							<div class="servicearticle-why__card__img">
								<img src="<?=$arItem["PREVIEW_PICTURE"]["SAFE_SRC"]?>" alt="" />
							</div>
							<div class="servicearticle-why__card__body">
								<div class="servicearticle-why__card__title"><?=$arItem["NAME"]?></div>
								<div class="servicearticle-why__card__text"><?=$arItem["PREVIEW_TEXT"]?></div>
							</div>
						</div>
					</div>
					<?endforeach;?>
				</div>
			</div>
			<div class="servicearticle-why__slider__more d-lg-none">
				<div class="slider__pag js--sl-servwhy-pag"></div>
			</div>
		</div>
	</div>
</section>
