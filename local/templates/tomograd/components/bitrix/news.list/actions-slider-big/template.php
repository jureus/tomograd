<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
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
$count = count($arResult['ITEMS']);
?>
<section class="block__padd">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2">Акции и специальные предложения</h2>
                </div>
				<div class="col-12 col-md-auto d-none d-md-block"><a class="link__more" href="/actions/"><span>Смотреть все предложения</span><i>
                            <svg>
                                <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </i></a></div>
            </div>
        </div>
        <div class="pageactions2__slider__offset js--sl-pageactions-offset"></div>
        <div class="pageactions2">
            <div class="pageactions2__slider swiper js--sl-pageactions swiper-initialized swiper-horizontal swiper-pointer-events swiper-autoheight swiper-backface-hidden">
                <div class="swiper-wrapper" id="swiper-wrapper-252b265e6ff22c101" aria-live="polite"
                     style="height: 374px; transform: translate3d(-1124px, 0px, 0px); transition-duration: 0ms;">
                    <?
                    foreach ($arResult['ITEMS'] as $key => $arItem) {
                        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'), array ('CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
                        $current_price = $arItem['PROPERTIES']['PRICE']['VALUE'] / 100 * $arItem['PROPERTIES']['SALE_SIZE']['VALUE'];
                        ?>
                        <div class="mainactions__slider__item swiper-slide swiper-slide-prev" role="group"
                             aria-label="<?= $key + 1 ?> / <?= $count ?>" style="width: 1116px; margin-right: 8px;"
                             id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                            <div class="mainactions__card">
                                <div class="mainactions__card__bg"></div>
                                <div class="mainactions__card__img">
                                    <picture>
                                        <source media="(min-width: 768px)"
                                                srcset="<?= $arItem['DETAIL_PICTURE']['SAFE_SRC'] ?>">
                                        <source media="(max-width: 767px)"
                                                srcset="<?= $arItem['DETAIL_PICTURE']['SAFE_SRC'] ?>">
                                        <img src="<?= $arItem['DETAIL_PICTURE']['SAFE_SRC'] ?>" alt="">
                                    </picture>
                                </div>
                                <div class="mainactions__card__content">
                                    <div class="mainactions__card__head">
                                        <div class="mainactions__card__head__title"><?= $arItem['NAME'] ?></div>
                                        <div class="mainactions__card__head__text">
                                            <?= $arItem['~DETAIL_TEXT'] ?>
                                        </div>
                                    </div>
                                    <div class="mainactions__card__center">
                                        <div class="mainactions__card__label">
                                            <span>-<?= $arItem['PROPERTIES']['SALE_SIZE']['VALUE'] ?>% скидка</span>
                                        </div>
                                        <div class="mainactions__card__price">
                                            <span><?= $current_price ?> ₽</span>
                                            <i><s>/</s><?= $arItem['PROPERTIES']['PRICE']['VALUE'] ?> ₽ </i>
                                        </div>
                                    </div>
                                    <div class="mainactions__card__footer">
                                        <div class="row align-items-center">
                                            <div class="col-12 col-md-auto">
                                                <a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#">
                                                    Записаться на обследование
                                                </a>
                                            </div>
                                            <div class="col-12 col-md-auto">
                                                <a class="link-wicon link-wicon__mini" href="<?= $arItem['DETAIL_PAGE_URL'] ?>">
                                                    <span>Узнать подробнее</span>
                                                    <i>
                                                        <svg>
                                                            <use xlink:href="img/icons.svg#ic-right"></use>
                                                        </svg>
                                                    </i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <? } ?>
                </div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
            <div class="pageactions2__slider__more">
                <div class="slider__pag js--sl-pageactions-pag swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
                    <span class="slider__pag__bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span>
                    <span  class="slider__pag__bullet active" tabindex="0" role="button" aria-label="Go to slide 2"
                            aria-current="true"></span>
                    <span class="slider__pag__bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span>
                </div>
            </div>
            <div class="pageactions2__slider__btns d-none d-lg-block">
                <div class="slider__nav">
                    <div class="slider__nav__btn left js--sl-pageactions-prev" tabindex="0" role="button"
                         aria-label="Previous slide" aria-controls="swiper-wrapper-252b265e6ff22c101"
                         aria-disabled="false">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-left"></use>
                        </svg>
                    </div>
                    <div class="slider__nav__btn right js--sl-pageactions-next" tabindex="0" role="button"
                         aria-label="Next slide" aria-controls="swiper-wrapper-252b265e6ff22c101" aria-disabled="false">
                        <svg>
                            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class="block__padd__more d-md-none">
            <a class="link__more" href="#"><span>Смотреть все предложения</span>
                <i>
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
                    </svg>
                </i>
            </a>
        </div>
    </div>
</section>

