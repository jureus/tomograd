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
$current_price = $arResult["PROPERTIES"]["PRICE"]["VALUE"] / 100 * $arResult["PROPERTIES"]["SALE_SIZE"]["VALUE"];
?>
<div class="actionarticle__head">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="actionarticle__head__content">
                <h1 class="actionarticle__head__content__title"><?=$arResult["NAME"]?></h1>
                <div class="actionarticle__head__content__text"><?=$arResult["~DETAIL_TEXT"]?></div>
                <div class="actionarticle__head__content__price">
                    <s><?=$arResult["PROPERTIES"]["PRICE"]["VALUE"]?> ₽</s>
                    <span><?=$current_price?> ₽</span>
                </div>
                <div class="actionarticle__head__content__img">
                    <img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" />
                </div>
            </div>
        </div>
        <div class="col-12 col-lg-4">
            <div class="actionarticle__head__side">
                <div class="actionarticle__head__side__content">
                    <ul class="actionarticle__head__side__list">
                        <? foreach ($arResult["PROPERTIES"]["SVG"]["VALUE"] as $svg_item_id) {
                            $svg_item = getElementWithProperties($svg_item_id);
                            ?>
                            <li>
                                <div class="actionarticle__head__side__card">
                                    <div class="actionarticle__head__side__card__icon">
                                        <?=$svg_item["~DETAIL_TEXT"]?>
                                    </div>
                                    <div class="actionarticle__head__side__card__body">
                                        <p><?=$svg_item["NAME"]?></p>
                                    </div>
                                </div>
                            </li>
                        <? }?>
                    </ul>
                </div>
                <div class="actionarticle__head__side__footer"><a class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100" href="#">Записаться на прием</a></div>
            </div>
        </div>
    </section>
    <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"articles-actions", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
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
		"FIELD_CODE" => array(
			0 => "NAME",
			1 => "PREVIEW_TEXT",
			2 => "DETAIL_TEXT",
			3 => "",
		),
		"FILTER_NAME" => "arrFilter",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "28",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "LINKED_ITEM",
			2 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"COMPONENT_TEMPLATE" => "articles-actions",
        "ELEMENT_ID" => $arResult["ID"]
	),
	false
);?>

    <?
        $svg_1 = getElementWithProperties($arResult["PROPERTIES"]["PROPERTY_1_SVG"]["VALUE"]);
        $svg_2 = getElementWithProperties($arResult["PROPERTIES"]["PROPERTY_2_SVG"]["VALUE"]);
        $svg_3 = getElementWithProperties($arResult["PROPERTIES"]["PROPERTY_3_SVG"]["VALUE"]);
        echo 1;
    ?>

    <section class="block__padd block__overflow">
        <div class="container">
            <div class="actionarticle__des">
                <div class="row">
                    <div class="col-12 col-lg-7">
                        <div class="actionarticle__des__content">
                            <h2 class="h2"><?=$arResult["PROPERTIES"]["DESCRIPTION_TITLE"]["VALUE"]?></h2>
                            <div class="actionarticle__des__text">
                                <div class="block__text">
                                    <?=$arResult["PROPERTIES"]["DESCRIPTION_VALUE"]["~VALUE"]["TEXT"]?>
                                </div>
                            </div>
                            <ul class="actionarticle__des__list">
                                <li>
                                    <div class="actionarticle__des__list__card">
                                        <div class="actionarticle__des__list__card__icon">
                                            <?=$svg_1["~DETAIL_TEXT"]?>
                                        </div>
                                        <div class="actionarticle__des__list__card__body">
                                            <div class="actionarticle__des__list__card__label">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_1_TITLE"]["VALUE"]?>:
                                            </div>
                                            <div class="actionarticle__des__list__card__text">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_1_VALUE"]["VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="actionarticle__des__list__card">
                                        <div class="actionarticle__des__list__card__icon">
                                            <?=$svg_2["~DETAIL_TEXT"]?>
                                        </div>
                                        <div class="actionarticle__des__list__card__body">
                                            <div class="actionarticle__des__list__card__label">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_2_TITLE"]["VALUE"]?>:
                                            </div>
                                            <div class="actionarticle__des__list__card__text">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_2_VALUE"]["VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="actionarticle__des__list__card">
                                        <div class="actionarticle__des__list__card__icon">
                                            <?=$svg_3["~DETAIL_TEXT"]?>
                                        </div>
                                        <div class="actionarticle__des__list__card__body">
                                            <div class="actionarticle__des__list__card__label">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_3_TITLE"]["VALUE"]?>:
                                            </div>
                                            <div class="actionarticle__des__list__card__text">
                                                <?=$arResult["PROPERTIES"]["PROPERTY_3_VALUE"]["VALUE"]?>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="actionarticle__des__footer"><a class="mbtn mbtn__full mbtn__red mbtn__extralarge" href="#">Записаться на прием</a></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5">
                        <div class="actionarticle__des__img">
                            <picture>
                                <source media="(min-width: 1200px)" srcset="<?=CFile::getPath($arResult["PROPERTIES"]["DESCRIPTION_IMG"]["VALUE"])?>" />
                                    <source media="(min-width: 768px) and (max-width: 1200px)" srcset="<?=CFile::getPath($arResult["PROPERTIES"]["DESCRIPTION_IMG"]["VALUE"])?>" />
                                        <source media="(max-width: 767px)" srcset="<?=CFile::getPath($arResult["PROPERTIES"]["DESCRIPTION_IMG"]["VALUE"])?>" /><img src="<?=CFile::getPath($arResult["PROPERTIES"]["DESCRIPTION_IMG"]["VALUE"])?>" alt="" />
                                        </picture>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>