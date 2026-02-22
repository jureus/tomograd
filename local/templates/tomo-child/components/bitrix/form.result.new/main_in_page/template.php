<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}
//нужен для обработки если подключается несколько одинаковых форм 
$randId = 'form_'.rand(0,20000);

$description = "Оставьте свои данные и&nbsp;наш администратор свяжется с&nbsp;вами в&nbsp;ближайшее время";
if (isset($arParams["DESCRIPTION"])) $description = $arParams["DESCRIPTION"];

?>
<section class="block__padd block__overflow" id="<?=$randId?>">
	<div class="container">
		<div class="mainorder">
			<div class="mainorder__bg"></div>
			<div class="mainorder__content">
				<div class="mainorder__head">
					<h2 class="mainorder__head__title"><?=$arParams["TITLE"]?></h2>
					<div class="mainorder__head__text"><?=$description?></div>
				</div>
				<div class="mainorder__body">
					<?=$arResult["FORM_HEADER"]?>
					<input type="hidden" value="<?=$arResult["arForm"]["SID"]?>" name="formSID">
					<div class="form__line row">
						<? foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion){
						    if ($arQuestion["STRUCTURE"][0]["FIELD_TYPE"] == "textarea") {?>
						    	<div class="col-12">
					                <label class="form__textarea js--form-label">
					                    <textarea class="form__textarea__text js--form-textarea" 
					                    	name="form_textarea_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>"></textarea>
					                    <span class="form__textarea__label"><?=$arQuestion["CAPTION"]?></span>
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
						<? } else { ?>
							<div class="col-12">
                                <label class="form__input js--form-label">
                                	<? if ($arQuestion["STRUCTURE"][0]["FIELD_ID"] == 2) { ?>
                                		<input class="form__input__text js--form-input js--maskphone" type="tel" 
                                		name="form_text_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>" />
                                	<? } else {?>
                                		<input class="form__input__text js--form-input" type="text" 
                                		name="form_text_<?=$arQuestion["STRUCTURE"][0]["FIELD_ID"]?>" />
                                	<? }?>
                                    <span class="form__input__label"><?=$arQuestion["CAPTION"]?></span>
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
						<? } ?>
							
							
						<? }?>
						<div class="col-12">
					        <div class="form__line2 row align-items-center">
					            <div class="col-12 col-md-auto">
					            	<button class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100" type="submit">
						            	Отправить заявку
						            </button>
					            </div>
					            <div class="col-12 col-md">
					                <div class="form__info">Нажимая на кнопку Вы соглашаетесь с&nbsp;<a href="#">политикой конфиденциальности</a></div>
					            </div>
					        </div>
					    </div>
					</div>
				</div>
				<div class="mainorder__footer">
					<div class="mainorder__footer__label">Или позвоните на наш телефон</div>
					<div class="mainorder__footer__contacts">
						<a class="mainorder__footer__contacts__phone" href="tel:84951330777">8(495)133-07-77</a>
					</div>
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