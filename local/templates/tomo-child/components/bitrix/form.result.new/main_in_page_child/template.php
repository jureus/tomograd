<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}
//нужен для обработки если подключается несколько одинаковых форм 
$randId = 'form_'.rand(0,20000);

$description = "Наш администратор свяжется с&nbsp;вами для&nbsp;согласования времени визита.";
if (isset($arParams["DESCRIPTION"])) $description = $arParams["DESCRIPTION"];

?>
<!-- Запишитесь сейчас-->
<section class="js--effect block__padd block__padd__first" id="<?=$randId?>">
    <div class="container">
        <div class="ch-feedback">
            <div class="ch-feedback__img">
                <div class="ch-feedback__img__pic1">
                    <div class="ch-feedback__img__pic1__bg js--effect-bg" data-set="2"></div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/dpchildren/img-feedback-0.png" alt="" />
                </div>
                <div class="ch-feedback__img__pic2">
                    <div class="ch-feedback__img__pic2__bg js--effect-bg" data-set="-2"></div>
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/dpchildren/img-feedback-1.png" alt="" />
                </div>
            </div>
            <div class="ch-feedback__body">
                <div class="ch-feedback__header">
                    <h2 class="ch-feedback__header__title"><?=$arParams["TITLE"]?></h2>
                    <div class="ch-feedback__header__des"><?=$description?></div>
                </div>
                <div class="ch-feedback__form">
                    <?=$arResult["FORM_HEADER"]?>
                    <input type="hidden" value="<?=$arResult["arForm"]["SID"]?>" name="formSID">
                    <div class="ch-form__body">
                        <div class="ch-form__line row">
                            <? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
                                if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "textarea") { ?>
                                    <div class="ch-form__line__item col-12">
                                        <label class="ch-form__input js--form-label">
                                            <textarea class="ch-form__input__text js--form-input" 
                                                name="form_textarea_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>"></textarea>
                                            <span class="ch-form__input__label"><?=$arQuestion["CAPTION"]?></span>
                                            <i class="ch-form__input__icon valid">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="32" height="32" rx="16" fill="#88B059" />
                                                    <path d="M8.88867 15.6861L14.0087 21.3332L24.8887 10.6665" stroke="white" stroke-width="3.55556" />
                                                </svg>
                                            </i>
                                            <i class="ch-form__input__icon error">
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect width="32" height="32" rx="16" fill="#E78EA0" />
                                                    <path d="M15.4321 22.5428C14.9241 22.5428 14.5074 22.3791 14.1818 22.0517C13.8301 21.7243 13.6543 21.3249 13.6543 20.8534C13.6543 20.3688 13.8236 19.9629 14.1622 19.6355C14.5139 19.3081 14.9372 19.1444 15.4321 19.1444C15.927 19.1444 16.3438 19.3081 16.6824 19.6355C17.034 19.9629 17.2099 20.3688 17.2099 20.8534C17.2099 21.3118 17.0405 21.7112 16.7019 22.0517C16.3503 22.3791 15.927 22.5428 15.4321 22.5428ZM13.8692 8.32056H17.034L16.6042 17.9854H14.299L13.8692 8.32056Z" fill="white" />
                                                </svg>
                                            </i>
                                        </label>
                                    </div>
                            <? } else { ?>
                                <div class="ch-form__line__item col-12">
                                    <label class="ch-form__input js--form-label">
                                        <? if ($arQuestion["STRUCTURE"][0]["FIELD_ID"] == 2) { ?>
                                            <input class="ch-form__input__text js--form-input js--maskphone" type="tel" 
                                            name="form_text_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>" />
                                        <? } else {?>
                                            <input class="ch-form__input__text js--form-input" type="text" 
                                            name="form_text_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>" />
                                        <? }?>
                                        <span class="ch-form__input__label"><?=$arQuestion["CAPTION"]?></span>
                                        <i class="ch-form__input__icon valid">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="32" height="32" rx="16" fill="#88B059" />
                                                <path d="M8.88867 15.6861L14.0087 21.3332L24.8887 10.6665" stroke="white" stroke-width="3.55556" />
                                            </svg>
                                        </i>
                                        <i class="ch-form__input__icon error">
                                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect width="32" height="32" rx="16" fill="#E78EA0" />
                                                <path d="M15.4321 22.5428C14.9241 22.5428 14.5074 22.3791 14.1818 22.0517C13.8301 21.7243 13.6543 21.3249 13.6543 20.8534C13.6543 20.3688 13.8236 19.9629 14.1622 19.6355C14.5139 19.3081 14.9372 19.1444 15.4321 19.1444C15.927 19.1444 16.3438 19.3081 16.6824 19.6355C17.034 19.9629 17.2099 20.3688 17.2099 20.8534C17.2099 21.3118 17.0405 21.7112 16.7019 22.0517C16.3503 22.3791 15.927 22.5428 15.4321 22.5428ZM13.8692 8.32056H17.034L16.6042 17.9854H14.299L13.8692 8.32056Z" fill="white" />
                                            </svg>
                                        </i>
                                    </label>
                                </div>
                            <? } ?>
                            <? } ?>
                            
                            <div class="ch-form__line__item col-12">
                                <div class="ch-form__check__wrap">
                                    <label class="ch-form__check" for="check-confirm-<?=$randId?>">
                                        <input id="check-confirm-<?=$randId?>" type="checkbox" name="CONFIRM" />
                                        <span class="ch-form__check__marker"></span>
                                        <span class="ch-form__check__text">Нажимая на&nbsp;кнопку Вы соглашаетесь с&nbsp;<a href="#" target="_blank">политикой конфиденциальности</a></span>
                                    </label>
                                    <div class="ch-form__input__info error" id="confirm-error-<?=$randId?>" style="display: none;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ch-form__footer">
                        <div class="ch-form__line row">
                            <div class="ch-form__line__item col-12">
                                <button class="ch-form__btnpink" type="submit">
                                    <span>
                                        <span>Записаться</span>
                                        <i>
                                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.2929L15.3431 0.928934C14.9526 0.538409 14.3195 0.538409 13.9289 0.928933C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 8L-8.74227e-08 9L21 9L21 8L21 7L8.74227e-08 7L0 8Z" fill="currentColor" />
                                            </svg>
                                        </i>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <?=$arResult["FORM_FOOTER"]?>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    // Получаем уникальную секцию по её ID
    const section = document.getElementById('<?=$randId?>');
    // Находим форму внутри этой секции
    const form = section.querySelector("form[name='<?=$arResult["arForm"]["SID"]?>']");
    
    // Добавляем обработчик изменения чекбокса
    const confirmCheckbox = form.querySelector("#check-confirm-<?=$randId?>");
    const confirmError = form.querySelector("#confirm-error-<?=$randId?>");
    
    confirmCheckbox.addEventListener('change', function() {
        if(this.checked) {
            confirmError.style.display = 'none';
        }
    });

    // Назначаем обработчик отправки
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        let isValid = true;

        // Очистка предыдущих ошибок только внутри этой формы
        form.querySelectorAll(".ch-form__input").forEach(field => {
            field.classList.remove("valid", "error");
            const errorInfo = field.closest(".ch-form__line__item")?.querySelector(".ch-form__input__info");
            if (errorInfo) errorInfo.style.display = 'none';
        });

        // Проверка чекбокса согласия
        if (!confirmCheckbox.checked) {
            confirmError.textContent = "Необходимо ваше согласие";
            confirmError.style.display = 'block';
            isValid = false;
        } else {
            confirmError.style.display = 'none';
        }

        // Валидация только тех input, которые находятся внутри этой формы
        form.querySelectorAll(".ch-form__input__text").forEach(input => {
            const parentLabel = input.closest(".ch-form__input");
            const isTextarea = input.tagName.toLowerCase() === 'textarea';
            const isPhone = input.classList.contains("js--maskphone");

            // Пропуск textarea
            if (isTextarea) return;

            const value = input.value.trim();

            if (!value) {
                parentLabel.classList.add("error");
                const errorInfo = parentLabel.closest(".ch-form__line__item")?.querySelector(".ch-form__input__info");
                if (errorInfo) {
                    errorInfo.textContent = "Поле обязательно для заполнения";
                    errorInfo.style.display = 'block';
                }
                isValid = false;
            } else if (isPhone) {
                const phoneRegex = /^\+?[0-9\s\-()]{10,}$/;
                if (!phoneRegex.test(value)) {
                    parentLabel.classList.add("error");
                    const errorInfo = parentLabel.closest(".ch-form__line__item")?.querySelector(".ch-form__input__info");
                    if (errorInfo) {
                        errorInfo.textContent = "Введите корректный номер телефона";
                        errorInfo.style.display = 'block';
                    }
                    isValid = false;
                } else {
                    parentLabel.classList.add("valid");
                }
            } else {
                parentLabel.classList.add("valid");
            }
        });

        // Если форма валидна — отправляем
        if (isValid) {
            const formData = new FormData(form);
            fetch('/local/ajax/form_handler.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('Форма успешно отправлена!');
                    form.reset();
                    form.querySelectorAll(".ch-form__input").forEach(field => {
                        field.classList.remove("valid", "error");
                    });
                    confirmCheckbox.checked = false;
                } else {
                    alert('Ошибка: ' + (data.message || 'Неизвестная ошибка'));
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Произошла ошибка при отправке формы.');
            });
        }
    });
</script>