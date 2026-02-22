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
<section class="block__padd block__padd__last block__overflow pageabout__about__wrap">
	<div class="container-full">
		<div class="pageabout__about">
			<div class="row">
				<div class="col-12 col-lg-6 order-2 order-lg-1">
					<div class="pageabout__about__image"><img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
					<div class="pageabout__about__list"><!-- el-->
						<div class="pageabout__about__list__item">
							<div class="pageabout__about__list__card">
								<span><?=$arResult["PROPERTIES"]["PROMO_1"]["VALUE"]?></span>
								<p><?=$arResult["PROPERTIES"]["PROMO_1"]["~DESCRIPTION"]?></p>
							</div>
						</div>
						<div class="pageabout__about__list__item">
							<div class="pageabout__about__list__card">
								<span><?=$arResult["PROPERTIES"]["PROMO_2"]["VALUE"]?></span>
								<p><?=$arResult["PROPERTIES"]["PROMO_2"]["~DESCRIPTION"]?></p>
							</div>
						</div>
						<div class="pageabout__about__list__item">
							<div class="pageabout__about__list__card">
								<span><?=$arResult["PROPERTIES"]["PROMO_3"]["VALUE"]?></span>
								<p><?=$arResult["PROPERTIES"]["PROMO_3"]["~DESCRIPTION"]?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-6 order-1 order-lg-2">
					<div class="pageabout__about__body">
						<div class="pageabout__about__body__title"><?=$arResult["PROPERTIES"]["TITLE"]["~VALUE"]["TEXT"]?></div>
						<div class="pageabout__about__body__text">
							<?=$arResult["~DETAIL_TEXT"]?>
						</div>
						<div class="pageabout__about__body__btn"><a class="mbtn mbtn__full mbtn__red mbtn__default" href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться на прием</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
