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
<div class="contacts">
	<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="contacts__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<div class="contacts__card">
			<div class="contacts__card__head">
				<h2 class="contacts__card__head__title"><?=$arItem["NAME"]?></h2>
				<div class="contacts__card__head__address">
					<i><svg>
						<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-address2"></use>
					</svg></i>
					<span>ул. Федорова, дом 19</span>
				</div>
				<div class="contacts__card__head__footer">
					<div class="row align-items-center">
						<div class="col-12 col-md col-auto">
							<a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#">Записаться&nbsp;на&nbsp;прием</a>
						</div>
						<div class="col-12 col-md col-auto">
							<a href="#" class="link-wicon link-wicon__mini js--ypms-tomark" 
							data-indexmark="<?=$arItem["PROPERTIES"]["MAP_DATA"]["VALUE"]?>">
							<span>Найти на карте</span>
							<i><svg>
								<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-right"></use>
							</svg></i>
						</a>
					</div>
				</div>
			</div>
			<div class="contacts__card__head__img"><img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
		</div>
		<div class="contacts__card__content">
			<div class="contacts__card__info row">
				<div class="contacts__card__info__item col-12 col-md-auto">
					<div class="contacts__card__info__title">График работы</div>
					<div class="maincontacts__card__des__worktime">
						<div class="row">
							<?=$arItem["PROPERTIES"]["WORK_TIME"]["~VALUE"]["TEXT"]?>
						</div>
					</div>
				</div>
				<div class="contacts__card__info__item col-12 col-md-auto">
					<div class="contacts__card__info__title">Контакты</div>
					<ul class="maincontacts__card__des__contacts">
						<li>
							<a class="maincontacts__card__des__contacts__card" href="tel:<?=$arItem["PROPERTIES"]["PHONE"]["VALUE"]?>">
								<i><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-phone"></use>
								</svg></i>
								<span><?=formate_phone($arItem["PROPERTIES"]["PHONE"]["VALUE"])?></span>
							</a>
						</li>
						<li>
							<a class="maincontacts__card__des__contacts__card" href="tel:<?=$arItem["PROPERTIES"]["WHATSAPP"]["VALUE"]?>">
								<i><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-wa2"></use>
								</svg></i>
								<span><?=$arItem["PROPERTIES"]["WHATSAPP"]["VALUE"]?></span>
							</a>
						</li>
						<li>
							<a class="maincontacts__card__des__contacts__card" href="mailto:<?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?>">
								<i><svg>
									<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-mail2"></use>
								</svg></i>
								<span><?=$arItem["PROPERTIES"]["EMAIL"]["VALUE"]?></span>
							</a>
						</li>
					</ul>
				</div>
				<div class="contacts__card__info__item col-12 col-md-auto ms-auto contacts__card__info__dop__wrap">
					<div class="contacts__card__info__title">Доступность клиники:</div>
					<ul class="contacts__card__info__dop">
						<? foreach ($arItem["PROPERTIES"]["ACC_ENVIRONMENT"]["VALUE"] as $itemId) {
							$item = getElementWithProperties($itemId);?>
							<li>
								<div class="contacts__card__info__dop__card">
									<i>
										<?=$item["~DETAIL_TEXT"]?>
									</i><span><?=$item["NAME"]?></span>
								</div>
							</li>
						<? } ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<?endforeach;?>
</div>

<div class="maincontacts__map">
	<div class="maincontacts__map__content" id="map-home"></div>
</div>