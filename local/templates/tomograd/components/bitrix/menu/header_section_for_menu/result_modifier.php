<?php 

// ID инфоблоков для меню
$iblockIds = [6,7,8,15,30,32,33,34]; // Замените на реальные ID ваших инфоблоков

// Получаем структуру меню
$arResult["ITEMS"] = getMultiLevelMenuStructure($iblockIds);