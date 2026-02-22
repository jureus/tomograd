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
<div class="pageabout__eslepages row">
	<?foreach($arResult["ITEMS"] as $arItem){?>
    <?
    $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
    $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
    $size = 'col-lg-6';
    if ($arItem["PROPERTIES"]["SIZE"]["VALUE"] == 1){
        $size = "col-md-6 col-lg-3";
    }
    ?>
    <div class="pageabout__eslepages__item col-12 <?=$size?>"  id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <div class="pageabout__eslepages__card" style="background-image: url('<?=$arItem["PREVIEW_PICTURE"]["SAFE_SRC"]?>');">
            <div class="pageabout__eslepages__card__body">
                <div class="pageabout__eslepages__card__title"><?=$arItem["NAME"]?></div>
                <div class="pageabout__eslepages__card__text"><?=$arItem["DETAIL_TEXT"]?></div>
            </div>
            <div class="pageabout__eslepages__card__btns"><a class="mbtn mbtn__full mbtn__red mbtn__default" href="<?=$arItem["PROPERTIES"]["LINK"]["VALUE"]?>">Перейти в раздел</a></div>
            <div class="pageabout__eslepages__card__img"><img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
        </div>
    </div>
	<?}?>
</div>