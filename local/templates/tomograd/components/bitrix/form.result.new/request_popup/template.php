<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
    die();
}

/**
 * @var array $arResult
 * форма настроена на работу через текстовые поля
 */
?>

<div class='modal modal__small' id='js--modal-feedback'>
    <div class='modal__content'>
        
        <?if ($arResult["isFormErrors"] == "Y"):?>
        <div class="form-errors"><?=$arResult["FORM_ERRORS_TEXT"];?></div>
        <?endif;?>

        <?= $arResult["FORM_NOTE"] ?? '' ?>

        <?if ($arResult["isFormNote"] != "Y"):?>

        <?=$arResult["FORM_HEADER"]?>

        <div class='modal__info'>
            <?if ($arResult["isFormTitle"]):?>
            <h2 class='h2'><?=$arResult["FORM_TITLE"]?></h2>
            <?endif;?>

            <form class='form' name='<?=$arResult["arForm"]["SID"]?>' action='#'>
                <input type="hidden" value="<?=$arResult["arForm"]["SID"]?>" name="formSID">
                <div class='form__line row'>
                    <?
                    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
                    {
                        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden')
                        {
                            echo $arQuestion["HTML_CODE"];
                            continue;
                        }

                        $fieldClass = "col-12";
                        $isError = isset($arResult["FORM_ERRORS"][$FIELD_SID]);
                        $errorClass = $isError ? " error" : "";

                        switch ($arQuestion['STRUCTURE'][0]['FIELD_TYPE']) {
                            case 'text':
                            case 'email':
                            ?>
                            <div class='<?=$fieldClass?>'>
                                <label class='form__input form__input__h38 js--form-label<?=$errorClass?>'>
                                    <?if ($arQuestion["CAPTION"] == 'Мобильный телефон'):?>
                                        <input class='form__input__text js--form-input js--maskphone' 
                                               type='tel'
                                               name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>"/>
                                    <?else:?>
                                        <input class='form__input__text js--form-input' 
                                               type='<?=($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'email' ? 'email' : 'text')?>'
                                               name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>"/>
                                    <?endif;?>
                                    <span class='form__input__label'>
                                        <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?>*<?endif;?>
                                    </span>
                                    
                                    <i class='form__input__icon valid'>
                                        <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                            <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#0CC44D'/>
                                            <path d='M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183' stroke='white' stroke-width='1.38242'/>
                                        </svg>
                                    </i>
                                    <i class='form__input__icon error'>
                                        <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                            <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#E30016'/>
                                            <path d='M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z' fill='white'/>
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <?
                            break;

                            case 'textarea':
                            ?>
                            <div class='<?=$fieldClass?>'>
                                <label class='form__input form__input__h38 js--form-label<?=$errorClass?>'>
                                    <textarea class='form__textarea__text js--form-textarea' 
                                              name="form_text_<?=$arQuestion["STRUCTURE"][0]["ID"]?>"></textarea>
                                    <span class='form__textarea__label'>
                                        <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?>*<?endif;?>
                                    </span>
                                    
                                    <i class='form__input__icon valid'>
                                        <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                            <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#0CC44D'/>
                                            <path d='M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183' stroke='white' stroke-width='1.38242'/>
                                        </svg>
                                    </i>
                                    <i class='form__input__icon error'>
                                        <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                            <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#E30016'/>
                                            <path d='M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z' fill='white'/>
                                        </svg>
                                    </i>
                                </label>
                            </div>
                            <?
                            break;

                            default:
                                // Для других типов полей используем стандартный вывод
                            ?>
                            <div class='<?=$fieldClass?>'>
                                <?if ($isError):?>
                                <span class="error-fld" title="<?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>"></span>
                                <?endif;?>
                                <label>
                                    <?=$arQuestion["CAPTION"]?><?if ($arQuestion["REQUIRED"] == "Y"):?>*<?endif;?>
                                </label>
                                <?=$arQuestion["HTML_CODE"]?>
                            </div>
                            <?
                            break;
                        }
                    }
                    ?>
                    
                    <?if($arResult["isUseCaptcha"] == "Y"):?>
                    <div class='col-12'>
                        <div class='captcha-section'>
                            <input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" width="180" height="40" alt=""/>
                        </div>
                    </div>
                    <div class='col-12'>
                        <label class='form__input form__input__h38 js--form-label'>
                            <input class='form__input__text js--form-input' type="text" name="captcha_word" size="30" maxlength="50" value="" />
                            <span class='form__input__label'>Введите код с картинки*</span>
                            <i class='form__input__icon valid'>
                                <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#0CC44D'/>
                                    <path d='M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183' stroke='white' stroke-width='1.38242'/>
                                </svg>
                            </i>
                            <i class='form__input__icon error'>
                                <svg width='13' height='14' viewBox='0 0 13 14' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                    <rect x='0.246826' y='0.974609' width='12.4418' height='12.4418' rx='6.2209' fill='#E30016'/>
                                    <path d='M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z' fill='white'/>
                                </svg>
                            </i>
                        </label>
                    </div>
                    <?endif;?>

					<div class='col-12'>
						<div class='form__confirm'>
							<label for="ccheck-modal2" class="form__confirm__check text-left">
								<input type="checkbox" id="ccheck-modal2" class="form__confirm__check__input" required>
								<span class="form__confirm__check__text">Отправляя заявку, я&nbsp;даю согласие на&nbsp;обработку <a href="/privacy" target="_blank">персональных данных</a> и&nbsp;принимаю условия <a href="/policy" target="_blank">политики конфиденциальности</a></span>
							</label> 
						</div>
					</div>
                    
                    <div class='col-12'>

                        <div class='form__line2 row align-items-center'>
                            <div class='col-12'>
                                <button class='mbtn mbtn__full mbtn__red mbtn__default d-block w-100 js--submit-btn' 
                                type='submit'>
                                <?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? "Отправить" : $arResult["arForm"]["BUTTON"]);?>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    <?=$arResult["FORM_FOOTER"]?>

    <?endif;?>
    </div>
</div>

<script>
    // Находим форму внутри модального окна обратной связи
    const feedbackForm = document.querySelector('#js--modal-feedback form[name="<?=$arResult["arForm"]["SID"]?>"]');

    if (feedbackForm) {
        // Назначаем обработчик отправки
        feedbackForm.addEventListener("submit", function(e) {
            e.preventDefault();
            let isValid = true;

            // Очистка предыдущих ошибок только внутри этой формы
            feedbackForm.querySelectorAll(".form__input").forEach(field => {
                field.classList.remove("valid", "error");
                const errorInfo = field.closest(".col-12")?.querySelector(".form__input__info");
                if (errorInfo) errorInfo.remove();
            });

            // Валидация только тех input, которые находятся внутри этой формы
            feedbackForm.querySelectorAll(".form__input__text, .form__textarea__text").forEach(input => {
                const parentLabel = input.closest(".form__input");
                const isTextarea = input.tagName.toLowerCase() === 'textarea';
                const isPhone = input.classList.contains("js--maskphone");

                const value = input.value.trim();

                if (!value) {
                    parentLabel.classList.add("error");
                    showErrorMessage(parentLabel, "Поле не может быть пустым");
                    isValid = false;
                } else if (isPhone && !isTextarea) {
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
                const formData = new FormData(feedbackForm);
                // Добавляем идентификатор формы
                formData.append('WEB_FORM_ID', '<?=$arResult["arForm"]["ID"]?>');
                
                fetch('/local/ajax/form_handler.php', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
						// alert('Форма успешно отправлена!');
                        feedbackForm.reset();
                        feedbackForm.querySelectorAll(".form__input").forEach(field => {
                            field.classList.remove("valid", "error");
                        });
						feedbackForm.querySelectorAll(".js--form-label").forEach(label => {
							label.classList.remove("active");
						});
                        // Закрываем модальное окно после успешной отправки (если нужно)
						Fancybox.close();
						// Открываем модальное окно "Спасибо"
                        Fancybox.show([{ 
							src: "#js--modal-thanks", 
							type: "inline" 
						}]);
                    } else {
						// alert('Ошибка: ' + (data.message || 'Неизвестная ошибка'));
						console.error('Ошибка отправки формы:', data.message || 'Неизвестная ошибка');
						feedbackForm.reset();
						feedbackForm.querySelectorAll(".form__input").forEach(field => {
							field.classList.remove("valid", "error");
						});
						feedbackForm.querySelectorAll(".js--form-label").forEach(label => {
							label.classList.remove("active");
						});
						// Закрываем модальное окно после успешной отправки (если нужно)
						Fancybox.close();
						// Открываем модальное окно "Ошибка"
						Fancybox.show([{ 
							src: "#js--modal-error", 
							type: "inline" 
						}]);
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    // alert('Произошла ошибка при отправке формы.');
					feedbackForm.reset();
					feedbackForm.querySelectorAll(".form__input").forEach(field => {
						field.classList.remove("valid", "error");
					});
					feedbackForm.querySelectorAll(".js--form-label").forEach(label => {
						label.classList.remove("active");
					});
					// Закрываем модальное окно после успешной отправки (если нужно)
					Fancybox.close();
					// Открываем модальное окно "Ошибка"
					Fancybox.show([{ 
						src: "#js--modal-error", 
						type: "inline" 
					}]);
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
    }
</script>