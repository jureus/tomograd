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
                <div class="symptoms">
                    <div class="row">
                        <div class="col-12 col-lg-7 col-xl-8">
                            <div class="symptoms__img"><img src="<?=$arResult["DETAIL_PICTURE"]["SAFE_SRC"]?>" alt="" /></div>
                        </div>
                        <div class="col-12 col-lg-5 col-xl-4">
                            <div class="symptoms__des">
                                <div class="symptoms__des__title"><?=$arResult["~PREVIEW_TEXT"]?>:</div>
                                <?=$arResult["~DETAIL_TEXT"]?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>