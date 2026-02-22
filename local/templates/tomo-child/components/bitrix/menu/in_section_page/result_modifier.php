<?php 

// ID инфоблоков для меню
$iblockIds = $arParams["SECTION"]; // Замените на реальные ID ваших инфоблоков

// Получаем структуру меню
$arResult["ITEMS"] = getMultiLevelMenuStructure($iblockIds);
