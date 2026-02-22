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
<!-- лицензии-->
<section class="block__padd block__padd__first block__padd__last block__overflow ch-bglignt2">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2">Лицензии</h2>
                </div>
                <div class="col-12 col-md-auto d-none d-md-block">
                    <a class="link__more" href="#">
                        <span>Смотреть все документы</span>
                        <i>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="licenses__offset js--sl-licenses-offset"></div>
        <div class="licenses">
            <div class="licenses__body">
                <div class="licenses__slider swiper js--sl-licenses">
                    <div class="swiper-wrapper">
                        <?foreach($arResult["ITEMS"] as $arItem):?>
                            <?
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                            ?>
                            <div class="licenses__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                                <a class="licenses__card"
                                   href="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>"
                                   data-fancybox="licenses">
                                    <img src="<?=$arItem["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arItem["NAME"]?>"/>
                                    <i class="licenses__card__icon">
                                        <svg>
                                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-loop"></use>
                                        </svg>
                                    </i>
                                </a>
                            </div>
                        <?endforeach;?>
                    </div>
                </div>
                <div class="licenses__slider__more d-lg-none">
                    <div class="slider__pag js--sl-licenses-pag"></div>
                </div>
                <div class="licenses__slider__btns d-none d-lg-block">
                    <div class="slider__nav">
                        <div class="slider__nav__btn left js--sl-licenses-prev">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </div>
                        <div class="slider__nav__btn right js--sl-licenses-next">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block__padd__more d-md-none">
            <a class="link__more" href="#">
                <span>Смотреть все документы</span>
                <i>
                    <svg>
                        <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                    </svg>
                </i>
            </a>
        </div>
    </div>
</section>
<!-- /лицензии-->