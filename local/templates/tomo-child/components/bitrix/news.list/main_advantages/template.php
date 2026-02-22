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
$i = 1;
?>
<section class="block__padd block__overflow d-none d-lg-block">
        <div class="container">
            <div class="block__padd__title">
                <div class="row flex-nowrap align-items-end">
                    <div class="col-12 col-md">
                        <h2 class="h2">Наши преимущества</h2>
                    </div>
                </div>
            </div>
            <div class="mainadvantages">
			<?foreach($arResult["ITEMS"] as $arItem){?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="mainadvantages__item mainadvantages__item__pos<?=$i++;?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<? if ($arItem["PROPERTIES"]["PLACE"]["VALUE"] == "Центральный"){?>
						<div class="mainadvantages__center">
	                        <div class="mainadvantages__center__head">
	                            <div class="mainadvantages__center__title"><?=$arItem["NAME"]?></div>
	                            <div class="mainadvantages__center__text">
	                            	<?=$arItem["~DETAIL_TEXT"]?>
	                            </div>
	                        </div>
	                        <div class="mainadvantages__center__img">
	                        	<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""/>
	                        </div>
	                    </div>
					<? } else {?>
						<div class="mainadvantages__card">
	                        <div class="mainadvantages__card__icon">
	                            <?=$arItem["PROPERTIES"]["SVG"]["~VALUE"]["TEXT"];?>
	                        </div>
	                        <div class="mainadvantages__card__title"><?=$arItem["NAME"]?></div>
	                        <div class="mainadvantages__card__text">
	                        	<?=$arItem["~DETAIL_TEXT"]?>
	                        </div>
	                    </div>
					<? }?>
				</div>
			<?}?>
            </div>
        </div>
</section>