<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="ch-header__modalsearch">
    <button class="ch-header__modalsearch__btn js--searchbtn" type="button">
        <svg>
            <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-loop"></use>
        </svg>
    </button>
    
    <div class="ch-header__modalsearch__body js--search-popup">
        <div class="ch-header__modalsearch__body__content">
            <form action="<?=$arResult["FORM_ACTION"]?>">
                <input 
                    class="ch-header__modalsearch__input" 
                    type="text" 
                    name="q" 
                    placeholder="Введите название услуги" 
                    autocomplete="off"
                />
                <button class="js--searchbtn-close ch-header__modalsearch__close" type="button">
                    <svg>
                        <use xlink:href="<?=SITE_TEMPLATE_PATH?>/img/icons.svg#ic-delete"></use>
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Обработчики для открытия/закрытия поиска
    const searchBtn = document.querySelector('.js--searchbtn');
    const searchPopup = document.querySelector('.js--search-popup');
    const searchClose = document.querySelector('.js--searchbtn-close');
    
    if(searchBtn && searchPopup && searchClose) {
        searchBtn.addEventListener('click', function() {
            searchPopup.classList.add('active');
            document.querySelector('.ch-header__modalsearch__input').focus();
        });
        
        searchClose.addEventListener('click', function() {
            searchPopup.classList.remove('active');
        });
    }
});
</script>