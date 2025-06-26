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
    "Сиреневый" => 0, "Бежевый" => 1, "Салатовый" => 2
];
?>
<section class="block__padd block__overflow">
        <div class="container">
            <div class="block__padd__title">
                <div class="row flex-nowrap align-items-end">
                    <div class="col-12 col-md">
                        <h2 class="h2">Рейтинг независимых экспертов</h2>
                    </div>
                </div>
            </div>
            <div class="experts__offset js--sl-experts-offset"></div>
            <div class="experts">
                <div class="experts__body">
                    <div class="experts__slider swiper js--sl-experts">
                        <div class="swiper-wrapper">
                          <?foreach($arResult["ITEMS"] as $arItem){?>
                             <?
                             $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                             $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                             ?>
                             <div class="experts__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <div class="experts__card experts__card__bg-<?=$bg_colors[$arItem["PROPERTIES"]["BG_COLOR"]["VALUE"]]?>">
                                    <a class="experts__card__link" href="#"></a>
                                    <div class="experts__card__head">
                                        <div class="experts__card__head__number"><?=$arItem["PROPERTIES"]["RATE"]["VALUE"]?></div>
                                        <div class="experts__card__head__label"><?=$arItem["PROPERTIES"]["REVIEW_COUNT"]["VALUE"]?> отзывов</div>
                                    </div>
                                    <div class="experts__card__text">в рейтинге <?=$arItem["NAME"]?></div>
                                    <div class="experts__card__img">
                                        <img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""/>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                    </div>
                    </div>
                    <div class="experts__slider__more d-lg-none">
                        <div class="slider__pag js--sl-experts-pag"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>