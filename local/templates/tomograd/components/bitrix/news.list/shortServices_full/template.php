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
<section class="servicearticle-nav__wrap">
            <div class="container">
                <div class="servicearticle-nav__offset"></div>
                <div class="servicearticle-nav">
                    <div class="servicearticle-nav__body js--sl-articlethumbs swiper">
                        <div class="swiper-wrapper">
                        	<?foreach ($arResult["ITEMS"] as $arItem) {?>
                        		<div class="servicearticle-nav__item swiper-slide">
                                	<div class="servicearticle-nav__link"><?=$arItem["NAME"]?></div>
                            	</div>
                        	<?}?>
                        </div>
                    </div>
                </div>
                <div class="servicearticle-slabout__offset js-sl-article__offset"></div>
                <div class="servicearticle-slabout">
                    <div class="servicearticle-slabout__slider swiper js-sl-article swiper">
                        <div class="swiper-wrapper"><!-- el-->
                        	<?foreach ($arResult["ITEMS"] as $arItem) {?>
                            <div class="servicearticle-slabout__slider__item swiper-slide">
                                <div class="actionarticle__des">
                                    <div class="row">
                                        <div class="col-12 col-lg-7">
                                            <div class="actionarticle__des__content">
                                                <h2 class="h2"><?=$arItem["PREVIEW_TEXT"]?></h2>
                                                <div class="actionarticle__des__text">
                                                    <div class="block__text">
                                                        <?=$arItem["~DETAIL_TEXT"]?>
                                                    </div>
                                                </div>
                                                <ul class="actionarticle__des__list">
                                                	<? foreach ($arItem["PROPERTIES"]["SVG"]["VALUE"] as $svgID) {
                                                		$svg = getElementWithProperties($svgID);
                                                		?>
                                                		<li>
                                                        <div class="actionarticle__des__list__card">
                                                            <div class="actionarticle__des__list__card__icon">
                                                            	<?=$svg["~DETAIL_TEXT"]?>
                                                            </div>
                                                            <div class="actionarticle__des__list__card__body">
                                                                <div class="actionarticle__des__list__card__label"><?=$svg["NAME"]?>:</div>
                                                                <div class="actionarticle__des__list__card__text"><?=$svg["PREVIEW_TEXT"]?></div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                	<? }?>
                                                </ul>
                                                <div class="actionarticle__des__footer"><a class="mbtn mbtn__full mbtn__red mbtn__extralarge" href="#">Записаться на прием</a></div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-5 d-none d-md-block">
                                            <div class="actionarticle__des__img">
                                                <picture>
                                                    <source media="(min-width: 1200px)" srcset="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" />
                                                    <source media="(min-width: 768px) and (max-width: 1200px)" srcset="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" />
                                                    <source media="(max-width: 767px)" srcset="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" />
                                                    	<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
                                                </picture>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<? }?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
