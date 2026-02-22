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
<!-- Полезная информация-->
<section class="ch-bginfo block__padd block__padd__first block__padd__last block__overflow" id="news">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2">Полезная информация</h2>
                </div>
                <div class="col-12 col-md-auto d-none d-md-block">
                    <a class="link__more" href="#">
                        <span>Перейти в блог</span>
                        <i>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </i>
                    </a>
                </div>
            </div>
        </div>
        <div class="mainblog__offset js--sl-blog-offset"></div>
        <div class="ch-bginfo__body">
            <div class="ch-bginfo__text">
                <div class="ch-bginfo__text__body">Делимся рекомендациями для здоровья, профилактики и&nbsp;лечения.</div>
            </div>
            <div class="ch-bginfo__content">
                <div class="ch-bginfo__bgblue" id="js--styled-scrollblog">
                    <div class="ch-bginfo__bgblue__body">
                        <div class="mainblog slider js--sl-blog">
                            <div class="mainblog__body swiper-wrapper">
                                <? foreach ($arResult["PROPERTIES"]["RIGHT_BLOCK"]["VALUE"] as $item_id) {
                                    $element = getElementWithProperties($item_id);
                                    $img = CFile::GetPath($element["DETAIL_PICTURE"]);
                                ?>
                                <div class="mainblog__item swiper-slide">
                                    <div class="mainblog__card">
                                        <a class="mainblog__card__link" href="<?=$element["DETAIL_PAGE_URL"]?>"></a>
                                        <div class="mainblog__card__body">
                                            <div class="mainblog__card__label">
                                                <span><?=$element["PROPERTIES"]["WAY"]["VALUE"][0]?></span>
                                            </div>
                                            <div class="mainblog__card__title"><?=$element["NAME"]?></div>
                                            <div class="mainblog__card__text"><?=$element["PREVIEW_TEXT"]?></div>
                                            <div class="mainblog__card__footer">
                                                <div class="row align-items-cnter justify-content-between">
                                                    <div class="col-12 col-md-auto order-2 order-md-1">
                                                        <div class="link-wicon link-wicon__mini">
                                                            <span>Узнать подробнее</span>
                                                            <i>
                                                                <svg>
                                                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                                                </svg>
                                                            </i>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-auto order-1 order-md-2">
                                                        <div class="mainblog__card__date"><?=$element["DATE_ACTIVE_FROM"]?></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mainblog__card__img">
                                            <img src="<?= $img?>" alt=""/>
                                        </div>
                                    </div>
                                </div>
                                <? } ?>
                            </div>
                        </div>
                        <div class="mainblog__slider__more d-md-none">
                            <div class="slider__pag js--sl-blog-pag"></div>
                        </div>
                    </div>
                    <div class="ch-bginfo__bgblue__footer">
                        <a class="link__more" href="#">
                            <span>Смотреть все статьи</span>
                            <i>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                                </svg>
                            </i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="ch-bginfo__contacts">
                <div class="ch-bginfo__contacts__label">Узнайте больше – заботьтесь о&nbsp;себе и&nbsp;близких!</div>
                <ul class="ch-bginfo__contacts__list">
                    <li>
                        <a href="<?=$arResult["PROPERTIES"]["VK_LINK"]?>" target="_blank" rel="noopener noreferrer">
                            <i>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-vk"></use>
                                </svg>
                            </i>
                        </a>
                    </li>
                    <li>
                        <a href="<?=$arResult["PROPERTIES"]["TG_LINK"]?>" target="_blank" rel="noopener noreferrer">
                            <i>
                                <svg>
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-tg"></use>
                                </svg>
                            </i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /Полезная информация-->