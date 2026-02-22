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
?>
<div class="pageactions__sort">
    <form name="<?echo $arResult["FILTER_NAME"]."_form"?>" action="<?echo $arResult["FORM_ACTION"]?>" method="get">
        <?foreach($arResult["ITEMS"] as $arItem):
            if(array_key_exists("HIDDEN", $arItem)):
                echo $arItem["INPUT"];
            endif;
        endforeach;?>
        
        <!-- Desktop version -->
        <div class="d-none d-md-block">
            <div class="pageactions__sort__nav">
                <?foreach($arResult["ITEMS"] as $arItem):?>
                    <?if(!array_key_exists("HIDDEN", $arItem) && $arItem["TYPE"] == "SELECT"):?>
                        <?foreach($arItem["LIST"] as $key => $value):?>
                            <div class="pageactions__sort__nav__item">
                                <a class="pageactions__sort__link <?=($key == $arItem["INPUT_VALUE"] ? 'active' : '')?>" 
                                   href="#" 
                                   data-name="<?=$arItem["INPUT_NAME"]?>" 
                                   data-value="<?=htmlspecialcharsBx($key)?>">
                                    <?=htmlspecialcharsEx($value)?>
                                </a>
                            </div>
                        <?endforeach;?>
                    <?endif;?>
                <?endforeach;?>
            </div>
        </div>
        
        <!-- Mobile version -->
        <div class="d-md-none">
            <?foreach($arResult["ITEMS"] as $arItem):?>
                <?if(!array_key_exists("HIDDEN", $arItem) && $arItem["TYPE"] == "RADIO"):?>
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
                                        <li class="filter__select__sub__option js--select-option <?=($key == $arItem["INPUT_VALUE"] ? 'active' : '')?>" 
                                            data-name="<?=$arItem["INPUT_NAME"]?>" 
                                            data-value="<?=htmlspecialcharsBx($key)?>">
                                            <?=htmlspecialcharsEx($value)?>
                                        </li>
                                    <?endforeach?>
                                </ul>
                            </div>
                        </div>
                        <input type="hidden" name="<?=$arItem["INPUT_NAME"]?>" value="<?=$arItem["INPUT_VALUE"]?>">
                    </div>
                <?endif;?>
            <?endforeach;?>
        </div>
        
        <input type="hidden" name="set_filter" value="Y" />
    </form>
</div>

<script>
// For desktop version
document.querySelectorAll('.pageactions__sort__link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        
        // Remove active class from all links
        document.querySelectorAll('.pageactions__sort__link').forEach(el => {
            el.classList.remove('active');
        });
        
        // Add active class to clicked link
        this.classList.add('active');
        
        // Update form and submit
        const form = this.closest('form');
        const inputName = this.dataset.name;
        const inputValue = this.dataset.value;
        
        // Create or update hidden input
        let input = form.querySelector(`input[name="${inputName}"]`);
        if (!input) {
            input = document.createElement('input');
            input.type = 'hidden';
            input.name = inputName;
            form.appendChild(input);
        }
        input.value = inputValue;
        
        form.submit();
    });
});

// For mobile version (same as in previous example)
document.querySelectorAll('.js--select').forEach(select => {
    const label = select.querySelector('.js--select-label');
    const text = select.querySelector('.js--select-text');
    const options = select.querySelectorAll('.js--select-option');
    const hiddenInput = select.querySelector('input[type="hidden"]');
    
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
            
            // Update hidden input
            hiddenInput.value = value;
            
            // Close dropdown
            select.classList.remove('open');
            
            // Submit form
            hiddenInput.form.submit();
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
