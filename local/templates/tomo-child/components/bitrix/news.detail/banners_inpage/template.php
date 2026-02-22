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
$button_text = "Записаться";
if (isset($arParams["BUTTON"])){
	$button_text = $arParams["BUTTON"];
}
?>
<div class="servicearticle-head">
    <div class="servicearticle-head__bg"></div>
    <div class="servicearticle-head__img"><img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
    <div class="servicearticle-head__body">
        <div class="servicearticle-head__head">
            <h1 class="servicearticle-head__title"><?=$arResult["NAME"]?></h1>
        </div>
        <div class="servicearticle-head__des"><?=$arResult["~DETAIL_TEXT"]?></div>
        <? if ($arResult["PROPERTIES"]["SVG"]["VALUE"]){?>
            <ul class="servicearticle-head__des__list">
            <?foreach ($arResult["PROPERTIES"]["SVG"]["VALUE"] as $svgID) {
                $svg = getElementWithProperties($svgID);?>
                <li>
                    <i><?=$svg["~DETAIL_TEXT"]?></i>
                    <span><?=$svg["NAME"]?></span>
                </li>  
            <?}?>
            </ul>
        <?}?>
    <div class="servicearticle-head__footer">
        <div class="row align-items-center">
            <div class="col-12 col-md-auto"><a class="mbtn mbtn__full mbtn__red mbtn__default" href="#js--modal-order" data-fancybox-html="data-fancybox-html"><?=$button_text?></a></div>
            <div class="col-12 col-md-auto">
                <div class="servicearticle-head__footer__info"><?=$arResult["~PREVIEW_TEXT"]?></div>
            </div>
        </div>
    </div>
</div>
</div>