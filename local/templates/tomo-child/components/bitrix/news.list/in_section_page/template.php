<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="block__padd block__overflow">
            <div class="container">
                <div class="block__padd__title">
                    <div class="row flex-nowrap align-items-end">
                        <div class="col-12 col-md">
                            <h2 class="h2">Услуги</h2>
                        </div>
                    </div>
                </div>
                <div class="catalogservices row">
                    <? foreach ($arResult["ITEMS"][0]["ITEMS"] as $arItem) {?>
                    	<div class="catalogservices__item col-12 col-md-3">
						    <div class="catalogservices__card">
						        <picture class="catalogservices__card__img">
						            <source media="(min-width: 768px)" srcset="<?=CFile::GetPath($arItem["PICTURE"])?>">
						            <source media="(max-width: 767px)" srcset="<?=CFile::GetPath($arItem["PICTURE"])?>">
						            <img src="<?=CFile::GetPath($arItem["PICTURE"])?>" alt="">
						        </picture>
						        <div class="catalogservices__card__body">
						            <a class="catalogservices__card__title" href="<?=$arItem["LINK"]?>"><?=$arItem["NAME"]?></a>
						            <div class="catalogservices__card__more">
						                <a class="mbtn mbtn__full mbtn__red mbtn__default" href="<?=$arItem["LINK"]?>">Подробнее</a>
						            </div>
						        </div>
						        <div class="catalogservices__card__categories">
						        	<div class="catalogservices__card__categories__item">
						                <a class="catalogservices__card__categories__title" href="<?=$arItem["LINK"]?>"><?=$arItem["NAME"]?></a>
						                <ul class="catalogservices__card__categories__list">
								        	<? foreach ($arItem["ITEMS"] as $element) {?>
								        		<li><a href="<?=$element["LINK"]?>"><?=$element["NAME"]?></a></li>
								        	<? }?>
						                </ul>
						            </div>
						        </div>
						    </div>
						</div>
                    <?	}?>
                </div>
            </div>
        </section>