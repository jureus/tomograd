<?php 

// Получаем текущий URL страницы
$currentUrl = $_SERVER['REQUEST_URI'];

// Функция для проверки активного пункта меню
function isActive($menuLink, $currentUrl) {
    // Убираем параметры запроса для сравнения
    $menuLink = strtok($menuLink, '?');
    $currentUrl = strtok($currentUrl, '?');
    
    return $menuLink === $currentUrl || 
           ($menuLink !== '#' && strpos($currentUrl, $menuLink) === 0);
}

//набираем меню вручную так как оно не соответствует структуре сайта 
$arResult = [
    "ITEMS" => [
        [
            "LINK" => "/about",
            "NAME" => "О клинике",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-lg-block js--hmenu-link-item",
            "CHILDRENS" => [
                ["NAME" => "О клинике", "LINK" => "/about", "ACTIVE" => isActive("/about", $currentUrl)],
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
            "NAME" => "Услуги",
            "IS_PARENT" => "Y",
            "SIZE" => "",
            "CHILDRENS" => [], //дети строятся отдельно, указатель нужен что бы вывести значок списка
            "DATA_LINK" => 0,
            "ACTIVE" => isActive("/services", $currentUrl)
        ],
        [
            "LINK" => "/diagnostic",
            "NAME" => "Диагностика",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-lg-block",
            "CHILDRENS" => [], //дети строятся отдельно, указатель нужен что бы вывести значок списка
            "DATA_LINK" => 1,
            "ACTIVE" => isActive("/diagnostic", $currentUrl)
        ],
        [
            "LINK" => "/doctors",
            "NAME" => "Врачи",
            "IS_PARENT" => "N",
            "SIZE" => "",
            "CHILDRENS" => [],
            "ACTIVE" => isActive("/doctors", $currentUrl)
        ],
        [
            "LINK" => "/analyze",
            "NAME" => "Анализы",
            "IS_PARENT" => "N",
            "SIZE" => "d-none d-xl-block",
            "CHILDRENS" => [],
            "ACTIVE" => isActive("/analyze", $currentUrl)
        ],
        [
            "LINK" => "/prices",
            "NAME" => "Цены",
            "IS_PARENT" => "N",
            "SIZE" => "",
            "CHILDRENS" => [],
            "ACTIVE" => isActive("/prices", $currentUrl)
        ],
        [
            "LINK" => "/actions",
            "NAME" => "Акции и предложения",
            "IS_PARENT" => "N",
            "SIZE" => "d-none d-xl-block",
            "CHILDRENS" => [],
            "ACTIVE" => isActive("/actions", $currentUrl)
        ],
        [
            "LINK" => "#",
            "NAME" => "Ещё",
            "IS_PARENT" => "Y",
            "SIZE" => "d-none d-lg-block d-xl-none",
            "CHILDRENS" => [
                ["NAME" => "Анализы", "LINK" => "/analyze", "ACTIVE" => isActive("/analyze", $currentUrl)],
                ["NAME" => "Акции и предложения", "LINK" => "/actions", "ACTIVE" => isActive("/actions", $currentUrl)],
            ],
            "ACTIVE" => isActive("/analyze", $currentUrl) || isActive("/actions", $currentUrl),
        ],
    ]
];