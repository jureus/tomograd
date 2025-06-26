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
<section class="block__padd">
	<div class="container">
		<div class="pagespecialists row">
			<?foreach($arResult["ITEMS"] as $arItem){?>
				<?
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="pagespecialists__item col-12 col-sm-6 col-lg-4 col-xl-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <div class="specialists__card">
                        	<a class="specialists__card__img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
	                        	<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
	                        </a>
                            <div class="specialists__card__content">
                                <div class="specialists__card__content__body">
                                    <div class="specialists__card__markers">
                                        <div class="row">
                                            <div class="col-auto"><span>Стаж: <?=$arItem["PROPERTIES"]["WORK_OLD"]["VALUE"]?></span></div>
                                            <div class="col-auto"><span><?=$arItem["PROPERTIES"]["RECIPIENTS"]["VALUE"]?></span></div>
                                        </div>
                                    </div><a class="specialists__card__name" href="#"><?=$arItem["NAME"]?></a>
                                    <div class="specialists__card__post"><?=$arItem["PROPERTIES"]["SHORT_DESCRIPTION"]["~VALUE"]?></div>
                                    <div class="specialists__card__address">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="specialists__card__address__label">Место приема:</div>
                                            </div>
                                            <div class="col">
                                                <ul class="specialists__card__address__list">
                                                	<? foreach ($arItem["PROPERTIES"]["WORK_PLACE"]["VALUE"] as $address) {?>
                                                		<li><?=$address?></li>
                                                	<? }?>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="specialists__card__content__footer">
                                    <div class="row">
                                        <div class="col-12"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#">Записаться онлайн</a></div>
                                        <div class="col-12">
                                        	<a class="link-wicon link-wicon__mini" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        		<span>Подробнее о враче</span>
                                        		<i><svg>
                                                        <use xlink:href="img/icons.svg#ic-right"></use>
                                                </svg></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					<?}?>
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<br /><?=$arResult["NAV_STRING"]?>
			<?endif;?>
		</div>
	</div>
</section>