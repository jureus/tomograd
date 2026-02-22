<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<ul class="ch-header__menu">
    <?foreach($arResult as $itemIndex => $arItem):?>
        <?if($itemIndex < 9):?>
            <li class="ch-header__menu__item <?=($itemIndex == 0 ? 'd-lg-none' : '')?><?=($itemIndex == 1 ? 'd-md-none d-lg-block' : '')?><?=($itemIndex == 2 ? 'd-md-none d-lg-block' : '')?><?=($itemIndex == 3 ? '' : '')?><?=($itemIndex == 4 ? 'd-md-none d-lg-block' : '')?><?=($itemIndex == 5 ? '' : '')?><?=($itemIndex == 6 ? 'd-md-none d-xl-block' : '')?><?=($itemIndex == 7 ? 'd-md-none d-xl-block' : '')?><?=($itemIndex == 8 ? 'd-md-none d-xl-block' : '')?>">
                <a class="ch-header__menu__link <?= (strpos($arItem["LINK"], '#') === 0 ? 'js--linkto' : '') ?>" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
            </li>
        <?else:?>
            <?if($itemIndex == 9):?>
                <li class="ch-header__menu__item d-none d-lg-block d-xl-none">
                    <a class="ch-header__menu__link" href="#">Ещё</a>
                    <div class="ch-header__menu__popup">
                        <ul>
                            <?foreach($arResult as $subIndex => $subItem):?>
                                <?if($subIndex >= 6):?>
                                    <li><a href="<?=$subItem["LINK"]?>"><?=$subItem["TEXT"]?></a></li>
                                <?endif;?>
                            <?endforeach;?>
                        </ul>
                    </div>
                </li>
            <?endif;?>
        <?endif;?>
    <?endforeach;?>
</ul>