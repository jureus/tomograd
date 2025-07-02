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
<div class="acrticle__content__side">
	<div class="acrticle__content__side__block">
		<div class="acrticle__content__side__block__title">Популярные материалы по&nbsp;этой&nbsp;теме:</div>
		<div class="acrticle__slist">
			<? foreach ($arResult["ITEMS"] as $article) {?>
				<div class="acrticle__slist__item">
					<div class="acrticle__slist__card">
						<div class="acrticle__slist__card__date"><?=$article["DISPLAY_ACTIVE_FROM"]?></div>
						<a class="acrticle__slist__card__title" href="<?=$article["DETAIL_PAGE_URL"]?>">
							<?=$article["NAME"]?>
						</a>
					</div>
				</div>
			<? }?>
		</div>
		<div class="acrticle__content__side__block__more">
			<a class="link__more link__more__grey" href="/news">
				<span>Смотреть все материалы</span>
				<i><svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use></svg></i>
			</a>
		</div>
	</div>
</div>