<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="ch-mobilemanu js--mobilemenu">
    <div class="ch-mobilemanu__overlay js--mobilemenu-overlay"></div>
    <div class="ch-mobilemanu__body">
        <div class="ch-mobilemanu__content">
            <div class="container">
                <div class="ch-mobilemanu__search"><input class="ch-mobilemanu__search__input" type="text" placeholder="Поиск" /></div>
                <div class="ch-mobilemanu__menu">
                    <ul>
                        <?foreach($arResult as $arItem):?>
                            <li><a class="js--linkto" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
                        <?endforeach;?>
                    </ul>
                </div>
                <div class="ch-mobilemanu__footer">
                    <div class="ch-mobilemanu__footer__btns">
                        <div class="row">
                            <div class="col-6"><a class="ch-header__btnblue d-block w-100" href="#">Общее отделение</a></div>
                            <div class="col-6"><a class="ch-header__btnblue d-block w-100" href="#">Личный кабинет</a></div>
                            <div class="col-12"><a class="ch-header__pink2 d-block w-100" href="#">Консультация специалиста</a></div>
                        </div>
                    </div>
                    <div class="ch-mobilemanu__footer__contacts"><a href="tel:+74951330777">+7 495 133-07-77</a></div>
                </div>
            </div>
        </div>
    </div>
</div>