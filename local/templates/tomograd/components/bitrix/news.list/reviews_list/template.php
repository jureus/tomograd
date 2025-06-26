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
<div class="container">
	<div class="pagereviews row">
		<? foreach ($arResult["ITEMS"] as $arItem) { 
			$raiting_width = $arItem["PROPERTIES"]["RATE"]["VALUE"] / 5 * 100;
			$reviewItem = getElementWithProperties($arItem["PROPERTIES"]["LINKED_ITEM"]["VALUE"]);
			?>
			<div class="pagereviews__item">
				<div class="pagereviews__card">
					<div class="pagereviews__card__side">
						<div class="pagereviews__card__side__head">
							<div class="pagereviews__card__side__head__label"><?=$arItem["PROPERTIES"]["ABOUT"]["VALUE"]?>:</div>
							<div class="pagereviews__card__side__head__title"><a href="<?=$reviewItem["DETAIL_PAGE_URL"]?>"><?=$reviewItem["NAME"]?></a></div>
						</div>
						<div class="pagereviews__card__side__footer">
							<a href="<?=$arItem["PROPERTIES"]["SOURCE_LINK"]["VALUE"]?>">
								<i><img src="<?=CFile::getPath($arItem["PROPERTIES"]["SOURCE_IMG"]["VALUE"])?>" alt="" /></i>
								<span><?=$arItem["PROPERTIES"]["SOURCE_NAME"]["VALUE"]?></span>
							</a>
						</div>
					</div>
					<div class="pagereviews__card__content">
						<div class="pagereviews__card__content__head">
							<div class="row">
								<div class="col-auto">
									<div class="pagereviews__card__content__head__rating">
										<div class="rating">
											<div class="rating__default"><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i></div>
											<div class="rating__hover" style="width: <?=$raiting_width?>%;"><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i><i><svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-star"></use>
											</svg></i></div>
										</div>
									</div>
								</div>
								<div class="col-auto ms-auto">
									<div class="pagereviews__card__content__head__date"><?=$arItem["DISPLAY_ACTIVE_FROM"]?></div>
								</div>
								<div class="col-12">
									<div class="pagereviews__card__content__head__name"><?=$arItem["NAME"]?></div>
								</div>
							</div>
						</div>
						<div class="pagereviews__card__content__body">
							<div class="block__text">
								<?=$arItem["~DETAIL_TEXT"]?>
							</div>
						</div>
					</div>
				</div>
			</div>
		<? } ?>
	</div>
	<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<div class="block__more2">
		<div class="d-none d-md-block">
			<div class="pagination">
				<div class="pagination__item"><a class="pagination__link pagination__link__more" href="#"><span>Первая</span></a></div>
				<div class="pagination__item"><button class="pagination__btn"><svg>
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-left"></use>
				</svg></button></div>
				<div class="pagination__item">
					<ul>
						<li><a class="pagination__link active" href="#">1</a></li>
						<li><a class="pagination__link" href="#"><span>2</span></a></li>
						<li><a class="pagination__link" href="#"><span>3</span></a></li>
						<li><a class="pagination__link" href="#"><span>4</span></a></li>
						<li><a class="pagination__link" href="#"><span>...</span></a></li>
						<li><a class="pagination__link" href="#"><span>5</span></a></li>
					</ul>
				</div>
				<div class="pagination__item"><button class="pagination__btn"><svg>
					<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
				</svg></button></div>
				<div class="pagination__item"><a class="pagination__link pagination__link__more" href="#"><span>Последняя</span></a></div>
			</div>
		</div>
		<div class="d-md-none"><a class="mbtn mbtn__bordered mbtn__greyline mbtn__default d-block w-100" href="#"><span>Показать еще</span></a></div>
	</div>
	<?endif;?>
</div>