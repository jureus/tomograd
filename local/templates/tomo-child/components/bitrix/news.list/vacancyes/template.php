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
		<div class="vacancies__list">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<?
			$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
			$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
			?>
			<div class="vacancies__list__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<div class="vacancies__card js--faq-card">
					<div class="vacancies__card__head js--faq-title">
						<div class="vacancies__card__head__text"><?=$arItem["NAME"]?></div>
						<div class="vacancies__card__head__icon"><svg>
							<use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-f-arrow-down2"></use>
						</svg></div>
					</div>
					<div class="vacancies__card__content js--faq-slide">
						<div class="vacancies__card__body">
							<div class="vacancies__card__des">
								<div class="vacancies__card__des__body">
									<? if($arItem["PROPERTIES"]["CHARGES"]["VALUE"]){?>
										<div class="vacancies__card__des__item">
											<div class="vacancies__card__des__title">Обязанности:</div>
											<ul class="vacancies__card__des__list">
												<? foreach ($arItem["PROPERTIES"]["CHARGES"]["VALUE"] as $value) {?>
													<li><?=$value?>;</li>
												<? }?>
											</ul>
										</div>
									<?}?>
									<? if($arItem["PROPERTIES"]["REQUIRMENTS"]["VALUE"]){?>
										<div class="vacancies__card__des__item">
											<div class="vacancies__card__des__title">Требования:</div>
											<ul class="vacancies__card__des__list">
												<? foreach ($arItem["PROPERTIES"]["REQUIRMENTS"]["VALUE"] as $value) {?>
													<li><?=$value?>;</li>
												<? }?>
											</ul>
										</div>
									<?}?>
									<? if($arItem["PROPERTIES"]["OPTIONS"]["VALUE"]){?>
										<div class="vacancies__card__des__item">
											<div class="vacancies__card__des__title">Условия:</div>
											<ul class="vacancies__card__des__list">
												<? foreach ($arItem["PROPERTIES"]["OPTIONS"]["VALUE"] as $value) {?>
													<li><?=$value?>;</li>
												<? }?>
											</ul>
										</div>
									<?}?>
								</div>
								<div class="vacancies__card__des__footer">
									<a class="mbtn mbtn__full mbtn__red mbtn__default" href="#">Отправить резюме</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?endforeach;?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
			<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
	</div>
</section>