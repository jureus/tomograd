<?php 

// Получаем текущий URL страницы
$currentUrl = $_SERVER['REQUEST_URI'];

$iblockIds = [6,7,8,15,30,32,33,34]; 
$services_id = [6];
$services = getMultiLevelMenuStructure($services_id)[0];
$diagnostic_id = [7];
$diagnostic = getMultiLevelMenuStructure($diagnostic_id)[0];
$symptoms_id = [32];
$symptoms = getMultiLevelMenuStructure($symptoms_id)[0];

//набираем меню вручную так как оно не соответствует структуре сайта 
$arResult = [
    "ITEMS" => [
        [
            "LINK" => "/about",
            "NAME" => "О клинике",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-lg-block js--hmenu-link-item",
            "CHILDRENS" => [
                ["NAME" => "О нас", "LINK" => "/about", "ACTIVE" => isActive("/about", $currentUrl)],
                ["NAME" => "Новости", "LINK" => "/news", "ACTIVE" => isActive("/news", $currentUrl)],
                ["NAME" => "Отзывы", "LINK" => "/reviews", "ACTIVE" => isActive("/reviews", $currentUrl)],
                ["NAME" => "Лицензии", "LINK" => "/licenses", "ACTIVE" => isActive("/licenses", $currentUrl)],
                ["NAME" => "Вакансии", "LINK" => "/vacancies", "ACTIVE" => isActive("/vacancies", $currentUrl)],
                ["NAME" => "Контакты", "LINK" => "/contacts", "ACTIVE" => isActive("/contacts", $currentUrl)],
            ],
            "ACTIVE" => isActive("/about", $currentUrl),
        ],
        [
            "LINK" => "/services",
            "NAME" => "Направления",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-lg-block",
            "CHILDRENS" => $services["ITEMS"], 
            "DATA_LINK" => 1,
            "ACTIVE" => isActive("/services", $currentUrl)
        ],
        [
            "LINK" => "/diagnostic",
            "NAME" => "Диагностика",
            "IS_PARENT" => "Y",
            "SIZE" => "",
            "CHILDRENS" => $diagnostic["ITEMS"],
            "ACTIVE" => isActive("/diagnostic", $currentUrl)
        ],
        [
            "LINK" => "/symptoms",
            "NAME" => "Поиск по симптомам",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-xl-block",
            "CHILDRENS" => $symptoms["ITEMS"],
            "ACTIVE" => isActive("/symptoms", $currentUrl)
        ],
        [
            "LINK" => "/reabilitation",
            "NAME" => "Восстановительное лечение",
            "IS_PARENT" => "N",
            "SIZE" => "",
            "CHILDRENS" => [],
            "ACTIVE" => isActive("/reabilitation", $currentUrl)
        ],
    ]
];