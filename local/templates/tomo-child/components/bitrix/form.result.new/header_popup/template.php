<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}?>
<div class="modal" id="js--modal-order">
        <div class="modal__content">
            <div class="modal__row">
                <div class="modal__row__side">
                    <div class="modal__row__side__title">Выберите удобный способ записи на прием</div>
                    <div class="modal__row__side__logo"><img src="img/logo-pd.png" alt="" /></div>
                    <div class="modal__row__side__des">Выбор нужного специалиста, даты и&nbsp;времени на&nbsp;сайте партнера</div>
                    <div class="modal__row__side__btn"><a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" href="#">Перейти в сервис ПроДокторов</a></div>
                </div>
                <div class="modal__row__block">
                    <div class="modal__row__block__title">Или оставьте заявку, и&nbsp;наш администратор свяжется с&nbsp;вами.</div>
                    <form class="form" action="#">
                        <div class="form__line row">
                            <div class="col-12">
                                <label class="form__input form__input__h38 js--form-label">
                                    <input class="form__input__text js--form-input" type="text" />
                                    <span class="form__input__label">Ваше имя</span>
                                    <i class="form__input__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
                                        </svg>
                                    </i>
                                    <i class="form__input__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12">
                                <label class="form__input form__input__h38 js--form-label">
                                    <input class="form__input__text js--form-input js--maskphone" type="tel" />
                                    <span class="form__input__label">Мобильный телефон</span>
                                    <i class="form__input__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
                                        </svg>
                                    </i>
                                    <i class="form__input__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12">
                                <div class="form__select form__select__h38 js--select">
                                    <div class="form__select__label js--select-label">
                                        <span class="form__select__label__des">Выбор услуги</span>
                                        <span class="form__select__label__text js--select-text"></span>
                                        <i class="form__select__label__icon">
                                            <svg>
                                                <use xlink:href="img/icons.svg#ic-arrow-down"></use>
                                            </svg>
                                        </i>
                                    </div>
                                    <div class="form__select__popup">
                                        <div class="form__select__popup__body js--styled-scroll">
                                            <ul class="form__select__sub">
                                                <li class="form__select__sub__option js--select-option" data-value="0">Услуга 1</li>
                                                <li class="form__select__sub__option js--select-option" data-value="1">Услуга 2</li>
                                                <li class="form__select__sub__option js--select-option" data-value="2">Услуга 3</li>
                                                <li class="form__select__sub__option js--select-option" data-value="3">Услуга 4</li>
                                                <li class="form__select__sub__option js--select-option" data-value="4">Услуга 5</li>
                                                <li class="form__select__sub__option js--select-option" data-value="5">Услуга 6</li>
                                                <li class="form__select__sub__option js--select-option" data-value="6">Услуга 7</li>
                                                <li class="form__select__sub__option js--select-option" data-value="7">Услуга 8</li>
                                                <li class="form__select__sub__option js--select-option" data-value="8">Услуга 9</li>
                                                <li class="form__select__sub__option js--select-option" data-value="9">Услуга 10</li>
                                                <li class="form__select__sub__option js--select-option" data-value="10">Услуга 11</li>
                                                <li class="form__select__sub__option js--select-option" data-value="11">Услуга 12</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form__textarea form__textarea__h38 js--form-label">
                                    <textarea class="form__textarea__text js--form-textarea" name="#"></textarea>
                                    <span class="form__textarea__label">Ваш комментарий</span>
                                    <i class="form__textarea__icon valid">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
                                            <path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
                                        </svg>
                                    </i>
                                    <i class="form__textarea__icon error">
                                        <svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
                                            <path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <div class="col-12">
                                <div class="form__line2 row align-items-center">
                                    <div class="col-12">
                                        <button class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100" type="submit">
                                            Отправить заявку
                                        </button>
                                    </div>
                                    <div class="col-12">
                                        <div class="form__info form__info__size2">Нажимая на кнопку Вы соглашаетесь с&nbsp;<a href="#">политикой конфиденциальности</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script>
    // Получаем уникальную секцию по её ID
    const section = document.getElementById('<?=$randId?>');
    // Находим форму внутри этой секции
    const form = section.querySelector("form[name='<?=$arResult["arForm"]["SID"]?>']");

    // Назначаем обработчик отправки
    form.addEventListener("submit", function(e) {
        e.preventDefault();
        let isValid = true;

        // Очистка предыдущих ошибок только внутри этой формы
        form.querySelectorAll(".form__input").forEach(field => {
            field.classList.remove("valid", "error");
            const errorInfo = field.closest(".col-12")?.querySelector(".form__input__info");
            if (errorInfo) errorInfo.remove();
        });

        // Валидация только тех input, которые находятся внутри этой формы
        form.querySelectorAll(".form__input__text").forEach(input => {
            const parentLabel = input.closest(".form__input");
            const isTextarea = input.tagName.toLowerCase() === 'textarea';
            const isPhone = input.classList.contains("js--maskphone");

            // Пропуск textarea
            if (isTextarea) return;

            const value = input.value.trim();

            if (!value) {
                parentLabel.classList.add("error");
                showErrorMessage(parentLabel, "Поле не может быть пустым");
                isValid = false;
            } else if (isPhone) {
                const phoneRegex = /^\+?[0-9\s\-()]{10,}$/;
                if (!phoneRegex.test(value)) {
                    parentLabel.classList.add("error");
                    showErrorMessage(parentLabel, "Введите корректный номер телефона");
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
                    form.querySelectorAll(".form__input").forEach(field => {
                        field.classList.remove("valid", "error");
                    });
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

    // Функция для отображения сообщения об ошибке под полем
    function showErrorMessage(container, message) {
        const errorDiv = document.createElement("div");
        errorDiv.className = "form__input__info error";
        errorDiv.textContent = message;
        container.closest(".col-12").appendChild(errorDiv);
    }
</script>