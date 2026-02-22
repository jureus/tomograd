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
<section class="block__padd block__padd__last block__overflow">
    <div class="container">
        <div class="ch-banner2">
            <div class="ch-banner2__slider swiper js--sl-chbanner2">
                <div class="swiper-wrapper">
                    <?foreach($arResult["ITEMS"] as $arItem):?>
                        <?
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        ?>
                        <div class="ch-banner2__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="ch-banner2__card">
                                <div class="ch-banner2__card__img">
                                    <picture class="ch-banner2__card__img__pic">
                                        <source media="(min-width: 992px)" srcset="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" />
                                        <source media="(min-width: 768px) and (max-width: 992px)" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                                        <source media="(max-width: 767px)" srcset="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" />
                                        <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["DETAIL_PICTURE"]["ALT"]?>" />
                                    </picture>
                                </div>
                                <div class="ch-banner2__card__body">
                                    <div class="ch-banner2__card__content">
                                        <div class="ch-banner2__card__title"><?=$arItem["~NAME"]?></div>
                                        <div class="ch-banner2__card__text">
                                            <span><?=$arItem["~DETAIL_TEXT"]?></span>
                                        </div>
                                        <?if($arItem["DETAIL_TEXT"] || $arItem["DETAIL_PAGE_URL"]):?>
                                        <div class="ch-banner2__card__more">
                                            <a class="ch-banner__more__link" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                                <i>
                                                    <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.2929L15.3431 0.928934C14.9526 0.538409 14.3195 0.538409 13.9289 0.928933C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 8L-8.74227e-08 9L21 9L21 8L21 7L8.74227e-08 7L0 8Z" fill="currentColor" />
                                                    </svg>
                                                </i>
                                                <span>Смотреть подробнее</span>
                                            </a>
                                        </div>
                                        <?endif;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?endforeach;?>
                </div>
            </div>
            <div class="ch-banner2__shadow level1"></div>
            <div class="ch-banner2__shadow level2"></div>
            <div class="ch-banner2__shadow level3"></div>
        </div>
        <div class="ch-banner2__slider__more">
            <div class="slider__pag js--sl-chbanner2-pag"></div>
        </div>
    </div>
</section>