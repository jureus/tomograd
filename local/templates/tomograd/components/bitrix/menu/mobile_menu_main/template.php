<?
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die(); ?>

<?
$svgs = [
    'О компании'                => '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-0"></use></svg>',
    'Направления'               => '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-1"></use></svg>',
    'Диагностика'               => '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-2"></use></svg>',
    'Поиск по симптомам'        => '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-3"></use></svg>',
    'Восстановительное лечение' => '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-4"></use></svg>',
];
$defaultSvg = '<svg><use xlink:href="' . SITE_TEMPLATE_PATH . '/img/menuicons.svg#ic-mainnav-0"></use></svg>';
?>

<div class="mobilemenu__navmain">
    <ul class="mobilemenu__navmain__list">
        <?php
        foreach ($arResult['ITEMS'] as $item) { ?>
            <li class="mobilemenu__navmain__list__item js--mobilemenu-sub">
                <?php
                if ($item['IS_PARENT'] === 'Y') { ?>
                <?php
                if (isset($item['DATA_LINK'])){ ?>
                <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link"
                     data-active="false" data-link="hlink-<?= $item['DATA_LINK'] ?>">
                    <?
                    } else { ?>
                    <div class="mobilemenu__navmain__link mobilemenu__navmain__link__warrow js--mobilemenu-sub-link">
                        <?
                        } ?>
                        <i>
                            <?
                            if (isset($svgs[$item['NAME']])) {
                                echo $svgs[$item['NAME']];
                            } else {
                                echo $defaultSvg;
                            } ?>
                        </i>
                        <span><?= $item['NAME'] ?></span>
                        <b>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-arrow-down"></use>
                            </svg>
                        </b>
                    </div>

                    <?php
                    if (!empty($item['CHILDRENS'])) { ?>
                        <div class="mobilemenu__navmain__sub js--mobilemenu-popup">
                            <div class="mobilemenu__navmain__sub__body">
                                <ul class="mobilemenu__navmain__sub__list">
                                    <?php
                                    foreach ($item['CHILDRENS'] as $child): ?>
                                        <?
                                        if (!empty($child['ITEMS'])) { ?>
                                            <div class='mobilemenu__navmain__sub__title'><?= $child['NAME'] ?></div>
                                            <ul class='mobilemenu__navmain__sub__list mobilemenu__navmain__sub__list__columns'>
                                                <?
                                                foreach ($child['ITEMS'] as $item) { ?>
                                                    <li>
                                                        <a href="<?= $item['LINK'] ?>"<?= $item['ACTIVE'] ? ' class="active"' : '' ?>>
                                                            <?= $item['NAME'] ?>
                                                        </a>
                                                    </li>
                                                <?
                                                } ?>
                                            </ul>
                                        <?
                                        } else { ?>
                                            <li>
                                                <a href="<?= $child['LINK'] ?>"<?= $child['ACTIVE'] ? ' class="active"' : '' ?>>
                                                    <?= $child['NAME'] ?>
                                                </a>
                                            </li>
                                        <?
                                        } ?>
                                    <?php
                                    endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php
                    } ?>

                    <?php
                    } else { ?>
                        <a class="mobilemenu__navmain__link"
                           href="<?= $item['LINK'] ?>"<?= $item['ACTIVE'] ? ' class="active"' : '' ?>>
                            <i>
                                <?
                                if (isset($svgs[$item['NAME']])) {
                                    echo $svgs[$item['NAME']];
                                } else {
                                    echo $defaultSvg;
                                } ?>
                            </i>
                            <span><?= $item['NAME'] ?></span>
                        </a>
                    <?php
                    } ?>
            </li>
        <?php
        } ?>
    </ul>
</div>
