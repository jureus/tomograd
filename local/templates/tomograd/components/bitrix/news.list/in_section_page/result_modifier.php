<?php 

// ID инфоблоков для меню
$iblockIds = [$arParams["IBLOCK_ID"]]; 

// Получаем структуру меню
$arResult["ITEMS"] = getMultiLevelMenuStructure($iblockIds);
