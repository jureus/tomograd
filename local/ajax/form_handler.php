<?php

use Bitrix\Main\Application;
use Bitrix\Main\Loader;
use Bitrix\Iblock;

define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$context = Application::getInstance()->getContext();
$request = $context->getRequest();

if (!$request->isPost() || !check_bitrix_sessid()) {
    echo json_encode(['success' => false, 'message' => 'Неверный запрос']);
    die();
}

// Подключаем модуль форм
if (!Loader::includeModule('form')) {
    echo json_encode(['success' => false, 'message' => 'Модуль форм не установлен']);
    die();
}

$formSid = $request["formSID"];

$arForm = \CForm::GetBySID($formSid)->Fetch(); // заменить YOUR_FORM_SID на SID вашей формы
if (!$arForm) {
    echo json_encode(['success' => false, 'message' => 'Форма не найдена']);
    die();
}

$formId = $arForm["ID"];

// Получаем все поля формы
$arFields = [];
foreach ($_POST as $key => $value) {
    if (strpos($key, "form_") === 0 && is_string($value)) {
        $arFields[$key] = htmlspecialcharsbx($value);
    }
}

// Добавляем результат
$res = CFormResult::Add($formId, $arFields);
if ($res) {
    echo json_encode(['success' => true, 'message' => 'Заявка успешно отправлена']);
} else {
    echo json_encode(['success' => false, 'message' => 'Ошибка добавления результата формы']);
}