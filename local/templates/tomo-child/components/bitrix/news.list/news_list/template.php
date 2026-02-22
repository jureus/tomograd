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
<div class="pageblog row">
	<? foreach ($arResult["ITEMS"] as $arItem) {
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<div class="pageblog__item col-6 col-md-4 col-xl-3" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class="pageblog__card">
				<a class="pageblog__card__img" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
					<img src="<?=$arItem["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
				</a>
				<div class="pageblog__card__body">
					<div class="pageblog__card__head">
						<div class="row">
							<div class="col-auto">
								<div class="pageblog__card__head__marker">
									<span><?=$arItem["PROPERTIES"]["WAY"]["VALUE"]?></span>
								</div>
							</div>
							<div class="col-auto">
								<div class="pageblog__card__head__date">
									<?=$arItem["DISPLAY_ACTIVE_FROM"]?>
								</div>
							</div>
						</div>
					</div>
					<a class="pageblog__card__title" href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["NAME"]?></a>
					<div class="pageblog__card__footer">
						<a class="link-wicon link-wicon__mini" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<span>Читать статью</span>
							<i><svg>
								<use xlink:href="img/icons.svg#ic-right"></use>
							</svg></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	<? }?>
</div>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
<div class="block__more2">
	<div class="d-none d-md-block">
		<div class="pagination">
			<div class="pagination__item"><a class="pagination__link pagination__link__more" href="#"><span>Первая</span></a></div>
			<div class="pagination__item"><button class="pagination__btn"><svg>
				<use xlink:href="img/icons.svg#ic-left"></use>
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
				<use xlink:href="img/icons.svg#ic-right"></use>
			</svg></button></div>
			<div class="pagination__item"><a class="pagination__link pagination__link__more" href="#"><span>Последняя</span></a></div>
		</div>
	</div>
	<div class="d-md-none"><a class="mbtn mbtn__bordered mbtn__greyline mbtn__default d-block w-100" href="#"><span>Показать еще</span></a></div>
</div>
<?endif;?>