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

<div class="header__search">
    <a class="mbtn mbtn__bordered mbtn__light mbtn__icon js--searchbtn" href="#">
        <svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use></svg>
    </a>
    
    <?php if ($arParams['SHOW_INPUT'] !== 'N'): ?>
    <div class="header__search__popup js--search-popup">
        <div class="header__search__popup__body">
            <form action="<?php echo $arResult['FORM_ACTION']?>">
                <div class="row header__search__popup__row">
                    <div class="col-auto">
                        <div class="header__search__popup__icon">
                            <svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use></svg>
                        </div>
                    </div>
                    <div class="col">
                        <input 
                            id="<?php echo $INPUT_ID?>" 
                            class="header__search__popup__input js--search-input" 
                            type="text" 
                            name="q" 
                            value="" 
                            placeholder="<?=GetMessage('CT_BST_SEARCH_PLACEHOLDER')?>" 
                            autocomplete="off" 
                        />
                    </div>
                    <div class="col-auto">
                        <div class="header__search__popup__close js--searchbtn-close">
                            <svg><use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#close"></use></svg>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="s" value="<?=GetMessage('CT_BST_SEARCH_BUTTON');?>" />
            </form>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="header__search__des js--search-rezult">
        <div class="header__search__des__container">
            <div class="header__search__des__body">
                <div class="header__search__des__default">
                    <div class="header__search__des__default__label"><?=GetMessage('CT_BST_POPULAR_QUERIES')?></div>
                    <ul class="header__search__des__default__list">
                        <?php foreach ($arResult['POPULAR_QUERIES'] as $query): ?>
                            <li><a href="<?=$query['URL']?>"><?=$query['NAME']?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="header__search__des__noresult" style="display: none;">
                    <?=GetMessage('CT_BST_NO_RESULTS', ['#QUERY#' => '<span class="js--search-query"></span>'])?>
                </div>
                <div class="header__search__des__result">
                    <div class="header__search__des__result__body js--styled-scroll">
                        <ul class="header__search__des__result__list js--search-results"></ul>
                    </div>
                </div>
            </div>
            <div class="header__search__des__footer">
                <div class="header__search__des__footer__close">
                    <button class="header__search__des__close" type="button"><?=GetMessage('CT_BST_CLOSE_SEARCH')?></button>
                </div>
                <div class="header__search__des__footer__rezult">
                    <a class="header__search__des__rezultlink js--all-results" href="#" style="display: none;">
                        <span><?=GetMessage('CT_BST_ALL_RESULTS')?></span>
                        <i class="js--results-count"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    BX.ready(function(){
        new JCTitleSearch({
            'AJAX_PAGE': '<?php echo CUtil::JSEscape(POST_FORM_ACTION_URI)?>',
            'CONTAINER_ID': '<?php echo $CONTAINER_ID?>',
            'INPUT_ID': '<?php echo $INPUT_ID?>',
            'MIN_QUERY_LEN': 2,
            'POPUP_CLASS': 'header__search__popup',
            'RESULTS_CLASS': 'header__search__des',
            'ACTIVE_CLASS': 'opened'
        });
    });
</script>