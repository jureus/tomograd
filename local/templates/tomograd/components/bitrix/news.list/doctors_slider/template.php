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
<section class="block__padd block__overflow">
	<div class="container">
		<div class="block__padd__title">
			<div class="row flex-nowrap align-items-end">
				<div class="col-12 col-md">
					<h2 class="h2">Наши специалисты</h2>
				</div>
				<div class="col-12 col-md-auto d-none d-md-block"><a class="link__more" href="#"><span>Смотреть всех специалистов</span><i>
					<svg>
						<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
					</svg>
				</i></a></div>
			</div>
		</div>
		<div class="specialists__slider__offset js--sl-specialists-offset"></div>
		<div class="specialists">
			<div class="specialists__slider swiper js--sl-specialists">
				<div class="swiper-wrapper"><!-- el-->
					<?foreach($arResult["ITEMS"] as $arItem){
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>

						<div class="specialists__slider__item swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="specialists__card">
								<a class="specialists__card__img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
									<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt=""/>
								</a>
								<div class="specialists__card__content">
									<div class="specialists__card__content__body">
										<div class="specialists__card__markers">
											<div class="row">
												<div class="col-auto"><span>Стаж: <?=$arItem["PROPERTIES"]["WORK_OLD"]["VALUE"]?></span></div>
												<div class="col-auto"><span><?=$arItem["PROPERTIES"]["RECIPIENTS"]["VALUE"]?></span></div>
											</div>
										</div>
										<a class="specialists__card__name" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
										<div class="specialists__card__post"><?=$arItem["PROPERTIES"]["SHORT_DESCRIPTION"]["~VALUE"]?>
										</div>
										<div class="specialists__card__address">
											<div class="row">
												<div class="col-auto">
													<div class="specialists__card__address__label">Место приема:</div>
												</div>
												<div class="col">
													<ul class="specialists__card__address__list">
														<? foreach ($arItem["PROPERTIES"]["WORK_PLACE"]["VALUE"] as $place) {?>
															<li><?=$place?></li>
														<? }?>
													</ul>
												</div>
											</div>
										</div>
									</div>
									<div class="specialists__card__content__footer">
										<div class="row">
											<div class="col-12">
												<a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться онлайн</a>
											</div>
											<div class="col-12">
												<a class="link-wicon link-wicon__mini" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
													<span>Подробнее о враче</span>
													<i>
														<svg>
															<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
														</svg>
													</i>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					<? }?>
				</div>
			</div>
			<div class="specialists__slider__more d-lg-none">
				<div class="slider__pag js--sl-specialists-pag"></div>
			</div>
			<div class="specialists__slider__btns d-none d-lg-block">
				<div class="slider__nav">
					<div class="slider__nav__btn left js--sl-specialists-prev">
						<svg>
							<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
						</svg>
					</div>
					<div class="slider__nav__btn right js--sl-specialists-next">
						<svg>
							<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div class="block__padd__more d-md-none"><a class="link__more"
			href="#"><span>Смотреть всех специалистов</span><i>
				<svg>
					<use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
				</svg>
			</i></a></div>
		</div>
    </section><!-- /специалисты-->