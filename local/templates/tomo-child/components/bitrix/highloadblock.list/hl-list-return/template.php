<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)
{
	die();
}

/** @global CMain $APPLICATION */
/** @var array $arParams */
/** @var array $arResult */


if (!empty($arResult['ERROR']))
{
	echo $arResult['ERROR'];
	return false;
}

return $arResult;

?>