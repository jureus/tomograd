<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

$INPUT_ID = trim($arParams['~INPUT_ID']);
if ($INPUT_ID == '') {
    $INPUT_ID = 'title-search-input';
}
$INPUT_ID = CUtil::JSEscape($INPUT_ID);

$CONTAINER_ID = trim($arParams['~CONTAINER_ID']);
if ($CONTAINER_ID == '') {
    $CONTAINER_ID = 'title-search';
}
$CONTAINER_ID = CUtil::JSEscape($CONTAINER_ID);
?>

<div class="ch-header__top__item">
    <div class="ch-header__search">
        <?php if ($arParams['SHOW_INPUT'] !== 'N'): ?>
        <form action="<?php echo $arResult['FORM_ACTION']?>">
            <input 
                id="<?php echo $INPUT_ID?>" 
                class="ch-header__search__input" 
                type="text" 
                name="q" 
                value="" 
                placeholder="Введите название услуги" 
                autocomplete="off" 
            />
            <input type="hidden" name="s" value="<?=GetMessage('CT_BST_SEARCH_BUTTON');?>" />
        </form>
        <?php endif; ?>
    </div>
</div>

<script>
    BX.ready(function(){
        new JCTitleSearch({
            'AJAX_PAGE': '<?php echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?php echo $CONTAINER_ID?>',
            'INPUT_ID': '<?php echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2
        });
    });
</script>