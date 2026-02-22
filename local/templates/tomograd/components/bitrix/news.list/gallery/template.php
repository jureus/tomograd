<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

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

if (empty($arResult['ITEMS'])) {
    return;
}

// Подключаем Swiper и Fancybox стили/скрипты (если нужно)
// $APPLICATION->AddHeadScript('/path/to/swiper.js');
// $APPLICATION->SetAdditionalCSS('/path/to/swiper.css');
// $APPLICATION->SetAdditionalCSS('/path/to/fancybox.css');
?>

<section class="block__padd block__overflow">
    <div class="container">
        <div class="block__padd__title">
            <div class="row flex-nowrap align-items-end">
                <div class="col-12 col-md">
                    <h2 class="h2"><?= $arParams['BLOCK_TITLE'] ?: 'Галерея' ?></h2>
                </div>
            </div>
        </div>
        
        <div class="mainabout__gallery__slider__offset js--sl-gallery-offset">
            <div class="mainabout__gallery">
                <div class="mainabout__gallery__slider swiper js--sl-gallery">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['ITEMS'] as $arItem): ?>
                            <?php
                            $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_EDIT'));
                            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem['IBLOCK_ID'], 'ELEMENT_DELETE'));
                            
                            // Путь к картинке
                            $previewImage = '';
                            $detailImage = '';
                            
                            // Если используется анонсная картинка
                            if ($arParams['DISPLAY_PICTURE'] !== 'N') {
                                if (isset($arItem['PREVIEW_PICTURE'])) {
                                    if (is_array($arItem['PREVIEW_PICTURE'])) {
                                        $previewImage = $arItem['PREVIEW_PICTURE']['SRC'];
                                    } else {
                                        $previewImage = CFile::GetPath($arItem['PREVIEW_PICTURE']);
                                    }
                                } elseif (isset($arItem['DETAIL_PICTURE'])) {
                                    if (is_array($arItem['DETAIL_PICTURE'])) {
                                        $previewImage = $arItem['DETAIL_PICTURE']['SRC'];
                                    } else {
                                        $previewImage = CFile::GetPath($arItem['DETAIL_PICTURE']);
                                    }
                                }
                                
                                // Детальная картинка (для fancybox)
                                if (isset($arItem['DETAIL_PICTURE'])) {
                                    if (is_array($arItem['DETAIL_PICTURE'])) {
                                        $detailImage = $arItem['DETAIL_PICTURE']['SRC'];
                                    } else {
                                        $detailImage = CFile::GetPath($arItem['DETAIL_PICTURE']);
                                    }
                                } else {
                                    $detailImage = $previewImage; // Если нет детальной, используем анонсную
                                }
                            }
                            
                            // Альтернативный текст
                            $alt = '';
                            if (!empty($arItem['PREVIEW_PICTURE']['ALT'])) {
                                $alt = $arItem['PREVIEW_PICTURE']['ALT'];
                            } elseif (!empty($arItem['DETAIL_PICTURE']['ALT'])) {
                                $alt = $arItem['DETAIL_PICTURE']['ALT'];
                            } elseif (!empty($arItem['NAME'])) {
                                $alt = $arItem['NAME'];
                            }
                            
                            $title = '';
                            if (!empty($arItem['PREVIEW_PICTURE']['TITLE'])) {
                                $title = $arItem['PREVIEW_PICTURE']['TITLE'];
                            } elseif (!empty($arItem['DETAIL_PICTURE']['TITLE'])) {
                                $title = $arItem['DETAIL_PICTURE']['TITLE'];
                            } elseif (!empty($arItem['NAME'])) {
                                $title = $arItem['NAME'];
                            }
                            ?>
                            
                            <div class="mainabout__gallery__slider__item swiper-slide" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
                                <a class="mainabout__gallery__card" href="<?= $detailImage ?>" data-fancybox="gallery">
                                    <?php if ($previewImage): ?>
                                        <img src="<?= $previewImage ?>" alt="<?= $alt ?>" title="<?= $title ?>" />
                                    <?php else: ?>
                                        <!-- Можно добавить заглушку -->
                                        <div class="no-image">Нет изображения</div>
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                
                <div class="mainabout__gallery__slider__more">
                    <div class="slider__pag js--sl-gallery-pag"></div>
                </div>
                
                <div class="mainabout__gallery__slider__btns d-none d-lg-block">
                    <div class="slider__nav">
                        <div class="slider__nav__btn left js--sl-gallery-prev">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-left"></use>
                            </svg>
                        </div>
                        <div class="slider__nav__btn right js--sl-gallery-next">
                            <svg>
                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-right"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
// Инициализация скриптов для слайдера
$js = <<<JS
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация Swiper
    const gallerySlider = new Swiper('.js--sl-gallery', {
        slidesPerView: 'auto',
        spaceBetween: 15,
        loop: true,
        pagination: {
            el: '.js--sl-gallery-pag',
            clickable: true,
        },
        navigation: {
            nextEl: '.js--sl-gallery-next',
            prevEl: '.js--sl-gallery-prev',
        },
        breakpoints: {
            768: {
                spaceBetween: 20,
            },
            1024: {
                spaceBetween: 30,
            }
        }
    });
    
    // Инициализация Fancybox
    Fancybox.bind("[data-fancybox='gallery']", {
        // Настройки Fancybox
        Thumbs: false,
        Toolbar: false,
    });
});
</script>
JS;

// Добавляем скрипт, если включен режим показа
if ($arParams['DISPLAY_BOTTOM_PAGER'] !== 'Y') {
    echo $js;
}
?>