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
//echo "<pre>";	
//var_dump($arResult["PROPERTIES"]);
$slider = [];

// Получаем элементы слайдера со всеми свойствами
if (!empty($arResult["PROPERTIES"]["SLIDER_ITEMS"]["VALUE"])) {
    foreach ($arResult["PROPERTIES"]["SLIDER_ITEMS"]["VALUE"] as $itemId) {
        $slider[] = getElementWithProperties($itemId);
    }
}

// Получаем остальные элементы со всеми свойствами
$right_1 = getElementWithProperties($arResult["PROPERTIES"]["RIGHT_ITEM_1"]["VALUE"]);
$right_2 = getElementWithProperties($arResult["PROPERTIES"]["RIGHT_ITEM_2"]["VALUE"]);
$bottom_1 = getElementWithProperties($arResult["PROPERTIES"]["BOTTOM_ITEM_1"]["VALUE"]);
$bottom_2 = getElementWithProperties($arResult["PROPERTIES"]["BOTTOM_ITEM_2"]["VALUE"]);

?>
<section class="block__padd block__overflow">
        <div class="container">
            <div class="block__padd__title">
                <div class="row flex-nowrap align-items-end">
                    <div class="col-12 col-md">
                        <h2 class="h2">Акции и специальные предложения</h2>
                    </div>
                    <div class="col-12 col-md-auto d-none d-md-block"><a class="link__more" href="#"><span>Смотреть все предложения</span><i>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                </svg>
                            </i></a></div>
                </div>
            </div>
            <div class="mainactions__slider__offset js--sl-mainactions-offset"></div>
            <div class="mainactions">
                <div class="mainactions__center">
                    <div class="mainactions__slider swiper js--sl-mainactions">
                        <div class="swiper-wrapper"><!-- el-->
                        	<? foreach ($slider as $action) { 
                        		$linked_item = getElementWithProperties($action["PROPERTIES"]["LINKED_ITEM"]);
                        		$img = CFile::GetPath($action["DETAIL_PICTURE"]);
                        		$salePrice = $action["PROPERTIES"]["PRICE"] / 100 * $action["PROPERTIES"]["SALE_SIZE"]
                        		?>
                        		<div class="mainactions__slider__item swiper-slide">
                                <div class="mainactions__card">
                                    <div class="mainactions__card__bg"></div>
                                    <div class="mainactions__card__img">
                                        <picture>
                                            <source media="(min-width: 768px)"
                                                    srcset="<?= $img ?>"/>
                                            <source media="(max-width: 767px)"
                                                    srcset="<?= $img ?>"/>
                                            <img src="<?= $img ?>"
                                                 alt=""/>
                                        </picture>
                                    </div>
                                    <div class="mainactions__card__content">
                                        <div class="mainactions__card__head">
                                            <div class="mainactions__card__head__title"><?=$action["NAME"]?></div>
                                            <div class="mainactions__card__head__text"><?=$action["DETAIL_TEXT"]?></div>
                                        </div>
                                        <div class="mainactions__card__center">
                                            <div class="mainactions__card__label"><span>-<?=$action["PROPERTIES"]["SALE_SIZE"]?>% скидка</span></div>
                                            <div class="mainactions__card__price">
                                            	<span><?=$salePrice?> ₽</span>
                                            	<i><s>/</s> <?=$action["PROPERTIES"]["PRICE"]?> ₽</i>
                                            </div>
                                        </div>
                                        <div class="mainactions__card__footer">
                                            <div class="row align-items-center">
                                                <div class="col-12 col-md-auto"><a
                                                            class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100"
                                                            href="#">Записаться на обследование</a></div>
                                                <div class="col-12 col-md-auto"><a class="link-wicon link-wicon__mini"
                                                                                   href="#"><span>Узнать подробнее</span><i>
                                                            <svg>
                                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                                            </svg>
                                                        </i></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        	<? } ?>
                        </div>
                    </div>
                    <div class="mainactions__slider__more d-lg-none">
                        <div class="slider__pag js--sl-mainactions-pag"></div>
                    </div>
                    <div class="mainactions__slider__btns d-none d-lg-block">
                        <div class="slider__nav">
                            <div class="slider__nav__btn left js--sl-mainactions-prev">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                                </svg>
                            </div>
                            <div class="slider__nav__btn right js--sl-mainactions-next">
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>


                <? if ($right_1) {
                	$linked_item = getElementWithProperties($right_1["PROPERTIES"]["LINKED_ITEM"]);
                    $img = CFile::GetPath($right_1["DETAIL_PICTURE"]);
                    $salePrice = $right_1["PROPERTIES"]["PRICE"] / 100 * $right_1["PROPERTIES"]["SALE_SIZE"];
                	?>
                	<div class="mainactions__item mainactions__item__1">
	                    <div class="headactions__card headactions__card__style-0 headactions__card__sizenormal"><a
	                                class="headactions__card__link" href="#"></a>
	                        <div class="headactions__card__bg"><img
	                                    src="<?=$img?>" alt=""/></div>
	                        <div class="headactions__card__body">
	                            <div class="headactions__card__title"><span><?=$right_1["NAME"]?></span></div>
	                            <div class="headactions__card__label"><span>-<?=$right_1["PROPERTIES"]["SALE_SIZE"]?>% скидка</span></div>
	                            <div class="headactions__card__price"><span><?=$salePrice?> ₽</span><i>/ <s><?=$right_1["PROPERTIES"]["PRICE"]?> ₽ </s></i></div>
	                        </div>
	                    </div>
	                </div>
                <? }?>

                <? if ($right_2) {
                	$linked_item = getElementWithProperties($right_2["PROPERTIES"]["LINKED_ITEM"]);
                    $img = CFile::GetPath($right_2["DETAIL_PICTURE"]);
                    $salePrice = $right_2["PROPERTIES"]["PRICE"] / 100 * $right_2["PROPERTIES"]["SALE_SIZE"];
                    ?>
                	<div class="mainactions__item mainactions__item__2">
	                    <div class="headactions__card headactions__card__style-0 headactions__card__sizenormal"><a
	                                class="headactions__card__link" href="#"></a>
	                        <div class="headactions__card__bg"><img
	                                    src="<?=$img?>" alt=""/></div>
	                        <div class="headactions__card__body">
	                            <div class="headactions__card__title"><span><?=$right_2["NAME"]?></span></div>
	                            <div class="headactions__card__label"><span>-<?=$right_2["PROPERTIES"]["SALE_SIZE"]?>% скидка</span></div>
	                            <div class="headactions__card__price"><span><?=$salePrice?> ₽</span><i>/ <s><?=$right_2["PROPERTIES"]["PRICE"]?> ₽ </s></i></div>
	                        </div>
	                    </div>
	                </div>
                <? }?>
                

                <? if ($bottom_1) {
                	$linked_item = getElementWithProperties($bottom_1["PROPERTIES"]["LINKED_ITEM"]);
                    $img = CFile::GetPath($bottom_1["DETAIL_PICTURE"]);
                    $salePrice = $bottom_1["PROPERTIES"]["PRICE"] / 100 * $bottom_1["PROPERTIES"]["SALE_SIZE"];
                    ?>
                	<div class="mainactions__item mainactions__item__3">
	                    <div class="headactions__card headactions__card__style-0 headactions__card__sizeinline"><a
	                                class="headactions__card__link" href="#"></a>
	                        <div class="headactions__card__bg"><img
	                                    src="<?=$img?>" alt=""/></div>
	                        <div class="headactions__card__body">
	                            <div class="headactions__card__title"><span><?=$bottom_1["NAME"]?></span></div>
	                            <div class="headactions__card__label"><span>-<?=$bottom_1["PROPERTIES"]["SALE_SIZE"]?>% скидка</span></div>
	                            <div class="headactions__card__price"><span><?=$salePrice?> ₽</span><i>/ <s><?=$bottom_1["PROPERTIES"]["PRICE"]?> ₽ </s></i></div>
	                        </div>
	                    </div>
	                </div>
                <? }?>
                <? if ($bottom_2) {
					$linked_item = getElementWithProperties($bottom_2["PROPERTIES"]["LINKED_ITEM"]);
                    $img = CFile::GetPath($bottom_2["DETAIL_PICTURE"]);
                    $salePrice = $bottom_2["PROPERTIES"]["PRICE"] / 100 * $bottom_2["PROPERTIES"]["SALE_SIZE"];
					?>
	                <div class="mainactions__item mainactions__item__4">
	                    <div class="headactions__card headactions__card__style-0 headactions__card__sizeinline"><a
	                                class="headactions__card__link" href="#"></a>
	                        <div class="headactions__card__bg"><img
	                                    src="<?=$img?>" alt=""/></div>
	                        <div class="headactions__card__body">
	                            <div class="headactions__card__title"><span><?=$bottom_2["NAME"]?></span></div>
	                            <div class="headactions__card__label"><span>-<?=$bottom_2["PROPERTIES"]["SALE_SIZE"]?>% скидка</span></div>
	                            <div class="headactions__card__price"><span><?=$salePrice?> ₽</span><i>/ <s><?=$bottom_2["PROPERTIES"]["PRICE"]?> ₽ </s></i></div>
	                        </div>
	                    </div>
	                </div>
                <? }?>
            </div>
            <div class="block__padd__more d-md-none"><a class="link__more"
                                                        href="#"><span>Смотреть все предложения</span><i>
                        <svg>
                            <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                        </svg>
                    </i></a></div>
        </div>
    </section>