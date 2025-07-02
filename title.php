<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');
$APPLICATION->SetTitle("");?><?$APPLICATION->IncludeComponent(
	"bitrix:search.title", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"NUM_CATEGORIES" => "5",
		"TOP_COUNT" => "5",
		"ORDER" => "date",
		"USE_LANGUAGE_GUESS" => "N",
		"CHECK_DATES" => "Y",
		"SHOW_OTHERS" => "N",
		"PAGE" => "#SITE_DIR#search/index.php",
		"SHOW_INPUT" => "Y",
		"INPUT_ID" => "title-search-input",
		"CONTAINER_ID" => "title-search",
		"CATEGORY_0_TITLE" => "Услуги",
		"CATEGORY_0" => array(
			0 => "iblock_services",
		),
		"CATEGORY_0_iblock_services" => array(
			0 => "all",
		),
		"CATEGORY_1_TITLE" => "Врачи и персонал",
		"CATEGORY_1" => array(
			0 => "iblock_doctors",
		),
		"CATEGORY_1_iblock_doctors" => array(
			0 => "all",
		),
		"CATEGORY_2_TITLE" => "Статьи и новости",
		"CATEGORY_2" => array(
			0 => "iblock_about",
		),
		"CATEGORY_2_iblock_about" => array(
			0 => "10",
		),
		"CATEGORY_3_TITLE" => "",
		"CATEGORY_3" => array(
		),
		"CATEGORY_4_TITLE" => "",
		"CATEGORY_4" => array(
		)
	),
	false
);?><br><?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>