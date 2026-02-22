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

global $USER_FIELD_MANAGER;

// Получаем кастомные поля
$iblockId = $arParams["IBLOCK_ID"];
$sectionCode = $_REQUEST["SECTION_CODE"];

$sectionId = CIBlockSection::GetList(
	array(),
	array(
		'IBLOCK_ID' => $iblockId,
		'CODE' => $sectionCode
	),
	false,
	array('ID')
)->Fetch()['ID'];

$sectionUF = $USER_FIELD_MANAGER->GetUserFields("IBLOCK_".$iblockId."_SECTION", $sectionId);

$top_banner_id = $sectionUF["UF_TOP_BANNER"]["VALUE"];
$bottom_banner_id = $sectionUF["UF_BANNER"]["VALUE"];

$main = [
	"title" => $sectionUF["UF_SECTION_TITLE"]["VALUE"],
	"description" => $sectionUF["UF_SECTION_DESCRIPTION"]["VALUE"],
	"svg" => $sectionUF["UF_SECTION_SVG"]["VALUE"]
];

$symptoms = [
	"title" =>  $sectionUF["UF_SYMPT_TITLE"]['VALUE'],
	"description" => $sectionUF["UF_SYMPTOMS_DESCRIPTION"]['VALUE'],
	"list" => $sectionUF["UF_SYMPTOMS_LIST"]['VALUE']
];

$contra = [
	"title" =>  $sectionUF["UF_CONTRA"]['VALUE'],
	"list" => $sectionUF["UF_CONTRA_LIST"]['VALUE'],
	"description" => $sectionUF['UF_ACCENT']["VALUE"]
];

$description = [
	"title" =>  $sectionUF["UF_DESCRIPTION_TITLE"]["VALUE"],
	"description" =>   $sectionUF["UF_DESCRIPTION"]["VALUE"]
];

$prepare = [
	"title" => $sectionUF["UF_PREPARE_TITLE"]["VALUE"],
	"description" => $sectionUF["UF_PREPARE_TEXT"]["VALUE"]
];
?>
<section class="block__padd block__padd__pageinfidefirst">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
			"PATH" => "/",
			"SITE_ID" => "s1",
			"START_FROM" => "0",
		),
		false
	);?>
	<?if($top_banner_id):?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:news.detail", 
		"banners_inpage", 
		array(
			"ACTIVE_DATE_FORMAT" => "d.m.Y",
			"ADD_ELEMENT_CHAIN" => "N",
			"ADD_SECTIONS_CHAIN" => "N",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_ADDITIONAL" => "",
			"AJAX_OPTION_HISTORY" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"BROWSER_TITLE" => "-",
			"CACHE_GROUPS" => "Y",
			"CACHE_TIME" => "36000000",
			"CACHE_TYPE" => "A",
			"CHECK_DATES" => "Y",
			"DETAIL_URL" => "",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"DISPLAY_DATE" => "Y",
			"DISPLAY_NAME" => "Y",
			"DISPLAY_PICTURE" => "Y",
			"DISPLAY_PREVIEW_TEXT" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"ELEMENT_CODE" => "",
			"ELEMENT_ID" => $top_banner_id,
			"FIELD_CODE" => array(
				0 => "NAME",
				1 => "PREVIEW_TEXT",
				2 => "DETAIL_TEXT",
				3 => "DETAIL_PICTURE",
				4 => "",
			),
			"IBLOCK_ID" => "25",
			"IBLOCK_TYPE" => "content",
			"IBLOCK_URL" => "",
			"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
			"MESSAGE_404" => "",
			"META_DESCRIPTION" => "-",
			"META_KEYWORDS" => "-",
			"PAGER_BASE_LINK_ENABLE" => "N",
			"PAGER_SHOW_ALL" => "N",
			"PAGER_TEMPLATE" => ".default",
			"PAGER_TITLE" => "Страница",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"SET_BROWSER_TITLE" => "N",
			"SET_CANONICAL_URL" => "N",
			"SET_LAST_MODIFIED" => "N",
			"SET_META_DESCRIPTION" => "N",
			"SET_META_KEYWORDS" => "N",
			"SET_STATUS_404" => "N",
			"SET_TITLE" => "N",
			"SHOW_404" => "N",
			"STRICT_SECTION_CHECK" => "N",
			"USE_PERMISSIONS" => "N",
			"USE_SHARE" => "N",
			"COMPONENT_TEMPLATE" => "banners_inpage"
		),
		false
	);?>
	<?endif;?>
</div>
</section>

<section class="block__padd block__overflow">
	<div class="container">
		<div class="servicearticle-about">
			<div class="row servicearticle-about__row">
				<div class="col-12 col-lg-5">
					<div class="servicearticle-about__text">
						<div class="block__text">
							<h2><?=$main["title"]?></h2>
							<?=$main["description"]?>
						</div>
					</div>
				</div>
				<div class="col-12 col-lg-7">
					<div class="advantageslist row">
						<? foreach ($main["svg"] as $svg_id) {
							$svg = getElementWithProperties($svg_id);?>
							<div class="advantageslist__item col-6">
								<div class="advantageslist__card">
									<div class="advantageslist__card__head">
										<i><?=$svg["~DETAIL_TEXT"]?></i>
										<span><?=$svg["NAME"]?></span>
									</div>
								</div>
							</div>
						<? } ?>


					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<? if(!empty($arResult["ITEMS"])){?>
	<section class="block__padd block__overflow">
		<div class="container">
			<div class="block__padd__title">
				<div class="row flex-nowrap align-items-end">
					<div class="col-12 col-md">
						<h2 class="h2">Услуги</h2>
					</div>
				</div>
			</div>
			<div class="sresearch row">
				<? foreach ($arResult["ITEMS"] as $arItem) {
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
					<div class="sresearch__item col-12 col-md-4 col-xl-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="sresearch__card">
							<div class="sresearch__card__img"><img src="<?=$arItem["PREVIEW_PICTURE"]["SAFE_SRC"]?>" alt=""/></div>
							<div class="sresearch__card__body">
								<a class="sresearch__card__title" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
								<div class="sresearch__card__price">От <?=$arItem["PROPERTIES"]["PRICE"]["VALUE"]?> руб.</div>
								<div class="sresearch__card__footer">
									<div class="row">
										<div class="col-12">
											<a class="mbtn mbtn__full mbtn__red mbtn__default" href="<?=$arItem["DETAIL_PAGE_URL"]?>">Записаться</a>
										</div>
										<div class="col-12">
											<a class="link-wicon link-wicon__mini" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
												<span>Смотреть подробнее</span>
												<i><svg>
													<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
												</svg></i>
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
	</section>
<? }?>
<section class="block__padd">
	<div class="container">
		<div class="servarticle"><!-- el-->
			<?if(!empty($symptoms["title"]) || !empty($symptoms["description"]) || !empty($symptoms["list"])):?>
			<div class="servarticle__item">
				<div class="servarticle__card js--ServArticle-card">
					<div class="servarticle__card__head js--servarticle-title">
						<div class="servarticle__card__head__text">
							<h2 class="h2"><?=$symptoms["title"]?></h2>
						</div>
						<div class="servarticle__card__head__icon"><svg>
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down2"></use>
						</svg></div>
					</div>
					<div class="servarticle__card__content js--ServArticle-slide">
						<div class="servarticle__card__body">
							<div class="block__text">
								<?=$symptoms["description"]?>
								<?if(!empty($symptoms["list"])):?>
								<ul class="ul-columns">
									<?foreach ($symptoms["list"] as $row) {?>
										<li><?=$row?></li>
										<?}?>
									</ul>
									<?endif;?>
									<?if(!empty($contra["title"]) || !empty($contra["list"]) || !empty($contra["description"])):?>
									<div class="row">
										<?if(!empty($contra["title"]) || !empty($contra["list"])):?>
										<div class="col-12 col-lg-5">
											<?if(!empty($contra["title"])):?>
											<h5><?=$contra["title"]?></h5>
											<?endif;?>
											<?if(!empty($contra["list"])):?>
											<ul>
												<?foreach ($contra["list"] as $row) {?>
													<li><?=$row?></li>
													<?}?>
												</ul>
												<?endif;?>
											</div>
											<?endif;?>
											<?if(!empty($contra["description"])):?>
											<div class="col-12 col-lg-7">
												<div class="text__accent">
													<?=$contra["description"]?>
												</div>
											</div>
											<?endif;?>
										</div>
										<?endif;?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?endif;?><!-- /el--><!-- el-->
					<?if(!empty($description["title"]) || !empty($description["description"])):?>
					<div class="servarticle__item">
						<div class="servarticle__card js--ServArticle-card">
							<div class="servarticle__card__head js--servarticle-title">
								<div class="servarticle__card__head__text">
									<h2 class="h2"><?=$description["title"]?></h2>
								</div>
								<div class="servarticle__card__head__icon"><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down2"></use>
								</svg></div>
							</div>
							<div class="servarticle__card__content js--ServArticle-slide">
								<div class="servarticle__card__body">
									<div class="block__text">
										<?=$description["description"]?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?endif;?>
					<?if(!empty($prepare["title"]) || !empty($prepare["description"])):?>
					<div class="servarticle__item">
						<div class="servarticle__card js--ServArticle-card">
							<div class="servarticle__card__head js--servarticle-title">
								<div class="servarticle__card__head__text">
									<h2 class="h2"><?=$prepare["title"]?></h2>
								</div>
								<div class="servarticle__card__head__icon"><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down2"></use>
								</svg></div>
							</div>
							<div class="servarticle__card__content js--ServArticle-slide">
								<div class="servarticle__card__body">
									<div class="block__text">
										<?=$prepare["description"]?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?endif;?>
				</div>
			</div>
		</section>

		<?if($bottom_banner_id):?>
		<?$APPLICATION->IncludeComponent(
	"bitrix:news.detail", 
	"main-single", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"BROWSER_TITLE" => "-",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"ELEMENT_CODE" => "",
		"ELEMENT_ID" => $bottom_banner_id,
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_TEXT",
			2 => "DETAIL_PICTURE",
			3 => "",
		),
		"IBLOCK_ID" => "16",
		"IBLOCK_TYPE" => "actions",
		"IBLOCK_URL" => "",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Страница",
		"PROPERTY_CODE" => array(
			0 => "SALE_SIZE",
			1 => "LINKED_ITEM",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_SHARE" => "N",
		"COMPONENT_TEMPLATE" => "main-single"
	),
	false
);?>
	<?endif;?>

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