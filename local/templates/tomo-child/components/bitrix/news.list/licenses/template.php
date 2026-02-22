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

<div class="pagelicenses">
	<?foreach($arResult["ITEMS"] as $arItem){?>
		<?
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		$file = CFile::GetByID($arItem["PROPERTIES"]["FILE"]["VALUE"])->Fetch();
		?>
		<div class="pagelicenses__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="pagelicenses__card">
				<div class="row">
					<div class="col-12 col-lg-7">
						<div class="pagelicenses__card__body">
							<div class="pagelicenses__card__img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SAFE_SRC"]?>" alt=""></div>
							<div class="pagelicenses__card__des">
								<div class="row">
									<div class="col-12 order-2 order-md-1">
										<div class="pagelicenses__card__title"><?=$arItem["NAME"]?></div>
									</div>
									<div class="col-12 order-3 order-md-2">
										<div class="pagelicenses__card__text">
											<?=$arItem["PREVIEW_TEXT"]?>
										</div>
									</div>
									<div class="col-12 order-1 order-md-3">
										<ul class="pagelicenses__card__list">
											<li>ИНН: <?=$arItem["PROPERTIES"]["INN"]["VALUE"]?></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 col-lg-5">
						<? if ($file) {?>
							<a class="pagelicenses__card__doc" href="<?=$file["SRC"]?>" data-fancybox="data-fancybox">
								<span><?=$file["ORIGINAL_NAME"]?></span>
								<i>
									<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.5 6C0.5 2.69063 3.21956 0 6.56452 0H21.7258V12C21.7258 13.6594 23.0808 15 24.7581 15H36.8871V28.5H17.1774C13.8325 28.5 11.1129 31.1906 11.1129 34.5V48H6.56452C3.21956 48 0.5 45.3094 0.5 42V6ZM36.8871 12H24.7581V0L36.8871 12ZM17.1774 33H20.2097C23.1377 33 25.5161 35.3531 25.5161 38.25C25.5161 41.1469 23.1377 43.5 20.2097 43.5H18.6935V46.5C18.6935 47.325 18.0113 48 17.1774 48C16.3435 48 15.6613 47.325 15.6613 46.5V34.5C15.6613 33.675 16.3435 33 17.1774 33ZM20.2097 40.5C21.47 40.5 22.4839 39.4969 22.4839 38.25C22.4839 37.0031 21.47 36 20.2097 36H18.6935V40.5H20.2097ZM29.3065 33H32.3387C34.8498 33 36.8871 35.0156 36.8871 37.5V43.5C36.8871 45.9844 34.8498 48 32.3387 48H29.3065C28.4726 48 27.7903 47.325 27.7903 46.5V34.5C27.7903 33.675 28.4726 33 29.3065 33ZM32.3387 45C33.1726 45 33.8548 44.325 33.8548 43.5V37.5C33.8548 36.675 33.1726 36 32.3387 36H30.8226V45H32.3387ZM39.9194 34.5C39.9194 33.675 40.6016 33 41.4355 33H45.9839C46.8177 33 47.5 33.675 47.5 34.5C47.5 35.325 46.8177 36 45.9839 36H42.9516V39H45.9839C46.8177 39 47.5 39.675 47.5 40.5C47.5 41.325 46.8177 42 45.9839 42H42.9516V46.5C42.9516 47.325 42.2694 48 41.4355 48C40.6016 48 39.9194 47.325 39.9194 46.5V34.5Z" fill="currentColor"></path>
									</svg>
								</i>
							</a>
						<? }?>
					</div>
				</div>
			</div>
		</div>
	<? }?>
</div>
