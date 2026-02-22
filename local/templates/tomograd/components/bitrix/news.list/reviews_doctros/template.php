<?
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
?>
<section class="block__padd" id="form-review">
    <div class="container">
        <div class="sendreview">
            <div class="sendreview__bg"></div>
            <div class="sendreview__content">
                <div class="sendreview__head">
                    <h2 class="sendreview__head__title">Оставьте свой отзыв</h2>
                    <div class="sendreview__head__text">Поделитесь своими впечатлениями о сотрудничестве с нашей
                        клиникой или нашими докторами
                    </div>
                </div>
                <div class="sendreview__form">
                    <form class="form" action="#">
                        <div class="form__line row">
                            <div class="col-12 col-md-6 col-lg-4">
                                <label class="form__input js--form-label">
                                    <input
                                            class="form__input__text js--form-input" type="text"/><span
                                            class="form__input__label">Ваше имя</span><i
                                            class="form__input__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#0CC44D"/>
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
                                                  stroke-width="1.38242"/>
                                        </svg>
                                    </i><i class="form__input__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#E30016"/>
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
                                                  fill="white"/>
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label class="form__input js--form-label">
                                    <input
                                            class="form__input__text js--form-input js--maskphone" type="tel"/><span
                                            class="form__input__label">Мобильный телефон</span><i
                                            class="form__input__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#0CC44D"/>
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
                                                  stroke-width="1.38242"/>
                                        </svg>
                                    </i><i class="form__input__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#E30016"/>
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
                                                  fill="white"/>
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <label class="form__input js--form-label">
                                    <input
                                            class="form__input__text js--form-input" type="mail"/><span
                                            class="form__input__label">Ваш email</span><i
                                            class="form__input__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#0CC44D"/>
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
                                                  stroke-width="1.38242"/>
                                        </svg>
                                    </i><i class="form__input__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#E30016"/>
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
                                                  fill="white"/>
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4">
                                <div class="form__select js--select js--check-reviewgrooup">
                                    <div class="form__select__label js--select-label"><span
                                                class="form__select__label__des">О ком отзыв</span><span
                                                class="form__select__label__text js--select-text"></span><i
                                                class="form__select__label__icon">
                                            <svg>
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH ?>/img/icons.svg#ic-f-arrow-down"></use>
                                            </svg>
                                        </i></div>
                                    <div class="form__select__popup">
                                        <div class="form__select__popup__body js--styled-scroll">
                                            <ul class="form__select__sub">
                                                <li class="form__select__sub__option js--select-option active"
                                                    data-value="0">Отзыв о враче
                                                </li>
                                                <li class="form__select__sub__option js--select-option" data-value="1">
                                                    Отзыв о клинике
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4" id="ftab_0">
                                <div class="autocomplete js--autocomplete">
                                    <label
                                            class="form__input js--form-label"><input
                                                class="form__input__text js--form-input js--autocomplete-input"
                                                type="text"/><span class="form__input__label">ФИО врача</span><i
                                                class="form__input__icon valid">
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418"
                                                      rx="6.2209" fill="#0CC44D"/>
                                                <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183"
                                                      stroke="white" stroke-width="1.38242"/>
                                            </svg>
                                        </i><i class="form__input__icon error">
                                            <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418"
                                                      rx="6.2209" fill="#E30016"/>
                                                <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
                                                      fill="white"/>
                                            </svg>
                                        </i></label>
                                    <div class="autocomplete__popup">
                                        <div class="autocomplete__body js--styled-scroll">
                                            <ul>
												<? foreach ($arResult["ITEMS"] as $arItem) { ?>
													<li class="js--autocomplete-list-item">
														<?=$arItem["NAME"]?>
														<input type="hidden" class="js--input-docid" value="<?=$arItem["NAME"]?>" data-id=<?=$arItem["ID"]?>/>
													</li>
												<?}?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 align-self-center">
                                <div class="form__line2 row align-items-center">
                                    <div class="col-auto">
                                        <div class="form__info">Ваша оценка</div>
                                    </div>
                                    <div class="col-auto">
                                        <div class="full-stars">
                                            <div class="rating-group"><input type="radio" name="fst" value="0"
                                                                             disabled="disabled"
                                                                             checked="checked"/><label for="fst-1">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z"
                                                              fill="currentColor"/>
                                                    </svg>
                                                </label><input id="fst-1" type="radio" name="fst" value="1"/><label
                                                        for="fst-2">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z"
                                                              fill="currentColor"/>
                                                    </svg>
                                                </label><input id="fst-2" type="radio" name="fst" value="2"/><label
                                                        for="fst-3">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z"
                                                              fill="currentColor"/>
                                                    </svg>
                                                </label><input id="fst-3" type="radio" name="fst" value="3"/><label
                                                        for="fst-4">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z"
                                                              fill="currentColor"/>
                                                    </svg>
                                                </label><input id="fst-4" type="radio" name="fst" value="4"/><label
                                                        for="fst-5">
                                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none"
                                                         xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z"
                                                              fill="currentColor"/>
                                                    </svg>
                                                </label><input id="fst-5" type="radio" name="fst" value="5"/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12"><label class="form__textarea js--form-label"><textarea
                                            class="form__textarea__text js--form-textarea" name="#"></textarea><span
                                            class="form__textarea__label">Ваш отзыв</span><i
                                            class="form__textarea__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#0CC44D"/>
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white"
                                                  stroke-width="1.38242"/>
                                        </svg>
                                    </i><i class="form__textarea__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209"
                                                  fill="#E30016"/>
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z"
                                                  fill="white"/>
                                        </svg>
                                    </i></label></div>
                            <div class="col-12">
                                <div class="form__line2 row align-items-center">
                                    <div class="col-12 col-md-auto order-2 order-md-1">
                                        <button class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100"
                                                type="submit">Отправить отзыв
                                        </button>
                                    </div>
                                    <div class="col-12 col-md order-1 order-md-2">
                                        <label for="ccheck-reviews" class="form__confirm__check text-left">
                                            <input type="checkbox" id="ccheck-reviews" class="form__confirm__check__input" required>
                                            <span class="form__confirm__check__text">Отправляя заявку, я&nbsp;даю согласие на&nbsp;обработку <a href="/privacy" target="_blank">персональных данных</a> и&nbsp;принимаю условия <a href="/policy" target="_blank">политики конфиденциальности</a></span>
                                        </label> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const reviewForm = document.querySelector('#form-review form');
    
    if (!reviewForm) return;
    
    // Инициализация селектов и других компонентов
    // (ваш существующий код инициализации)
    
    reviewForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Сбор данных из формы
        const formData = new FormData();
        
        // Получаем значения из формы
        const name = document.querySelector('input[type="text"]')?.value || '';
        const phone = document.querySelector('input[type="tel"]')?.value || '';
        const email = document.querySelector('input[type="mail"]')?.value || '';
        const reviewType = document.querySelector('.js--check-reviewgrooup .active')?.dataset.value || '0';
        const doctorName = document.querySelector('.js--autocomplete-input')?.value || '';
        const rating = document.querySelector('input[name="fst"]:checked')?.value || '0';
        const reviewText = document.querySelector('textarea')?.value || '';
        
        // Получаем ID врача, если выбран
        let doctorId = '';
        const selectedDoctor = document.querySelector('.js--autocomplete-list-item.active');
        if (selectedDoctor) {
            const hiddenInput = selectedDoctor.querySelector('.js--input-docid');
            doctorId = hiddenInput?.dataset.id || '';
            consloe.log(doctorId)
        }
        
        // Формируем название элемента
        let elementName = "О клинике";
        if (reviewType === '0' && doctorName) {
            elementName = doctorName;
        }
        
        // Заполняем FormData
        formData.append('action', 'add_review');
        formData.append('name', name);
        formData.append('phone', phone);
        formData.append('email', email);
        formData.append('review_type', reviewType);
        formData.append('doctor_name', doctorName);
        formData.append('doctor_id', doctorId);
        formData.append('rating', rating);
        formData.append('review_text', reviewText);
        formData.append('sessid', BX.bitrix_sessid());
        
        // Показываем индикатор загрузки
        const submitBtn = reviewForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Отправка...';
        submitBtn.disabled = true;
        
        // Отправка AJAX запроса
        fetch('/local/ajax/review_handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                // Успешная отправка
                // alert('Спасибо! Ваш отзыв успешно отправлен на модерацию.');
                reviewForm.reset();
                
                // Сброс звезд рейтинга
                const ratingInputs = document.querySelectorAll('input[name="fst"]');
                ratingInputs.forEach(input => input.checked = false);
                
                // Сброс выбранного врача
                if (selectedDoctor) {
                    selectedDoctor.classList.remove('active');
                }
                Fancybox.show([{ 
                    src: "#js--modal-thanks", 
                    type: "inline" 
                }]);
            } else {
                // alert('Ошибка: ' + data.message);
                console.error('Ошибка: ', data.message || 'Неизвестная ошибка');
                // Открываем модальное окно "Ошибка"
                Fancybox.show([{ 
                    src: "#js--modal-error", 
                    type: "inline" 
                }]);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            // alert('Произошла ошибка при отправке отзыва');
            // Открываем модальное окно "Ошибка"
            Fancybox.show([{ 
                src: "#js--modal-error", 
                type: "inline" 
            }]);
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        });
    });
});
</script>