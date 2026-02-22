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
<? if (!empty($arResult["ITEMS"])){ ?>
		<section class="block__padd">
			<div class="container">
				<div class="servprice">
					<div class="servprice__head">
						<div class="row flex-nowrap align-items-center">
							<div class="col">
								<h2 class="h2">Стоимость МРТ в&nbsp;ТомоГраде</h2>
							</div>
							<div class="col-auto"><a class="mbtn mbtn__bordered mbtn__blue mbtn__wicon" href="#"><span><i><svg>
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-pdf"></use>
							</svg></i><span>Полный прайс-лист</span></span></a></div>
							<div class="col-auto"><a class="mbtn mbtn__bordered mbtn__blue mbtn__wicon mbtn__wicon__right" href="#"><span><span>Все цены</span><i><svg>
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
							</svg></i></span></a></div>
						</div>
					</div>
					<div class="servprice__search">
						<div class="servprice__search__body">
							<form action="#">
								<div class="servprice__search__icon"><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
								</svg></div><input class="servprice__search__input" type="text" placeholder="Введите название услуги"><button class="servprice__search__clear" type="submit"><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-delete"></use>
								</svg></button>
							</form>
						</div>
					</div>
					<div class="servprice__content js--tabs js--tabs2">
						<div class="servprice__content__side">
							<div class="servprice__content__side__title">Выберите услугу</div>
							<div class="servprice__content__side__select">
								<div class="filter__select js--select checked">
									<div class="filter__select__label js--select-label">
										<span class="filter__select__label__text js--select-text">МРТ головы и отделов</span>
										<i class="filter__select__label__icon">
											<svg>
												<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down"></use>
											</svg>
										</i>
									</div>
									<div class="filter__select__popup">
										<div class="filter__select__popup__body js--styled-scroll" data-simplebar="init">
											<div class="simplebar-wrapper" style="margin: 0px;">
												<div class="simplebar-height-auto-observer-wrapper">
													<div class="simplebar-height-auto-observer"></div>
												</div>
												<div class="simplebar-mask">
													<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
														<div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;">
															<div class="simplebar-content" style="padding: 0px;">
																<ul class="filter__select__sub">
																	<? $i = 0;
																	foreach ($arResult["ITEMS"] as $full_service) {
																		if (empty($full_service["PROPERTIES"]["LINKED_SERVICES"]["VALUE"])) continue;
																		?>
																		<li class="filter__select__sub__option js--select-option js--tabs2-link 
																		<?if($i == 0) echo "active";?>" data-tab="stab-<?=$i?>">
																		<?=$full_service["NAME"]?>
																	</li>
																	<? $i++; 
																}?>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
										</div>
										<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
											<div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div>
										</div>
										<div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
											<div class="simplebar-scrollbar simplebar-visible" style="height: 0px; display: none;"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<ul class="servprice__content__side__list">
							<? $i = 0;
							foreach ($arResult["ITEMS"] as $full_service) {
								if (empty($full_service["PROPERTIES"]["LINKED_SERVICES"]["VALUE"])) continue;
								?>
								<li>
									<a class="js--tabs-link <?if($i == 0) echo "active";?>" href="#" data-tab="stab-<?=$i?>">
										<?=$full_service["NAME"]?>	
									</a>
								</li>
								<? $i++; 
							}?>
						</ul>
					</div>
					<div class="servprice__content__content">
						<? $i = 0;
						foreach ($arResult["ITEMS"] as $key => $full_service) {
							if (empty($full_service["PROPERTIES"]["LINKED_SERVICES"]["VALUE"])) continue; ?>
							<div class="servprice__content__content__item js--tabs-item js--tabs2-item 
							<?if ($i == 0) echo "active";?>" id="stab-<?=$i?>">
							<div class="pagprice">
								<div class="pagprice__head">
									<div class="pagprice__row1 row align-items-end">
										<div class="col-12 col-md">
											<div class="pagprice__title">
												<div class="pagprice__title__label"><?=$full_service["NAME"]?></div>
											</div>
										</div>
										<div class="col-auto d-none d-md-block">
											<div class="pagprice__price">
												<div class="pagprice__price__label">Цена</div>
											</div>
										</div>
										<div class="col-auto d-none d-md-block">
											<div class="pagprice__btn">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="pagprice__body js--styled-scroll simplebar-scrollable-y" data-simplebar="init">
									<div class="simplebar-wrapper" style="margin: 0px;">
										<div class="simplebar-height-auto-observer-wrapper">
											<div class="simplebar-height-auto-observer"></div>
										</div>
										<div class="simplebar-mask">
											<div class="simplebar-offset" style="right: 0px; bottom: 0px;">
												<div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
													<div class="simplebar-content" style="padding: 0px;">
														<? foreach ($full_service["PROPERTIES"]["LINKED_SERVICES"]["VALUE"] as $service_id) {
															$service = getElementWithProperties($service_id);?>
															<div class="pagprice__body__item">
																<div class="pagprice__row1 row align-items-center">
																	<div class="col">
																		<div class="row">
																			<div class="col-12 col-md">
																				<div class="pagprice__title">
																					<div class="pagprice__title__name"><?=$service["NAME"]?></div>
																				</div>
																			</div>
																			<div class="col-12 col-md-auto">
																				<div class="pagprice__price">
																					<div class="pagprice__price__number">
																						<?=$service["PROPERTIES"]["PRICE"]?> ₽
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-auto">
																		<div class="pagprice__btn"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" type="button" href="#js--modal-order" data-fancybox-html="data-fancybox-html">Записаться</a></div>
																	</div>
																</div>
															</div>
														<?	} ?>
													</div>
												</div>
											</div>
										</div>
										<div class="simplebar-placeholder" style="width: 798px; height: 920px;"></div>
									</div>
									<div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
										<div class="simplebar-scrollbar simplebar-visible" style="width: 0px; display: none;"></div>
									</div>
									<div class="simplebar-track simplebar-vertical" style="visibility: visible;">
										<div class="simplebar-scrollbar simplebar-visible" style="height: 195px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
									</div>
								</div>
							</div>
						</div>
						<? $i++; }?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?}?>
