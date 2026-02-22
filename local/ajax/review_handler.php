<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (!check_bitrix_sessid()) {
    echo json_encode(['status' => 'error', 'message' => 'Ошибка сессии']);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST' || !isset($_POST['action']) || $_POST['action'] !== 'add_review') {
    echo json_encode(['status' => 'error', 'message' => 'Некорректный запрос']);
    exit();
}

// Получаем данные из формы
$name = trim($_POST['name'] ?? '');
$phone = trim($_POST['phone'] ?? '');
$email = trim($_POST['email'] ?? '');
$reviewType = trim($_POST['review_type'] ?? '0');
$doctorName = trim($_POST['doctor_name'] ?? '');
$doctorId = trim($_POST['doctor_id'] ?? '');
$rating = trim($_POST['rating'] ?? '0');
$reviewText = trim($_POST['review_text'] ?? '');

// Валидация
if (empty($reviewText)) {
    echo json_encode(['status' => 'error', 'message' => 'Заполните обязательные поля']);
    exit();
}

// Подготовка данных для элемента инфоблока
$elementFields = [
    'IBLOCK_ID' => 11,
    'NAME' => $reviewType === '0' && !empty($doctorName) ? $doctorName : 'О клинике',
    'ACTIVE' => 'N', // Ставим на модерацию
    'PREVIEW_TEXT' => '',
    'DETAIL_TEXT' => $reviewText,
    'DETAIL_TEXT_TYPE' => 'html',
    'CODE' => CUtil::translit($name . '-' . time(), 'ru'),
    'XML_ID' => uniqid('review_', true),
    'PROPERTY_VALUES' => [
        'RATE' => $rating,
        'SOURCE_LINK' => '#',
        'ABOUT' => $reviewType === '0' ? 12 : 13, // 12 - о враче, 13 - о клинике
        'LINKED_ITEM' => $reviewType === '0' && !empty($doctorId) ? $doctorId : '',
        'AUTHOR_NAME' => $name,
        'AUTHOR_PHONE' => $phone,
        'AUTHOR_EMAIL' => $email,
    ]
];

// Добавление элемента
$iblockElement = new CIBlockElement();
$elementId = $iblockElement->Add($elementFields);

if ($elementId) {
    // Успешное добавление
    echo json_encode([
        'status' => 'success',
        'message' => 'Отзыв добавлен',
        'element_id' => $elementId
    ]);
} else {
    // Ошибка
    echo json_encode([
        'status' => 'error',
        'message' => $iblockElement->LAST_ERROR
    ]);
}

require_once($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/epilog_after.php');
?>