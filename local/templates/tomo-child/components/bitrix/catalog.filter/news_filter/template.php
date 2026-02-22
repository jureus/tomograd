<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

\Bitrix\Main\UI\Extension::load('ui.fonts.opensans');
?>
<div class="pageblog__sort">
    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
        <?foreach($arResult["ITEMS"] as $arItem):?>
            <?if($arItem["TYPE"] == "SELECT"): ?>
                <div class="filter__select js--select">
                    <div class="filter__select__label js--select-label">
                        <span class="filter__select__label__text js--select-text">
                            <?=($arItem["INPUT_VALUE"] ? htmlspecialcharsEx($arItem["LIST"][$arItem["INPUT_VALUE"]]) : "Выбрать направление")?>
                        </span>
                        <i class="filter__select__label__icon">
                            <svg>
                                <use xlink:href="img/icons.svg#ic-f-arrow-down"></use>
                            </svg>
                        </i>
                    </div>
                    <div class="filter__select__popup">
                        <div class="filter__select__popup__body js--styled-scroll">
                            <ul class="filter__select__sub">
                                <?foreach ($arItem["LIST"] as $key => $value):?>
                                    <li class="filter__select__sub__option js--select-option <?if ($key == $arItem["INPUT_VALUE"]) echo 'active'?>" 
                                        data-value="<?=htmlspecialcharsBx($key)?>">
                                        <? 	if ($value == "(все)") $value="Выбрать направление";
                                        	echo htmlspecialcharsEx($value);
                                        ?>
                                    </li>
                                <?endforeach?>
                            </ul>
                        </div>
                    </div>
                    <select name="<?=$arItem["INPUT_NAME"].($arItem["MULTIPLE"] == "Y" ? "[]" : "")?>" class="js--select-hidden" style="display:none;">
                        <?foreach ($arItem["LIST"] as $key => $value):?>
                            <option value="<?=htmlspecialcharsBx($key)?>" <?if ($key == $arItem["INPUT_VALUE"]) echo 'selected="selected"'?>>
                                <?=htmlspecialcharsEx($value)?>
                            </option>
                        <?endforeach?>
                    </select>
                </div>
            <?endif?>
        <?endforeach?>
        <input type="hidden" name="set_filter" value="Y" />
    </form>
</div>

<script>
	document.querySelectorAll('.js--select').forEach(select => {
    const label = select.querySelector('.js--select-label');
    const text = select.querySelector('.js--select-text');
    const options = select.querySelectorAll('.js--select-option');
    const hiddenSelect = select.querySelector('.js--select-hidden');
    
    label.addEventListener('click', () => {
        select.classList.toggle('open');
    });
    
    options.forEach(option => {
        option.addEventListener('click', () => {
            const value = option.dataset.value;
            const displayText = option.textContent;
            
            // Update selected option
            options.forEach(opt => opt.classList.remove('active'));
            option.classList.add('active');
            
            // Update label text
            text.textContent = displayText;
            
            // Update hidden select
            hiddenSelect.value = value;
            
            // Close dropdown
            select.classList.remove('open');
            
            // Submit form
            hiddenSelect.form.submit();
        });
    });
    
    // Close when clicking outside
    document.addEventListener('click', (e) => {
        if (!select.contains(e.target)) {
            select.classList.remove('open');
        }
    });
});
</script>



