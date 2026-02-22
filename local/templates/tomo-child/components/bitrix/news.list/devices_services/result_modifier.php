<?php 

$section_filter = $arParams["FILTER_SECTION"];

if ($section_filter) {
	foreach ($arResult["ITEMS"] as $key => $value) {
		if ($value["PROPERTIES"]["SECTION"]["VALUE"] != $section_filter){
			unset($arResult["ITEMS"][$key]);
		}
	}

	$arResult["ITEMS"] = array_values($arResult["ITEMS"]);
}