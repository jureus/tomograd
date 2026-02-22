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
<div class='header__nav__banner__img'>
    <img src='<?=$arResult['PREVIEW_PICTURE']["SAFE_SRC"]?>' alt=''/></div>
<div class='header__nav__banner__title'><?=$arResult["NAME"]?></div>
<div class='header__nav__banner__text'>
    <?= $arResult['DETAIL_TEXT']?>
</div>
<div class='header__nav__banner__btns'>
    <div><a class='mbtn mbtn__full mbtn__default mbtn__red' href='<?=$arResult['DETAIL_PAGE_URL']?>'>Подробнее</a></div>
    <div><a class='mbtn mbtn__bordered mbtn__default mbtn__blue' href='/prices/'>Смотреть все услуги и&nbsp;цены</a>
    </div>
</div>