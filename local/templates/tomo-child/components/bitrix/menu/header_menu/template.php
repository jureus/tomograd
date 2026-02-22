<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="col-auto d-flex">
    <div class="col-auto d-none d-md-block">
        <ul class="header__menu">
		    <?php foreach ($arResult['ITEMS'] as $item){ ?>
		        <li class="header__menu__item <?= $item['SIZE'] ?>">
		            <?php if ($item['IS_PARENT'] === 'Y') { ?>
		            	<?php if (isset($item['DATA_LINK'])){ ?>
		            		<div class="header__menu__link header__menu__link__catalog js--linktocatalog" data-active="false" data-link="hlink-<?=$item['DATA_LINK']?>">
		            	<? } else {?>
		            		<div class="header__menu__link header__menu__link__catalog js--hmenu-link">
		            	<? }?>
		                    <span><?= $item['NAME'] ?></span>
		                    <i><svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-arrow-down"></use></svg></i>
		                </div>
		                <?php if (!empty($item['CHILDRENS'])) {?>
		                    <div class="header__menu__submenu">
		                        <div class="header__menu__submenu__body">
		                            <ul>
		                                <?php foreach ($item['CHILDRENS'] as $child): ?>
		                                    <li>
		                                    	<a href="<?= $child['LINK'] ?>"<?= $child['ACTIVE'] ? ' class="active"' : '' ?>>
		                                    		<?= $child['NAME'] ?>
		                                    	</a>
		                                    </li>
		                                <?php endforeach; ?>
		                            </ul>
		                        </div>
		                    </div>
		                <?php } ?>
		            <?php } else { ?>
		                <a class="header__menu__link" href="<?= $item['LINK'] ?>"<?= $item['ACTIVE'] ? ' class="active"' : '' ?>>
		                    <span><?= $item['NAME'] ?></span>
		                </a>
		            <?php } ?>
		        </li>
		    <?php } ?>
		</ul>
    </div>
    <div class="col-auto d-none d-md-block d-lg-none"><a class="mbtn mbtn__small mbtn__bordered mbtn__blue" href="#">Детское отделение</a></div>
    <div class="col-auto d-none d-lg-block"><a class="mbtn mbtn__small mbtn__bordered mbtn__red" href="#">Детское отделение</a></div>
</div>