<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php');?>
<section class="block__padd block__padd__pageinfidefirst block__padd__bglignt">
	<div class="container">
		<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "tomograd", Array(
            "PATH" => "/",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
            "SITE_ID" => "s1",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный)
            "START_FROM" => "0",    // Номер пункта, начиная с которого будет построена навигационная цепочка
        ),
		false
	);?>
	<h1 class="h1">Отзывы</h1>
	<div class="filter">
		<form class="form" action="#">
			<div class="form__line row align-items-center">
				<div class="col-12 col-md-auto order-2 order-md-1">
					<ul class="filter__sort">
						<li><button class="filter__sort__btn active" type="button">Все</button></li>
						<li><button class="filter__sort__btn" type="button">О клинике</button></li>
						<li><button class="filter__sort__btn" type="button">О врачах</button></li>
					</ul>
				</div>
				<div class="col-12 col-md-auto col-lg-5 order-1 order-md-2">
					<div class="filter__place"><input class="filter__place__input" type="text" placeholder="Введите ФИО врача" />
						<div class="filter__place__icon"><svg>
							<use xlink:href="img/icons.svg#ic-loop"></use>
						</svg></div>
					</div>
				</div>
				<div class="col-12 col-lg-auto order-3">
					<div class="filter__line"></div>
					<div class="form__line row align-items-center">
						<div class="col-12 col-md-auto col-lg-12">
							<a class="mbtn mbtn__full mbtn__red mbtn__default d-block w-100 js--linkto" href="#form-review">Оставить отзыв</a>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
</section>
<!-- отзывы-->
<section class="block__padd">
	<?$APPLICATION->IncludeComponent("bitrix:news.list", "reviews_list", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "",
			1 => "ID",
			2 => "CODE",
			3 => "XML_ID",
			4 => "NAME",
			5 => "TAGS",
			6 => "SORT",
			7 => "PREVIEW_TEXT",
			8 => "PREVIEW_PICTURE",
			9 => "DETAIL_TEXT",
			10 => "DETAIL_PICTURE",
			11 => "DATE_ACTIVE_FROM",
			12 => "ACTIVE_FROM",
			13 => "DATE_ACTIVE_TO",
			14 => "ACTIVE_TO",
			15 => "SHOW_COUNTER",
			16 => "SHOW_COUNTER_START",
			17 => "IBLOCK_TYPE_ID",
			18 => "IBLOCK_ID",
			19 => "IBLOCK_CODE",
			20 => "IBLOCK_NAME",
			21 => "IBLOCK_EXTERNAL_ID",
			22 => "DATE_CREATE",
			23 => "CREATED_BY",
			24 => "CREATED_USER_NAME",
			25 => "TIMESTAMP_X",
			26 => "MODIFIED_BY",
			27 => "USER_NAME",
			28 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "11",	// Код информационного блока
		"IBLOCK_TYPE" => "about",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "20",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "SOURCE_NAME",
			1 => "SOURCE_LINK",
			2 => "ABOUT",
			3 => "RATE",
			4 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "N",	// Устанавливать статус 404
		"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?>
</section><!-- /отзывы-->
<!-- оставьте свой отзыв-->
<section class="block__padd" id="form-review">
	<div class="container">
		<div class="sendreview">
			<div class="sendreview__bg"></div>
			<div class="sendreview__content">
				<div class="sendreview__head">
					<h2 class="sendreview__head__title">Оставьте свой отзыв</h2>
					<div class="sendreview__head__text">Поделитесь своими впечатлениями о&nbsp;сотрудничестве с&nbsp;нашей клиникой или нашими докторами</div>
				</div>
				<div class="sendreview__form">
					<form class="form" action="#">
						<div class="form__line row">
							<div class="col-12 col-md-6 col-lg-4"><label class="form__input js--form-label"><input class="form__input__text js--form-input" type="text" /><span class="form__input__label">Ваше имя</span><i class="form__input__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
								<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
								<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
							</svg>
						</i><i class="form__input__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
							<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
						</svg>
					</i></label></div>
					<div class="col-12 col-md-6 col-lg-4"><label class="form__input js--form-label"><input class="form__input__text js--form-input js--maskphone" type="tel" /><span class="form__input__label">Мобильный телефон</span><i class="form__input__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
						<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
					</svg>
				</i><i class="form__input__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
					<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
				</svg>
			</i></label></div>
			<div class="col-12 col-md-6 col-lg-4"><label class="form__input js--form-label"><input class="form__input__text js--form-input" type="mail" /><span class="form__input__label">Ваш email</span><i class="form__input__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
				<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
			</svg>
		</i><i class="form__input__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
			<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
		</svg>
	</i></label></div>
	<div class="col-12 col-md-6 col-lg-4">
		<div class="form__select js--select js--check-reviewgrooup">
			<div class="form__select__label js--select-label"><span class="form__select__label__des">О ком отзыв</span><span class="form__select__label__text js--select-text"></span><i class="form__select__label__icon"><svg>
				<use xlink:href="img/icons.svg#ic-f-arrow-down"></use>
			</svg></i></div>
			<div class="form__select__popup">
				<div class="form__select__popup__body js--styled-scroll">
					<ul class="form__select__sub">
						<li class="form__select__sub__option js--select-option active" data-value="0">Отзыв о враче</li>
						<li class="form__select__sub__option js--select-option" data-value="1">Отзыв о клинике</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12 col-lg-4" id="ftab_0">
		<div class="autocomplete js--autocomplete"><label class="form__input js--form-label"><input class="form__input__text js--form-input js--autocomplete-input" type="text" /><span class="form__input__label">ФИО врача</span><i class="form__input__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
			<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
		</svg>
	</i><i class="form__input__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
		<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
	</svg>
</i></label>
<div class="autocomplete__popup">
	<div class="autocomplete__body js--styled-scroll">
		<ul>
			<li class="js--autocomplete-list-item"><b>Ка</b>линиченко Андрей Геннадьевич<input type="hidden" value="Калиниченко Андрей Геннадьевич" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>ндратенко Иван Иванович<input type="hidden" value="Кандратенко Иван Иванович" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>сперский Петр Андреевич<input type="hidden" value="Касперский Петр Андреевич" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>тряшева Екатерина Федоровна<input type="hidden" value="Катряшева Екатерина Федоровна" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>линиченко Андрей Геннадьевич<input type="hidden" value="Калиниченко Андрей Геннадьевич" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>ндратенко Иван Иванович<input type="hidden" value="Кандратенко Иван Иванович" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>сперский Петр Андреевич<input type="hidden" value="Касперский Петр Андреевич" /></li>
			<li class="js--autocomplete-list-item"><b>Ка</b>тряшева Екатерина Федоровна<input type="hidden" value="Катряшева Екатерина Федоровна" /></li>
		</ul>
	</div>
</div>
</div>
</div>
<div class="col-12 col-lg-4 align-self-center">
	<div class="form__line2 row align-items-center">
		<div class="col-auto">
			<div class="form__info">Ваша оценка</div>
		</div>
		<div class="col-auto">
			<div class="full-stars">
				<div class="rating-group"><input type="radio" name="fst" value="0" disabled="disabled" checked="checked" /><label for="fst-1"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z" fill="currentColor" />
				</svg>
			</label><input id="fst-1" type="radio" name="fst" value="1" /><label for="fst-2"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z" fill="currentColor" />
			</svg>
		</label><input id="fst-2" type="radio" name="fst" value="2" /><label for="fst-3"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z" fill="currentColor" />
		</svg>
	</label><input id="fst-3" type="radio" name="fst" value="3" /><label for="fst-4"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z" fill="currentColor" />
	</svg>
</label><input id="fst-4" type="radio" name="fst" value="4" /><label for="fst-5"><svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M6.62885 0.545576C7.01136 -0.133069 7.98864 -0.13307 8.37115 0.545574L9.97321 3.3879C10.1159 3.64108 10.3617 3.81965 10.6466 3.87713L13.8448 4.52245C14.6085 4.67653 14.9105 5.60597 14.3833 6.17948L12.1751 8.58145C11.9784 8.7954 11.8845 9.08434 11.9179 9.37304L12.2925 12.6142C12.3819 13.3881 11.5913 13.9625 10.8829 13.6383L7.91616 12.2805C7.6519 12.1595 7.3481 12.1595 7.08384 12.2805L4.11707 13.6383C3.40871 13.9625 2.61808 13.3881 2.70752 12.6142L3.08211 9.37304C3.11547 9.08434 3.02159 8.7954 2.8249 8.58145L0.616749 6.17948C0.0895224 5.60598 0.391516 4.67653 1.15515 4.52245L4.35343 3.87713C4.63831 3.81965 4.88409 3.64108 5.02679 3.38791L6.62885 0.545576Z" fill="currentColor" />
</svg>
</label><input id="fst-5" type="radio" name="fst" value="5" /></div>
</div>
</div>
</div>
</div>
<div class="col-12"><label class="form__textarea js--form-label"><textarea class="form__textarea__text js--form-textarea" name="#"></textarea><span class="form__textarea__label">Ваш отзыв</span><i class="form__textarea__icon valid"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#0CC44D" />
	<path d="M3.70288 7.07348L5.69357 9.26909L9.92378 5.12183" stroke="white" stroke-width="1.38242" />
</svg>
</i><i class="form__textarea__icon error"><svg width="13" height="14" viewBox="0 0 13 14" fill="none" xmlns="http://www.w3.org/2000/svg">
	<rect x="0.246826" y="0.974609" width="12.4418" height="12.4418" rx="6.2209" fill="#E30016" />
	<path d="M6.46782 9.96035C6.27033 9.96035 6.10829 9.8967 5.9817 9.76941C5.84497 9.64211 5.77661 9.48681 5.77661 9.30351C5.77661 9.11511 5.84244 8.95727 5.9741 8.82997C6.11082 8.70268 6.2754 8.63903 6.46782 8.63903C6.66025 8.63903 6.82229 8.70268 6.95395 8.82997C7.09067 8.95727 7.15903 9.11511 7.15903 9.30351C7.15903 9.48172 7.0932 9.63702 6.96154 9.76941C6.82482 9.8967 6.66025 9.96035 6.46782 9.96035ZM5.86016 4.43066H7.09067L6.92357 8.18841H6.02727L5.86016 4.43066Z" fill="white" />
</svg>
</i></label></div>
<div class="col-12">
	<div class="form__line2 row align-items-center">
		<div class="col-12 col-md-auto"><button class="mbtn mbtn__full mbtn__red mbtn__extralarge d-block w-100" type="submit">Отправить отзыв</button></div>
		<div class="col-12 col-md">
			<div class="form__info">Нажимая на кнопку Вы соглашаетесь с&nbsp;<a href="#">политикой конфиденциальности</a></div>
		</div>
	</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</section>
<!-- /оставьте свой отзыв-->
<?require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'); ?>