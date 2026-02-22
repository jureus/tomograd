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

<div class="ch-services__search">
    <?php if ($arParams['SHOW_INPUT'] !== 'N'): ?>
    <form action="<?php echo $arResult['FORM_ACTION']?>">
        <div class="row">
            <div class="col-12 col-md">
                <div class="ch-services__search__body">
                    <input 
                        id="<?php echo $INPUT_ID?>" 
                        class="ch-services__search__input js-ps-input" 
                        type="text" 
                        name="q" 
                        value="" 
                        placeholder="Введите название услуги" 
                        autocomplete="off" 
                    />
                    <button class="ch-services__search__clear js-ps-clear" type="button">
                        <svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-delete"></use></svg>
                    </button>
                </div>
            </div>
            <div class="col-12 col-md-auto">
                <button class="ch-services__search__btn" type="submit">
                    <span>
                        <span><?=GetMessage('CT_BST_SEARCH_BUTTON')?></span>
                        <i>
                            <svg width="22" height="16" viewBox="0 0 22 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.7071 8.70711C22.0976 8.31658 22.0976 7.68342 21.7071 7.2929L15.3431 0.928934C14.9526 0.538409 14.3195 0.538409 13.9289 0.928933C13.5384 1.31946 13.5384 1.95262 13.9289 2.34315L19.5858 8L13.9289 13.6569C13.5384 14.0474 13.5384 14.6805 13.9289 15.0711C14.3195 15.4616 14.9526 15.4616 15.3431 15.0711L21.7071 8.70711ZM0 8L-8.74227e-08 9L21 9L21 8L21 7L8.74227e-08 7L0 8Z" fill="currentColor" />
                            </svg>
                        </i>
                    </span>
                </button>
            </div>
        </div>
        <input type="hidden" name="s" value="<?=GetMessage('CT_BST_SEARCH_BUTTON');?>" />
    </form>
    <?php endif; ?>
</div>

<script>
    BX.ready(function(){
        new JCTitleSearch({
            'AJAX_PAGE': '<?php echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?php echo $CONTAINER_ID?>',
            'INPUT_ID': '<?php echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2
        });
        
        // Обработчик кнопки очистки
        document.querySelector('.js-ps-clear')?.addEventListener('click', function() {
            document.getElementById('<?php echo $INPUT_ID?>').value = '';
        });
    });
</script>