<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!-- about-->
<section class="block__padd block__padd__first block__padd__last block__overflow ch-about">
    <div class="container">
        <div class="ch-about__des">
            <div class="ch-about__des__img">
                <div class="ch-about__des__img__pic">
                    <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>" />
                </div>
            </div>
            <div class="ch-about__des__body">
                <div class="ch-about__des__title"><span><i><?=$arResult["PROPERTIES"]["TITLE"]["~VALUE"]["TEXT"]?></i></span></div>
                <div class="ch-about__des__text">
                    <?=$arResult["~DETAIL_TEXT"]?>
                </div>
                <div class="ch-about__des__more">
                    <a class="ch-welcome__btn d-block w-100" href="#js--modal-order" data-fancybox-html="data-fancybox-html">
                        <span>Записаться на прием</span>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Gallery section -->
        <div class="ch-about__advantages__offset js--sl-chadvantages__offset"></div>
        <div class="ch-about__advantages">
            <div class="ch-about__advantages__slider swiper js--sl-chadvantages">
                <div class="swiper-wrapper">
                    <?php 
                    // Берем первые 4 изображения из галереи
                    $galleryImages = array_slice($arResult["PROPERTIES"]["GALLERY"]["VALUE"], 0, 4);
                    foreach ($galleryImages as $key => $imageId): 
                        $imagePath = CFile::GetPath($imageId);
                    ?>
                    <div class="ch-about__advantages__slider__item swiper-slide">
                        <div class="ch-about__advantages__card">
                            <div class="ch-about__advantages__card__bg">
                                <img src="<?=$imagePath?>" alt="Галерея изображений <?=$key+1?>" />
                            </div>
                            <div class="ch-about__advantages__card__text">
                                <?php 
                                // Здесь можно вставить статичные тексты как в примере
                                switch($key) {
                                    case 0: echo 'Дружелюбные врачи'; break;
                                    case 1: echo 'Комфортная атмосфера'; break;
                                    case 2: echo 'Все в одном месте'; break;
                                    case 3: echo 'Удобная запись'; break;
                                    default: echo 'Преимущество '.($key+1);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    
                    <?php 
                    // Если изображений меньше 4, добавляем пустые блоки для сохранения структуры
                    $missingItems = 4 - count($galleryImages);
                    for ($i = 0; $i < $missingItems; $i++): 
                    ?>
                    <div class="ch-about__advantages__slider__item swiper-slide">
                        <div class="ch-about__advantages__card">
                            <div class="ch-about__advantages__card__bg">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/dpchildren/card-adv-<?=$i?>.svg" alt="" />
                            </div>
                            <div class="ch-about__advantages__card__text">
                                <?php 
                                switch($i) {
                                    case 0: echo 'Дружелюбные врачи'; break;
                                    case 1: echo 'Комфортная атмосфера'; break;
                                    case 2: echo 'Все в одном месте'; break;
                                    case 3: echo 'Удобная запись'; break;
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="ch-about__advantages__more">
                <div class="slider__pag js--sl-chadvantages-pag"></div>
            </div>
        </div>
    </div>
</section>