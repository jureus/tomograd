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
<div class="ch-welcome">
    <div class="ch-welcome__slider swiper js--sl-chwelcome">
        <div class="swiper-wrapper">
			<?foreach($arResult["ITEMS"] as $arItem):?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				slimDump($arItem);
				?>
				<div class="ch-welcome__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="ch-welcome__card">
                    <div class="container">
                        <div class="ch-welcome__card__content">
                            <div class="ch-welcome__card__body">
                                <div class="ch-welcome__card__title ch-welcome__card__title-exclamationmark"><?=$arItem["~PREVIEW_TEXT"]?></div>
                                <div class="ch-welcome__card__text"><?=$arItem["~DETAIL_TEXT"]?></div>
                            </div>
                            <div class="ch-welcome__card__img"><img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
                            <div class="ch-welcome__card__btns"><a class="ch-welcome__btn" href="#js--modal-order" data-fancybox-html="data-fancybox-html"><span>Записаться на прием</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
			<?endforeach;?>
		</div>
        <div class="ch-welcome__pag js--sl-chwelcome-pag"><span class="ch-welcome__pag__bullet active"></span><span class="ch-welcome__pag__bullet"></span><span class="ch-welcome__pag__bullet"></span></div>
        <div class="ch-welcome__nav"><button class="ch-welcome__nav__btn prev js--sl-chwelcome-prev"><svg>
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-left"></use>
        </svg></button><button class="ch-welcome__nav__btn next js--sl-chwelcome-next"><svg>
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
        </svg></button></div>
    </div>
</div>