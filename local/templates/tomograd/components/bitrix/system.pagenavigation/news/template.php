<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
    die();
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

if (!$arResult['NavShowAlways']) {
    if ($arResult['NavRecordCount'] == 0 || ($arResult['NavPageCount'] == 1 && $arResult['NavShowAll'] == false))
        return;
}

$strNavQueryString = ($arResult['NavQueryString'] != '' ? $arResult['NavQueryString'] . '&amp;' : '');
$strNavQueryStringFull = ($arResult['NavQueryString'] != '' ? '?' . $arResult['NavQueryString'] : '');

// Функция для генерации URL страницы
function makePageUrl ($pageNum, $arResult, $strNavQueryString) {
    if ($pageNum == 1 && $arResult['bSavePage'] == false) {
        return $arResult['sUrlPath'] . ($arResult['NavQueryString'] != '' ? '?' . $arResult['NavQueryString'] : '');
    } else {
        $queryString = $strNavQueryString . 'PAGEN_' . $arResult['NavNum'] . '=' . $pageNum;
        return $arResult['sUrlPath'] . '?' . $queryString;
    }
}

// Определяем текущую страницу и общее количество страниц
$currentPage = $arResult['NavPageNomer'];
$totalPages = $arResult['NavPageCount'];

// Определяем порядок нумерации страниц (для обратной нумерации)
if ($arResult['bDescPageNumbering'] === true) {
    // Для обратной нумерации преобразуем номера
    function getDescPageNumber ($pageNum, $totalPages) {
        return $totalPages - $pageNum + 1;
    }
}
?>

<div class="block__more2">
    <div class="d-none d-md-block">
        <div class="pagination">
            <?php
            // Кнопка "Первая" ?>
            <div class="pagination__item">
                <?php
                if ($arResult['bDescPageNumbering'] === true): ?>
                    <?php
                    if ($currentPage < $totalPages): ?>
                        <a class="pagination__link pagination__link__more"
                           href="<?= makePageUrl($totalPages, $arResult, $strNavQueryString) ?>">
                            <span>Первая</span>
                        </a>
                    <?php
                    else: ?>
                        <span class="pagination__link pagination__link__more disabled">
                            <span>Первая</span>
                        </span>
                    <?php
                    endif; ?>
                <?php
                else: ?>
                    <?php
                    if ($currentPage > 1): ?>
                        <a class="pagination__link pagination__link__more"
                           href="<?= makePageUrl(1, $arResult, $strNavQueryString) ?>">
                            <span>Первая</span>
                        </a>
                    <?php
                    else: ?>
                        <span class="pagination__link pagination__link__more disabled">
                            <span>Первая</span>
                        </span>
                    <?php
                    endif; ?>
                <?php
                endif; ?>
            </div>

            <?php
            // Кнопка "Назад" ?>
            <div class="pagination__item">
                <?php
                if ($arResult['bDescPageNumbering'] === true): ?>
                    <?php
                    if ($currentPage < $totalPages): ?>
                        <a class="pagination__btn"
                           href="<?= makePageUrl($currentPage + 1, $arResult, $strNavQueryString) ?>">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </a>
                    <?php
                    else: ?>
                        <button class="pagination__btn disabled" disabled>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </button>
                    <?php
                    endif; ?>
                <?php
                else: ?>
                    <?php
                    if ($currentPage > 1): ?>
                        <a class="pagination__btn"
                           href="<?= makePageUrl($currentPage - 1, $arResult, $strNavQueryString) ?>">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </a>
                    <?php
                    else: ?>
                        <button class="pagination__btn disabled" disabled>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </button>
                    <?php
                    endif; ?>
                <?php
                endif; ?>
            </div>

            <?php
            // Номера страниц ?>
            <div class="pagination__item">
                <ul>
                    <?php
                    if ($arResult['bDescPageNumbering'] === true):
                        // Обратная нумерация
                        $start = max(1, $currentPage - 2);
                        $end = min($totalPages, $currentPage + 2);

                        // Показываем страницы в обратном порядке
                        for ($i = $end; $i >= $start; $i--):
                            $displayNum = getDescPageNumber($i, $totalPages);
                            ?>
                            <?php
                            if ($i == $currentPage): ?>
                                <li><a class="pagination__link active" href="#"><?= $displayNum ?></a></li>
                            <?php
                            else: ?>
                                <li><a class="pagination__link"
                                       href="<?= makePageUrl($i, $arResult, $strNavQueryString) ?>"><?= $displayNum ?></a>
                                </li>
                            <?php
                            endif; ?>
                        <?php
                        endfor;

                    else:
                        // Прямая нумерация
                        $start = max(1, $currentPage - 2);
                        $end = min($totalPages, $currentPage + 2);

                        // Показываем первую страницу и многоточие если нужно
                        if ($start > 1):
                            echo '<li><a class="pagination__link" href="' . makePageUrl(1, $arResult, $strNavQueryString) . '">1</a></li>';
                            if ($start > 2):
                                echo '<li><span class="pagination__link">...</span></li>';
                            endif;
                        endif;

                        // Основной диапазон страниц
                        for ($i = $start; $i <= $end; $i++):
                            ?>
                            <?php
                            if ($i == $currentPage): ?>
                                <li><a class="pagination__link active" href="#"><?= $i ?></a></li>
                            <?php
                            else: ?>
                                <li><a class="pagination__link"
                                       href="<?= makePageUrl($i, $arResult, $strNavQueryString) ?>"><?= $i ?></a></li>
                            <?php
                            endif; ?>
                        <?php
                        endfor;

                        // Показываем последнюю страницу и многоточие если нужно
                        if ($end < $totalPages):
                            if ($end < $totalPages - 1):
                                echo '<li><span class="pagination__link">...</span></li>';
                            endif;
                            echo '<li><a class="pagination__link" href="' . makePageUrl($totalPages, $arResult, $strNavQueryString) . '">' . $totalPages . '</a></li>';
                        endif;
                    endif; ?>
                </ul>
            </div>

            <?php
            // Кнопка "Вперед" ?>
            <div class="pagination__item">
                <?php
                if ($arResult['bDescPageNumbering'] === true): ?>
                    <?php
                    if ($currentPage > 1): ?>
                        <a class="pagination__btn"
                           href="<?= makePageUrl($currentPage - 1, $arResult, $strNavQueryString) ?>">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </a>
                    <?php
                    else: ?>
                        <button class="pagination__btn disabled" disabled>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </button>
                    <?php
                    endif; ?>
                <?php
                else: ?>
                    <?php
                    if ($currentPage < $totalPages): ?>
                        <a class="pagination__btn"
                           href="<?= makePageUrl($currentPage + 1, $arResult, $strNavQueryString) ?>">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </a>
                    <?php
                    else: ?>
                        <button class="pagination__btn disabled" disabled>
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </button>
                    <?php
                    endif; ?>
                <?php
                endif; ?>
            </div>

            <?php
            // Кнопка "Последняя" ?>
            <div class="pagination__item">
                <?php
                if ($arResult['bDescPageNumbering'] === true): ?>
                    <?php
                    if ($currentPage > 1): ?>
                        <a class="pagination__link pagination__link__more"
                           href="<?= makePageUrl(1, $arResult, $strNavQueryString) ?>">
                            <span>Последняя</span>
                        </a>
                    <?php
                    else: ?>
                        <span class="pagination__link pagination__link__more disabled">
                            <span>Последняя</span>
                        </span>
                    <?php
                    endif; ?>
                <?php
                else: ?>
                    <?php
                    if ($currentPage < $totalPages): ?>
                        <a class="pagination__link pagination__link__more"
                           href="<?= makePageUrl($totalPages, $arResult, $strNavQueryString) ?>">
                            <span>Последняя</span>
                        </a>
                    <?php
                    else: ?>
                        <span class="pagination__link pagination__link__more disabled">
                            <span>Последняя</span>
                        </span>
                    <?php
                    endif; ?>
                <?php
                endif; ?>
            </div>
        </div>

        <?php
        // Кнопка "Показать все" / "Показать постранично" ?>
        <?php
        if ($arResult['bShowAll']): ?>
            <div class="mt-3">
                <?php
                if ($arResult['NavShowAll']): ?>
                    <a class="mbtn mbtn__bordered mbtn__greyline mbtn__default d-block w-100"
                       href="<?= $arResult['sUrlPath'] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult['NavNum'] ?>=0"
                       rel="nofollow">
                        <span><?= GetMessage('nav_paged') ?></span>
                    </a>
                <?php
                else: ?>
                    <a class="mbtn mbtn__bordered mbtn__greyline mbtn__default d-block w-100"
                       href="<?= $arResult['sUrlPath'] ?>?<?= $strNavQueryString ?>SHOWALL_<?= $arResult['NavNum'] ?>=1"
                       rel="nofollow">
                        <span><?= GetMessage('nav_all') ?></span>
                    </a>
                <?php
                endif ?>
            </div>
        <?php
        endif ?>
    </div>

    <div class="d-md-none">
        <?php
        // Мобильная версия - "Показать еще" ?>
        <?php
        if ($currentPage < $totalPages): ?>
            <a class="mbtn mbtn__bordered mbtn__greyline mbtn__default d-block w-100"
               href="<?= makePageUrl($currentPage + 1, $arResult, $strNavQueryString) ?>">
                <span>Показать еще</span>
            </a>
        <?php
        endif ?>
    </div>
</div>