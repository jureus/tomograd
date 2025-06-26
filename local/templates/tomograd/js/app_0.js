document.addEventListener("DOMContentLoaded", function () {
	// header scroll
	function checkScroll() {
		const scrollPosition = window.scrollY;
		const blockHeader = document.querySelector('.js--nheader');
		if (blockHeader) {
			if ( scrollPosition>0 ) {
				blockHeader.classList.add('header__fixed')
				blockHeader.dataset.top = 'false'
			} else {
				blockHeader.classList.remove('header__fixed')
				blockHeader.dataset.top = 'true'
			}
		}
	}

	checkScroll()
	window.addEventListener('scroll', function () {
		checkScroll()
	})
	// /header scroll

	// header search
	const searchBtn = document.querySelector('.js--searchbtn');
	if (searchBtn) {
		const searchBox = document.querySelector('.js--search-popup');
		const searchBtnClose = document.querySelector('.js--searchbtn-close');
		const searchInput = document.querySelector('.js--search-input');
		const searchRezult = document.querySelector('.js--search-rezult');

		searchBtn.addEventListener('click', function(e) {
			e.preventDefault()
			searchBox.classList.add('active')
			searchInput.focus()
		})
		searchBtnClose.addEventListener('click', function() {
			searchBox.classList.remove('active')
			searchRezult.classList.remove('opened')
		})
	}
	// header search

	// header catalog
	const hlinks = document.querySelectorAll('.js--hnav-link');
	if (hlinks) {
		hlinks.forEach(link => {
			link.addEventListener('click', (event) => {
				event.preventDefault()
				const wrap = link.closest('.js--hnav');
				const prevActiveItem = wrap.querySelector('.js--hnav-link.active');
				const prevActiveButton = wrap.querySelector('.js--hnav-item.active');
				const prevActiveSide = wrap.querySelector('.js--hnav-side.active');

				if (prevActiveButton) {
					prevActiveButton.classList.remove('active');
				}

				if (prevActiveItem) {
					prevActiveItem.classList.remove('active');
				}

				if (prevActiveSide) {
					prevActiveSide.classList.remove('active');
				}
				const nextActiveItemId = `#${link.getAttribute('data-itemid')}`;
				const nextActiveItem = wrap.querySelector(nextActiveItemId);

				const nextActiveSideId = `#${link.getAttribute('data-sideid')}`;
				const nextActiveSide = wrap.querySelector(nextActiveSideId);

				link.classList.add('active');
				nextActiveItem.classList.add('active');
				nextActiveSide.classList.add('active');
			})
		})
	}

	const hlinkto = document.querySelectorAll('.js--linktocatalog');
	const hcatalog = document.querySelector('.js--hcatalog');
	const overlay = document.querySelector('.js--overlay')
	if (hlinkto) {
		hlinkto.forEach(link => {
			link.addEventListener('click', (event) => {
				event.preventDefault()

				const mobilemenu = document.querySelector('.js--mobilemenu')
				const mobilemenuBtn = document.querySelector('.js--mobilemenu-btn')

				const linkDataActive = link.getAttribute('data-active');
				if ( linkDataActive === 'false' ) {

					const prevActiveLink = document.querySelector('.js--linktocatalog.active');

					if (prevActiveLink && prevActiveLink.getAttribute('data-active') === 'true') {
						prevActiveLink.classList.remove('active');
						prevActiveLink.dataset.active = 'false'
					}

					if (mobilemenu.classList.contains('mobilemenu__opened')) {
						mobilemenuBtn.classList.remove('active')
						mobilemenu.classList.remove('mobilemenu__opened')
					}

					link.dataset.active = 'true'
					link.classList.add('active')

					hcatalog.classList.add('active')
					overlay.classList.add('active')

					if (window.innerWidth < 992) {
						document.body.classList.add('no-scroll');
						const navheader = document.querySelector('.js--nheader');
						if (navheader.dataset.top === "true" && !mobilemenu.classList.contains('mobilemenu__opened')) {
							navheader.classList.add('header__fixed')
						}
					}

					const hcatalogActiveId = `#${link.getAttribute('data-link')}`;
					const hcatalogActiveItem = document.querySelector(hcatalogActiveId);
					hcatalogActiveItem.click()
				} else {
					link.dataset.active = 'false'
					link.classList.remove('active')

					hcatalog.classList.remove('active')
					overlay.classList.remove('active')

					if (window.innerWidth < 992) {
						document.body.classList.remove('no-scroll');
						const navheader = document.querySelector('.js--nheader');
						if (navheader.dataset.top === "true") {
							navheader.classList.remove('header__fixed')
						}
					}
				}
			})
		})

		document.addEventListener('click', (event) => {
			if (!hcatalog.contains(event.target) && !Array.from(hlinkto).some(link => link.contains(event.target))) {
				hcatalog.classList.remove('active')

				const activeLink = document.querySelector('.js--linktocatalog.active');
				if (activeLink) {
					activeLink.classList.remove('active')
					activeLink.dataset.active = 'false'
					overlay.classList.remove('active')

					if (window.innerWidth < 992) {
						const navBtns = document.querySelectorAll('.js--mobilemenu-btn');
						if (navBtns) {
							if (!Array.from(navBtns).some(btn => btn.contains(event.target))) {
								console.log("nshr")
								if (navheader.dataset.top === "true") {
									navheader.classList.remove('header__fixed')
								}
							}
						}
					}
				}
			}
		});
	}
	// /header catalog

	// header menu items w subs
	const hmlinks = document.querySelectorAll('.js--hmenu-link');
	if (hmlinks) {
		hmlinks.forEach(link => {
			link.addEventListener('click', (event) => {
				event.preventDefault()

				const item = link.closest('.js--hmenu-link-item');
				const prevActiveItem = document.querySelector('.js--hmenu-link-item.active');

				if (prevActiveItem) {
					prevActiveItem.classList.remove('active');
				}

				item.classList.add('active')
			})
		})
		document.addEventListener('click', (event) => {
			const itemsHMenu = document.querySelectorAll('.js--hmenu-link-item');
			itemsHMenu.forEach(item => {
				if (!item.contains(event.target)) {
					item.classList.remove('active')
				}
			})
		});
	}

	// footer mobile menu
	let fmenulinks = document.getElementsByClassName('js--fmenu-link');

	if (fmenulinks && window.innerWidth < 768) {
		for ( let i = 0; i < fmenulinks.length; i++) {
			fmenulinks[i].addEventListener("click", function() {
				let item = this.closest('.js--fmenu-item');
				let submenu = item.querySelector('.js--fmenu-elem');

				this.classList.toggle("active")
				if (submenu.style.maxHeight) {
					submenu.style.maxHeight = null
				} else {
					submenu.style.maxHeight = submenu.scrollHeight + "px";
				}
			})
		}
	}
	// footer mobile menu

	function getScrollbarWidth() {

		// Creating invisible container
		const outer = document.createElement('div');
		outer.style.visibility = 'hidden';
		outer.style.overflow = 'scroll'; // forcing scrollbar to appear
		outer.style.msOverflowStyle = 'scrollbar'; // needed for WinJS apps
		document.body.appendChild(outer);

		// Creating inner element and placing it in the container
		const inner = document.createElement('div');
		outer.appendChild(inner);

		// Calculating difference between container's full width and the child width
		const scrollbarWidth = (outer.offsetWidth - inner.offsetWidth);

		// Removing temporary elements from the DOM
		outer.parentNode.removeChild(outer);

		return scrollbarWidth;

	  }

	// fancybox
	Fancybox.bind("[data-fancybox]", {
		// options
	})

	// styled Scroll
	Array.prototype.forEach.call(
		document.querySelectorAll('.js--styled-scroll'),
		(el) => new SimpleBar(el, {
			autoHide: false,
		})
	)

	// phone mask
	let inputsPhone = document.querySelectorAll(".js--maskphone");
	if (inputsPhone) {
		var phoneMask = new Inputmask("+7 (999) 999 99 99");
		phoneMask.mask(inputsPhone);
	}

	// fancybox for modals
	Fancybox.bind("[data-fancybox-html]", {
		autoFocus: false,
		btnTpl : {
			smallBtn : '<div data-fancybox-close class="fancybox-close-small modal-close">Button</div>'
		},
		// on: {
		// 	done: (fancybox) => {
		// 	},
		// },
	})

	// counter cart
	const inputcartCount = document.querySelectorAll('.js--inputcount');
	if (inputcartCount) {
		Array.prototype.forEach.call(inputcartCount, function (inputbox) {
			let btnMinus = inputbox.querySelector('.js--inputcount-minus');
			let btnPlus = inputbox.querySelector('.js--inputcount-plus');
			let thisInput = inputbox.querySelector('.js--inputcount-input');

			btnMinus.addEventListener('click', function() {
				let inputVal = thisInput.value;
				inputVal = --inputVal
				if (inputVal>=0) {
					thisInput.value = inputVal
				}
			})

			btnPlus.addEventListener('click', function() {
				let inputVal = thisInput.value;
				inputVal = ++inputVal
				if (inputVal>=0) {
					thisInput.value = inputVal

				}
			})
		})
	}
	// counter cart

	// crumbs
	const crumbs = document.querySelector('.crumbs ol');
	if (crumbs) {
		blockForOffset = document.querySelector('.crumbs__offset');
		function docnavOffset() {
			if (window.innerWidth<992) {
				crumbs.style.paddingLeft = blockForOffset.offsetLeft + getScrollbarWidth()/2
				crumbs.style.paddingRight = blockForOffset.offsetLeft + getScrollbarWidth()/2
			} else {
				crumbs.style.paddingLeft = "0"
				crumbs.style.paddingRight = "0"
			}
		}
		docnavOffset()

		window.addEventListener('resize', () => {
			docnavOffset()
		});

		window.addEventListener('orientationchange', () => {
			docnavOffset()
		});
	}

	// doctor nav
	const docnav = document.querySelector('.js--docnav');
	if (docnav) {
		blockForOffset = document.querySelector('.js--docnav-offset');
		function crumbsOffset() {
			if (window.innerWidth<992) {
				docnav.style.paddingLeft = blockForOffset.offsetLeft + 8 + getScrollbarWidth()/2
				docnav.style.paddingRight = blockForOffset.offsetLeft + 8 + getScrollbarWidth()/2
			} else {
				docnav.style.paddingLeft = "0"
				docnav.style.paddingRight = "0"
			}
		}
		crumbsOffset()

		window.addEventListener('resize', () => {
			crumbsOffset()
		});

		window.addEventListener('orientationchange', () => {
			crumbsOffset()
		});
	}


	function updateFade(swipername, slidername) {
		if (swipername.isBeginning) {
			slidername.classList.remove('shadow__left')
		} else {
			slidername.classList.add('shadow__left')
		}

		if (swipername.isEnd) {
			slidername.classList.remove('shadow__right')
		} else {
			slidername.classList.add('shadow__right')
		}
	}

	// link to anhor
	const linksto = document.querySelectorAll('.js--linkto');
	if (linksto) {
		Array.prototype.forEach.call(linksto, function (link) {

			link.addEventListener('click', function(e) {
				e.preventDefault()

				const header = document.querySelector('.js--nheader');
				const offset = header.clientHeight;
				const block = document.querySelector(link.getAttribute('href'));

				const blockPosition = block.getBoundingClientRect().top + window.scrollY;
				window.scrollTo({
					top: blockPosition - offset,
					behavior: 'smooth'
				});
			})

		})
	}

	// slide links menu
	let linksToSlide = document.getElementsByClassName('js--linktoslide');

	for ( let i = 0; i < linksToSlide.length; i++) {
		linksToSlide[i].addEventListener("click", function(e) {
			e.preventDefault()

			const blockToSlide = document.querySelector(this.getAttribute('data-href'))

			this.classList.toggle("active")
			if (blockToSlide.style.maxHeight) {
				blockToSlide.style.maxHeight = null
			} else {
				blockToSlide.style.maxHeight = blockToSlide.scrollHeight + "px";
			}
		})
	}
    // /slide links menu

	// point simptomps
	const simp = document.querySelector('.js--smp-wrap');
	if (simp) {
		const links = simp.querySelectorAll('.js--smp-link');
		const points = simp.querySelectorAll('.js--smp-point');

		Array.prototype.forEach.call(points, function (point) {
			point.addEventListener('mouseover', function() {
				let idLink = this.getAttribute('data-link');
				let hoverLink = simp.querySelector('.js--smp-link.hover');

				if (hoverLink) {
					hoverLink.classList.remove('hover')
				}

				let link = simp.querySelector(idLink)
				link.classList.add('hover')
			})
			point.addEventListener('mouseout', function() {
				let hoverLink = simp.querySelector('.js--smp-link.hover');

				if (hoverLink) {
					hoverLink.classList.remove('hover')
				}
			})
		})

		Array.prototype.forEach.call(links, function (link) {
			link.addEventListener('mouseover', function() {
				let idPoint = this.getAttribute('data-point');
				let hoverPoint = simp.querySelector('.js--smp-point.hover');

				if (hoverPoint) {
					hoverPoint.classList.remove('hover')
				}

				let point = simp.querySelector(idPoint)
				point.classList.add('hover')
			})
			link.addEventListener('mouseout', function() {
				let hoverPoint = simp.querySelector('.js--smp-point.hover');

				if (hoverPoint) {
					hoverPoint.classList.remove('hover')
				}
			})
		})

	}
	// point simptomps

	gsap.registerPlugin(ScrollTrigger);

	const navigation = document.querySelector('.js--navpin--wrap');
	if (navigation) {

		const blockHeader = document.querySelector('.js--headerfix');
		const navOffset = blockHeader.offsetHeight + 12;

		let fixnavpage = ScrollTrigger.create({
			trigger: navigation,
			pin: ".js--navpin",
			toggleClass: "fixed",
			// start: 'top +=76',
			// start: 'top top',
			// start: () => "top " + navOffset,
			start: () => `top +=${navOffset}`,
			// end: "+99999",
			// endTrigger: ".footer",
			// end: "max",
			end: "bottom top",
			// end: () => "+=" + (blockMain.innerHeight),
			pinSpacer: false,
			pinSpacing: false,
			scrub: false,
			// markers: true
		});

		const scrollSections = gsap.utils.toArray(".js--navpin--section");
		// const links = gsap.utils.toArray(".js--linkfolow");

		scrollSections.forEach((section, i) => {
			const link = document.querySelector(section.getAttribute('data-link'));
			ScrollTrigger.create({
				trigger: section,
				start: "top center",
				end: `bottom -=60`,
				onEnter: () => link.classList.add("active"),
				onEnterBack: () => link.classList.add("active"),
				onLeave: () => link.classList.remove("active"),
				onLeaveBack: () => link.classList.remove("active"),
				// markers: true
			});
		});
	}

	// cookies
	const cookiesBtn = document.querySelector('.js--cookies-btn');
	if (cookiesBtn) {
		cookiesBtn.addEventListener('click', function(e) {
			e.preventDefault();
			let cookiesWrap = document.querySelector('.js--cookies');
			cookiesWrap.classList.add('cookies__closed')
		})
	}
	const cookiesBtnClose = document.querySelector('.js--cookies-close');
	if (cookiesBtnClose) {
		cookiesBtnClose.addEventListener('click', function(e) {
			e.preventDefault();
			let cookiesWrap = document.querySelector('.js--cookies');
			cookiesWrap.classList.add('cookies__closed')
		})
	}
	// /cookies

	
const tabs = document.querySelectorAll('.js--tabs')

if (tabs) {
	Array.prototype.forEach.call(tabs, function (tabWrap) {
		const tabsButtons = tabWrap.querySelectorAll('.js--tabs-link');

		tabsButtons.forEach(btn => {
			btn.addEventListener('click', (event) => {
				event.preventDefault()
				const prevActiveItem = tabWrap.querySelector('.js--tabs-link.active');
				const prevActiveButton = tabWrap.querySelector('.js--tabs-item.active');

				if (prevActiveButton) {
					prevActiveButton.classList.remove('active');
				}

				if (prevActiveItem) {
					prevActiveItem.classList.remove('active');
				}
				const nextActiveItemId = `#${btn.getAttribute('data-tab')}`;
				const nextActiveItem = tabWrap.querySelector(nextActiveItemId);

				btn.classList.add('active');
				nextActiveItem.classList.add('active');
			})
		})
	})
}

const tabs2 = document.querySelectorAll('.js--tabs2')

if (tabs2) {
	Array.prototype.forEach.call(tabs2, function (tabWrap) {
		const tabsButtons = tabWrap.querySelectorAll('.js--tabs2-link');

		tabsButtons.forEach(btn => {
			btn.addEventListener('click', (event) => {
				event.preventDefault()
				const prevActiveItem = tabWrap.querySelector('.js--tabs2-link.active');
				const prevActiveButton = tabWrap.querySelector('.js--tabs2-item.active');

				if (prevActiveButton) {
					prevActiveButton.classList.remove('active');
				}

				if (prevActiveItem) {
					prevActiveItem.classList.remove('active');
				}
				const nextActiveItemId = `#${btn.getAttribute('data-tab')}`;
				const nextActiveItem = tabWrap.querySelector(nextActiveItemId);

				btn.classList.add('active');
				nextActiveItem.classList.add('active');
			})
		})
	})
}
;
	const inputLines = document.querySelectorAll('.js--form-input');
// inputs
if (inputLines) {
	Array.prototype.forEach.call(inputLines, (input) => {
		const label = input.closest('.js--form-label')

		input.onfocus = function() {
			label.classList.add('active')
		}
		input.onblur = function() {
			if (!input.value.length) {
				label.classList.remove('active')
			} else {
				label.classList.add('active')
			}
		}

		input.oninput = function() {
			label.classList.add('active')
		}

		if (!input.value.length) {
			label.classList.remove('active')
		} else {
			label.classList.add('active')
		}
	})
}

// textareas
const textareas = document.querySelectorAll('.js--form-textarea');
if (textareas) {
	Array.prototype.forEach.call(textareas, (text) => {
		let wrap = text.closest('.js--form-label')

		text.onfocus = function() {
			wrap.classList.add('active')
		}
		text.onblur = function() {
			if (!text.value.length) {
				wrap.classList.remove('active')
			} else {
				wrap.classList.add('active')
			}
		}

		if (!text.value.length) {
			wrap.classList.remove('active')
		} else {
			wrap.classList.add('active')
		}
	})
}

// select
// dropdown
const selectLabel = document.querySelectorAll('.js--select-label');
if (selectLabel) {
	Array.prototype.forEach.call(selectLabel, (btnOpen) => {
		btnOpen.addEventListener('click', function() {
			let selectWrap = btnOpen.closest('.js--select');
			if (!selectWrap.classList.contains('form__select__disabled')) {
				selectWrap.classList.toggle('active')
			}
		})
	})

	document.addEventListener("click", function(e) {
		let selectsPopupOpened = document.querySelectorAll(".js--select.active");

		selectsPopupOpened.forEach(selectPopup => {
			let selectWrap = selectPopup.closest('.js--select');

			if (selectPopup && e.target !== selectPopup && !selectPopup.contains(e.target)) {
				selectWrap.classList.remove("active");
			}
		})
	})

	function checkSelect() {
		const selectedOptions = document.querySelectorAll('.js--select-option.active');
		Array.prototype.forEach.call(selectedOptions, (option) => {
			let select = option.closest('.js--select');
			let textLabel = select.querySelector('.js--select-text');

			select.classList.add('checked')
			textLabel.textContent = option.textContent
		})
	}

	checkSelect()

	const selectOptions = document.querySelectorAll('.js--select-option');
	Array.prototype.forEach.call(selectOptions, (option) => {
		option.addEventListener('click', function() {
			let select = option.closest('.js--select');
			let textLabel = select.querySelector('.js--select-text');
			let optionActive = select.querySelector('.js--select-option.active');

			if (optionActive) {
				optionActive.classList.remove('active');
			}
			option.classList.add('active');
			textLabel.textContent = option.textContent
			select.classList.remove('active')
			select.classList.add('checked')

			if (select.classList.contains('js--check-reviewgrooup')) {
				checkgroup()
			}
		})

	})
}


checkgroup()
function checkgroup() {
	if (document.querySelector('.js--check-reviewgrooup')) {
		const checkgroup = document.querySelector('.js--check-reviewgrooup');
		const selectedOptions = checkgroup.querySelector('.js--select-option.active');
		const selectValue = selectedOptions.getAttribute('data-value');
		const clockToHide = document.querySelector('#ftab_0');

		if (selectValue == 0) {
			clockToHide.classList.remove('d-none')
			clockToHide.classList.add('d-block')
		} else {
			clockToHide.classList.remove('d-block')
			clockToHide.classList.add('d-none')
		}
	}
}

// autocomplete

const inputAutoLines = document.querySelectorAll('.js--autocomplete-input');
// inputs
if (inputAutoLines) {
	Array.prototype.forEach.call(inputAutoLines, (input) => {
		const wrapAuto = input.closest('.js--autocomplete')

		input.oninput = function() {
			wrapAuto.classList.add('active')
		}
	})

	document.addEventListener("click", function(e) {
		let autocomplOpened = document.querySelectorAll(".js--autocomplete.active");

		autocomplOpened.forEach(selectPopup => {
			if (selectPopup && e.target !== selectPopup && !selectPopup.contains(e.target)) {
				selectPopup.classList.remove("active");
			}
		})
	})

	const autoLi = document.querySelectorAll('.js--autocomplete-list-item');
	Array.prototype.forEach.call(autoLi, (li) => {
		li.addEventListener('click', function() {
			let value = this.querySelector('input').value;
			let wrap = this.closest('.js--autocomplete');
			let label = wrap.querySelector('.form__input');
			let input = wrap.querySelector('input');

			input.value = value
			label.classList.add('active')
			wrap.classList.remove('active')
		})
	})
}


// search page404
const psInput = document.querySelector('.js-ps-input');
if (psInput) {
	const psClear = document.querySelector('.js-ps-clear');

	psInput.onfocus = function() {
		if (psInput.value.length) {
			psClear.classList.add('active')
		} else {
			psClear.classList.remove('active')
		}
	}
	psInput.onblur = function() {
		if (psInput.value.length) {
			psClear.classList.add('active')
		} else {
			psClear.classList.remove('active')
		}
	}

	psInput.oninput = function() {
		if (psInput.value.length) {
			psClear.classList.add('active')
		} else {
			psClear.classList.remove('active')
		}
	}

	if (psInput.value.length) {
		psClear.classList.add('active')
	} else {
		psClear.classList.remove('active')
	}


	psClear.addEventListener('click', function(e) {
		e.preventDefault()
		this.classList.remove('active')
		psInput.value = ''
	})
}
// search page404


// page search-result
const prInput = document.querySelector('.js--prsearch-input');
if (prInput) {
	const prClear = document.querySelector('.js--prsearch-clear');

	prInput.onfocus = function() {
		if (prInput.value.length) {
			prClear.classList.add('active')
		} else {
			prClear.classList.remove('active')
		}
	}
	prInput.onblur = function() {
		if (prInput.value.length) {
			prClear.classList.add('active')
		} else {
			prClear.classList.remove('active')
		}
	}

	prInput.oninput = function() {
		if (prInput.value.length) {
			prClear.classList.add('active')
		} else {
			prClear.classList.remove('active')
		}
	}

	if (prInput.value.length) {
		prClear.classList.add('active')
	} else {
		prClear.classList.remove('active')
	}


	prClear.addEventListener('click', function(e) {
		e.preventDefault()
		this.classList.remove('active')
		prInput.value = ''
	})
}
// page search-result
;
	// faq
let btnFaqToSlide = document.getElementsByClassName('js--faq-title');

for ( let y = 0; y < btnFaqToSlide.length; y++) {
    btnFaqToSlide[y].addEventListener("click", function() {
		let faqCard = this.closest('.js--faq-card')
        faqCard.classList.toggle("active")
        let faqContent = faqCard.querySelector('.js--faq-slide');
        if (faqContent.style.maxHeight) {
            faqContent.style.maxHeight = null
        } else {
            faqContent.style.maxHeight = faqContent.scrollHeight + "px";
        }
    })
}
// faq
let btnFaqMobileToSlide = document.getElementsByClassName('js--faqmobile-title');

for ( let y = 0; y < btnFaqMobileToSlide.length; y++) {
    btnFaqMobileToSlide[y].addEventListener("click", function() {
		let faqMobileCard = this.closest('.js--faqmobile-card')
        faqMobileCard.classList.toggle("active")
        let faqContent = faqMobileCard.querySelector('.js--faqmobile-slide');
		let slideParent = faqMobileCard.closest('.js--faq-slide');

        if (faqContent.style.maxHeight) {
            faqContent.style.maxHeight = null
			slideParent.style.maxHeight = slideParent.scrollHeight + "px";
        } else {
            faqContent.style.maxHeight = faqContent.scrollHeight + "px";
			slideParent.style.maxHeight = slideParent.scrollHeight + faqContent.scrollHeight + "px";
        }
    })
}

const faqList = document.querySelector('.faq');
if (faqList) {
	const toggleButton = document.querySelector('.js--faqmore');
	const faqItems = faqList.querySelectorAll('.faq__item');
	if (faqItems.length <= 3) {
		toggleButton.style.display = 'none !important';
	}

	toggleButton.addEventListener('click', (e) => {
		e.preventDefault()
		faqList.classList.toggle('expanded'); // Переключаем класс для раскрытия
		toggleButton.textContent = faqList.classList.contains('expanded') ? 'Скрыть' : 'Показать еще'; // Меняем текст кнопки
	});
}
// /faq


// faq services article
let btnServArticleToSlide = document.getElementsByClassName('js--servarticle-title');

if (window.innerWidth < 768) {
	for ( let y = 0; y < btnServArticleToSlide.length; y++) {
		btnServArticleToSlide[y].addEventListener("click", function() {
			let ServArticleCard = this.closest('.js--ServArticle-card')
			ServArticleCard.classList.toggle("active")
			let ServArticleContent = ServArticleCard.querySelector('.js--ServArticle-slide');
			if (ServArticleContent.style.maxHeight) {
				ServArticleContent.style.maxHeight = null
			} else {
				ServArticleContent.style.maxHeight = ServArticleContent.scrollHeight + "px";
			}
		})
	}
}
// /faq services article
;
	// mobile nav menu
const navBtns = document.querySelectorAll('.js--mobilemenu-btn');
const nav = document.querySelector('.js--mobilemenu');
const navheader = document.querySelector('.js--nheader');

if (navBtns) {
	navBtns.forEach(navBtn => {
		navBtn.addEventListener('click', () => {
			nav.classList.toggle('mobilemenu__opened')
			navBtn.classList.toggle('active')
			document.body.classList.toggle('no-scroll')
			if (navheader.dataset.top === "true") {
				if (!document.querySelector('.js--hcatalog').classList.contains('active')) {
					navheader.classList.toggle('header__fixed')
				} else {
					navheader.classList.add('header__fixed')
				}
			}
		})
	})

	const btnClose = document.querySelector('.js--mobilemenu-close');

	btnClose.addEventListener('click', () => {
		navBtns.forEach(navBtn => {
			nav.classList.remove('mobilemenu__opened');
			navBtn.classList.remove('active');
			document.body.classList.remove('no-scroll');
			if (navheader.dataset.top === "true") {
				navheader.classList.remove('header__fixed')
			}
		})
	})

	// mobile slide links menu
	let btnToSlide = document.getElementsByClassName('js--mobilemenu-sub-link');

	for ( let i = 0; i < btnToSlide.length; i++) {
		btnToSlide[i].addEventListener("click", function() {
			let item = this.closest('.js--mobilemenu-sub');
			let submenu = item.querySelector('.js--mobilemenu-popup');

			item.classList.toggle("active")
			if (submenu.style.maxHeight) {
				submenu.style.maxHeight = null
			} else {
				submenu.style.maxHeight = submenu.scrollHeight + "px";
			}
		})
	}
    // /mobile slide links menu
}
;
	const sliderWelcome = document.querySelector('.js--sl-welcome');

if(sliderWelcome) {
	const welcomeSwiper = new Swiper(sliderWelcome, {
		loop: true,
		slidesPerView: "auto",
		centeredSlides: true,
		autoHeight: true,
		spaceBetween: 8,
		autoplay: {
			delay: 3000,
			disableOnInteraction: false,
		},
        autoplay: true,

		breakpoints: {
			768: {
				spaceBetween: 0,
				effect: 'fade',
				// slidesPerView: 1,
				// centeredSlides: false,
			},
		},

        pagination: {
			el: '.js--sl-welcome-pag',
			clickable: true,
			bulletClass: 'welcome__slider__pag__bullet',
			bulletActiveClass: 'active'
		}
	})

	window.addEventListener('resize', () => {
		welcomeSwiper.update()
	});

	window.addEventListener('orientationchange', () => {
		welcomeSwiper.update()
	});
}
;
	const sliderExperts = document.querySelector('.js--sl-experts');

if (sliderExperts) {
	const sliderExpertsOffset = document.querySelector('.js--sl-experts-offset');

	let spbExperts = 24;
	let spbExpertsLaptop = 16;
	let spbExpertsMobile = 8;

	let leftexperts = function leftexperts() {
		let offsetLeft;
		return offsetLeft = sliderExpertsOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperExperts = new Swiper(sliderExperts, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftexperts(),
		slidesOffsetAfter: leftexperts(),
		spaceBetween: spbExpertsMobile,
		slideToClickedSlide: false,
		breakpoints: {
			768: {
				spaceBetween: spbExpertsLaptop,
			},
			992: {
				spaceBetween: spbExperts,
			},
		},

        pagination: {
			el: '.js--sl-experts-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},
	});

	swiperExperts.init();

	window.addEventListener('resize', () => {
		swiperExperts.params.slidesOffsetBefore = leftexperts();
		swiperExperts.params.slidesOffsetAfter = leftexperts();
		swiperExperts.update(true);
		if (swiperExperts.activeIndex === 0) {
			swiperExperts.slideTo(0);
		}
	})

	window.addEventListener('orientationchange', () => {
		swiperExperts.params.slidesOffsetBefore = leftexperts();
		swiperExperts.params.slidesOffsetAfter = leftexperts();
		swiperExperts.update(true);
		if (swiperExperts.activeIndex === 0) {
			swiperExperts.slideTo(0);
		}
	})
}
;
	const sliderLicenses = document.querySelector('.js--sl-licenses');

if (sliderLicenses) {
	const sliderLicensesOffset = document.querySelector('.js--sl-licenses-offset');

	let spbLicenses = 24;
	let spbLicensesLaptop = 16;
	let spbLicensesMobile = 8;

	let leftlicences = function leftlicences() {
		let offsetLeft;
		return offsetLeft = sliderLicensesOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperLicenses = new Swiper(sliderLicenses, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftlicences(),
		slidesOffsetAfter: leftlicences(),
		spaceBetween: spbLicensesMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbLicenses,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-licenses-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-licenses-prev',
			nextEl: '.js--sl-licenses-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperLicenses, sliderLicenses);
			},
			touchEnd: function () {
			  updateFade(swiperLicenses, sliderLicenses);
			}
		}
	});

	swiperLicenses.init();
	updateFade(swiperLicenses, sliderLicenses);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperLicenses.params.slidesOffsetBefore = leftlicences();
			swiperLicenses.params.slidesOffsetAfter = leftlicences();
			swiperLicenses.update(true);
			if (swiperLicenses.activeIndex === 0) {
				swiperLicenses.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperLicenses.params.slidesOffsetBefore = leftlicences();
			swiperLicenses.params.slidesOffsetAfter = leftlicences();
			swiperLicenses.update(true);
			if (swiperLicenses.activeIndex === 0) {
				swiperLicenses.slideTo(0);
			}
		}
	})
}
;
	const sliderReviews = document.querySelector('.js--sl-reviews');

if (sliderReviews) {
	const sliderReviewsOffset = document.querySelector('.js--sl-reviews-offset');

	let spbReviews = 24;
	let spbReviewsLaptop = 16;
	let spbReviewsMobile = 8;

	let leftreviews = function leftreviews() {
		let offsetLeft;
		return offsetLeft = sliderReviewsOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperReviews = new Swiper(sliderReviews, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftreviews(),
		slidesOffsetAfter: leftreviews(),
		spaceBetween: spbReviewsMobile,
		slideToClickedSlide: false,
		breakpoints: {
			768: {
				spaceBetween: spbReviewsLaptop,
			},
			992: {
				spaceBetween: spbReviews,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-reviews-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-reviews-prev',
			nextEl: '.js--sl-reviews-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperReviews, sliderReviews);
			},
			touchEnd: function () {
			  updateFade(swiperReviews, sliderReviews);
			}
		}
	});

	swiperReviews.init();

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperReviews.params.slidesOffsetBefore = leftreviews();
			swiperReviews.params.slidesOffsetAfter = leftreviews();
			swiperReviews.update(true);
			if (swiperReviews.activeIndex === 0) {
				swiperReviews.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperReviews.params.slidesOffsetBefore = leftreviews();
			swiperReviews.params.slidesOffsetAfter = leftreviews();
			swiperReviews.update(true);
			if (swiperReviews.activeIndex === 0) {
				swiperReviews.slideTo(0);
			}
		}
	})

	updateFade(swiperReviews, sliderReviews);
}
;
	const sliderBlog = document.querySelector('.js--sl-blog');

if (sliderBlog) {
	const sliderBlogOffset = document.querySelector('.js--sl-blog-offset');

	let spbBlog = 24;
	let spbBlogLaptop = 16;
	let spbBlogMobile = 8;

	let leftblog = function leftblog() {
		let offsetLeft;
		return offsetLeft = sliderBlogOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperBlog = new Swiper(sliderBlog, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftblog(),
		slidesOffsetAfter: leftblog(),
		spaceBetween: spbBlogMobile,
		slideToClickedSlide: false,

		breakpoints: {
			768: {
				spaceBetween: spbBlogLaptop,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
			992: {
				spaceBetween: spbBlog,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-blog-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},
	});

	blogInitSwiper()

	function blogInitSwiper() {
		if (window.innerWidth < 768) {

			swiperBlog.init();
			swiperBlog.slideTo(0);

			window.addEventListener('resize', () => {
				if (window.innerWidth < 768) {
					swiperBlog.params.slidesOffsetBefore = leftblog();
					swiperBlog.params.slidesOffsetAfter = leftblog();
					swiperBlog.update(true);
					if (swiperBlog.activeIndex === 0) {
						swiperBlog.slideTo(0);
					}
				}
			})

			window.addEventListener('orientationchange', () => {
				if (window.innerWidth < 768) {
					swiperBlog.params.slidesOffsetBefore = leftblog();
					swiperBlog.params.slidesOffsetAfter = leftblog();
					swiperBlog.update(true);
					if (swiperBlog.activeIndex === 0) {
						swiperBlog.slideTo(0);
					}
				}
			})
		} else {
			if (swiperBlog.isInit) {
				swiperBlog.destroy();
			}
		}
	}
}
;
	const sliderClinics = document.querySelector('.js--sl-clinics');

if (sliderClinics) {
	const sliderClinicsOffset = document.querySelector('.js--sl-clinics-offset');

	let spbClinics = 24;
	let spbClinicsLaptop = 16;
	let spbClinicsMobile = 8;

	let leftclinicts = function leftclinicts() {
		let offsetLeft;
		return offsetLeft = sliderClinicsOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperClinics = new Swiper(sliderClinics, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftclinicts(),
		slidesOffsetAfter: leftclinicts(),
		spaceBetween: spbClinicsMobile,
		slideToClickedSlide: false,
		breakpoints: {
			768: {
				spaceBetween: spbClinicsLaptop,
			},
			992: {
				spaceBetween: spbClinics,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-clinics-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

		on: {
			slideChange: function () {
			  updateFade(swiperClinics, sliderClinics);
			},
			touchEnd: function () {
			  updateFade(swiperClinics, sliderClinics);
			}
		}
	});

	swiperClinics.init();
	updateFade(swiperClinics, sliderClinics);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 768) {
			swiperClinics.params.slidesOffsetBefore = leftclinicts();
			swiperClinics.params.slidesOffsetAfter = leftclinicts();
			swiperClinics.update(true);
			if (swiperClinics.activeIndex === 0) {
				swiperClinics.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 768) {
			swiperClinics.params.slidesOffsetBefore = leftclinicts();
			swiperClinics.params.slidesOffsetAfter = leftclinicts();
			swiperClinics.update(true);
			if (swiperClinics.activeIndex === 0) {
				swiperClinics.slideTo(0);
			}
		}
	})
}
;
	const sliderEquipment = document.querySelector('.js--sl-equipment');

if (sliderEquipment) {
	const sliderEquipmentOffset = document.querySelector('.js--sl-equipment-offset');

	let spbEquipment = 24;
	let spbEquipmentLaptop = 16;
	let spbEquipmentMobile = 8;

	let leftequipment = function leftequipment() {
		let offsetLeft;
		return offsetLeft = sliderEquipmentOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperEquipment = new Swiper(sliderEquipment, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftequipment(),
		slidesOffsetAfter: leftequipment(),
		spaceBetween: spbEquipmentMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbEquipment,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-equipment-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-equipment-prev',
			nextEl: '.js--sl-equipment-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperEquipment, sliderEquipment);
			},
			touchEnd: function () {
			  updateFade(swiperEquipment, sliderEquipment);
			}
		}
	});

	swiperEquipment.init();
	updateFade(swiperEquipment, sliderEquipment);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperEquipment.params.slidesOffsetBefore = leftequipment();
			swiperEquipment.params.slidesOffsetAfter = leftequipment();
			swiperEquipment.update(true);
			if (swiperEquipment.activeIndex === 0) {
				swiperEquipment.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperEquipment.params.slidesOffsetBefore = leftequipment();
			swiperEquipment.params.slidesOffsetAfter = leftequipment();
			swiperEquipment.update(true);
			if (swiperEquipment.activeIndex === 0) {
				swiperEquipment.slideTo(0);
			}
		}
	})
}
;
	const sliderSpecialists = document.querySelector('.js--sl-specialists');

if (sliderSpecialists) {
	const sliderSpecialistsOffset = document.querySelector('.js--sl-specialists-offset');

	let spbSpecialists = 24;
	let spbSpecialistsLaptop = 16;
	let spbSpecialistsMobile = 8;

	let leftspecialists = function leftspecialists() {
		let offsetLeft;
		return offsetLeft = sliderSpecialistsOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperSpecialists = new Swiper(sliderSpecialists, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftspecialists(),
		slidesOffsetAfter: leftspecialists(),
		spaceBetween: spbSpecialistsMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbSpecialists,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-specialists-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-specialists-prev',
			nextEl: '.js--sl-specialists-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperSpecialists, sliderSpecialists);
			},
			touchEnd: function () {
			  updateFade(swiperSpecialists, sliderSpecialists);
			}
		}
	});

	swiperSpecialists.init();
	updateFade(swiperSpecialists, sliderSpecialists);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperSpecialists.params.slidesOffsetBefore = leftspecialists();
			swiperSpecialists.params.slidesOffsetAfter = leftspecialists();
			swiperSpecialists.update(true);
			if (swiperSpecialists.activeIndex === 0) {
				swiperSpecialists.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperSpecialists.params.slidesOffsetBefore = leftspecialists();
			swiperSpecialists.params.slidesOffsetAfter = leftspecialists();
			swiperSpecialists.update(true);
			if (swiperSpecialists.activeIndex === 0) {
				swiperSpecialists.slideTo(0);
			}
		}
	})
}
;
	const sliderMainactions = document.querySelector('.js--sl-mainactions');

if (sliderMainactions) {

	let spbMainactionsMobile = 8;

	let swiperMainactions = new Swiper(sliderMainactions, {
		loop: false,
		slidesPerView: "auto",
		centeredSlides: true,
		autoHeight: true,
		speed: 1000,
		spaceBetween: spbMainactionsMobile,
		breakpoints: {
			992: {
				slidesPerView: 1,
				centeredSlides: false,
			},
		},

        pagination: {
			el: '.js--sl-mainactions-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-mainactions-prev',
			nextEl: '.js--sl-mainactions-next',
		},
	});
}
;
	const sliderPageactions = document.querySelector('.js--sl-pageactions');

if (sliderPageactions) {

	let spbPageactionsMobile = 8;

	let swiperPageactions = new Swiper(sliderPageactions, {
		loop: false,
		slidesPerView: "auto",
		centeredSlides: true,
		autoHeight: true,
		speed: 1000,
		spaceBetween: spbPageactionsMobile,
		breakpoints: {
			992: {
				slidesPerView: 1,
				centeredSlides: false,
			},
		},

        pagination: {
			el: '.js--sl-pageactions-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-pageactions-prev',
			nextEl: '.js--sl-pageactions-next',
		},
	});
}
;
	const sliderGallery = document.querySelector('.js--sl-gallery');

if (sliderGallery) {
	const sliderGalleryOffset = document.querySelector('.js--sl-gallery-offset');

	let spbGallery = 24;
	let spbGalleryLaptop = 16;
	let spbGalleryMobile = 8;

	let leftlicences = function leftlicences() {
		let offsetLeft;
		return offsetLeft = sliderGalleryOffset.offsetLeft + getScrollbarWidth()/2 - 5;
	};

	let swiperGallery = new Swiper(sliderGallery, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftlicences(),
		slidesOffsetAfter: leftlicences(),
		spaceBetween: spbGalleryMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbGallery,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-gallery-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-gallery-prev',
			nextEl: '.js--sl-gallery-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperGallery, sliderGallery);
			},
			touchEnd: function () {
			  updateFade(swiperGallery, sliderGallery);
			}
		}
	});

	swiperGallery.init();
	updateFade(swiperGallery, sliderGallery);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperGallery.params.slidesOffsetBefore = leftlicences();
			swiperGallery.params.slidesOffsetAfter = leftlicences();
			swiperGallery.update(true);
			if (swiperGallery.activeIndex === 0) {
				swiperGallery.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperGallery.params.slidesOffsetBefore = leftlicences();
			swiperGallery.params.slidesOffsetAfter = leftlicences();
			swiperGallery.update(true);
			if (swiperGallery.activeIndex === 0) {
				swiperGallery.slideTo(0);
			}
		}
	})
}

const sliderAdv = document.querySelector('.js--sl-fav');

if (sliderAdv) {
	const sliderAdvOffset = document.querySelector('.js--sl-fav-offset');

	let spbAdv = 24;
	let spbAdvLaptop = 16;
	let spbAdvMobile = 8;

	let leftAdv = function leftAdv() {
		let offsetLeft;
		return offsetLeft = sliderAdvOffset.offsetLeft + getScrollbarWidth()/2 - 5;
	};

	let swiperAdv = new Swiper(sliderAdv, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftAdv(),
		slidesOffsetAfter: leftAdv(),
		spaceBetween: spbAdvMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbAdv,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-fav-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

		on: {
			slideChange: function () {
			  updateFade(swiperAdv, sliderAdv);
			},
			touchEnd: function () {
			  updateFade(swiperAdv, sliderAdv);
			}
		}
	});

	swiperAdv.init();
	updateFade(swiperAdv, sliderAdv);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperAdv.params.slidesOffsetBefore = leftAdv();
			swiperAdv.params.slidesOffsetAfter = leftAdv();
			swiperAdv.update(true);
			if (swiperAdv.activeIndex === 0) {
				swiperAdv.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperAdv.params.slidesOffsetBefore = leftAdv();
			swiperAdv.params.slidesOffsetAfter = leftAdv();
			swiperAdv.update(true);
			if (swiperAdv.activeIndex === 0) {
				swiperAdv.slideTo(0);
			}
		}
	})
}
;
	const sliderActionselse = document.querySelector('.js--sl-actionselse');

if (sliderActionselse) {
	const sliderActionselseOffset = document.querySelector('.js--sl-actionselse-offset');

	let spbActionselse = 24;
	let spbActionselseLaptop = 16;
	let spbActionselseMobile = 8;

	let leftspecialists = function leftspecialists() {
		let offsetLeft;
		return offsetLeft = sliderActionselseOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperActionselse = new Swiper(sliderActionselse, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftspecialists(),
		slidesOffsetAfter: leftspecialists(),
		spaceBetween: spbActionselseMobile,
		slideToClickedSlide: false,
		breakpoints: {
			992: {
				spaceBetween: spbActionselse,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-actionselse-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

        navigation: {
			disabledClass: 'disabled',
			prevEl: '.js--sl-actionselse-prev',
			nextEl: '.js--sl-actionselse-next',
		},

		on: {
			slideChange: function () {
			  updateFade(swiperActionselse, sliderActionselse);
			},
			touchEnd: function () {
			  updateFade(swiperActionselse, sliderActionselse);
			}
		}
	});

	swiperActionselse.init();
	updateFade(swiperActionselse, sliderActionselse);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperActionselse.params.slidesOffsetBefore = leftspecialists();
			swiperActionselse.params.slidesOffsetAfter = leftspecialists();
			swiperActionselse.update(true);
			if (swiperActionselse.activeIndex === 0) {
				swiperActionselse.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperActionselse.params.slidesOffsetBefore = leftspecialists();
			swiperActionselse.params.slidesOffsetAfter = leftspecialists();
			swiperActionselse.update(true);
			if (swiperActionselse.activeIndex === 0) {
				swiperActionselse.slideTo(0);
			}
		}
	})
}
;
	const sliderServWhy = document.querySelector('.js--sl-servwhy');

if (sliderServWhy) {
	const sliderServWhyOffset = document.querySelector('.js--sl-servwhy-offset');

	let spbBlog = 24;
	let spbBlogLaptop = 16;
	let spbBlogMobile = 8;

	let leftservwhy = function leftservwhy() {
		let offsetLeft;
		return offsetLeft = sliderServWhyOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperServWhy = new Swiper(sliderServWhy, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: leftservwhy(),
		slidesOffsetAfter: leftservwhy(),
		spaceBetween: spbBlogMobile,
		slideToClickedSlide: false,

		breakpoints: {
			992: {
				spaceBetween: spbBlog,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-servwhy-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},
	});

	blogInitSwiper()

	function blogInitSwiper() {
		if (window.innerWidth < 992) {

			swiperServWhy.init();
			swiperServWhy.slideTo(0);

			window.addEventListener('resize', () => {
				if (window.innerWidth < 992) {
					swiperServWhy.params.slidesOffsetBefore = leftservwhy();
					swiperServWhy.params.slidesOffsetAfter = leftservwhy();
					swiperServWhy.update(true);
					if (swiperServWhy.activeIndex === 0) {
						swiperServWhy.slideTo(0);
					}
				}
			})

			window.addEventListener('orientationchange', () => {
				if (window.innerWidth < 992) {
					swiperServWhy.params.slidesOffsetBefore = leftservwhy();
					swiperServWhy.params.slidesOffsetAfter = leftservwhy();
					swiperServWhy.update(true);
					if (swiperServWhy.activeIndex === 0) {
						swiperServWhy.slideTo(0);
					}
				}
			})
		} else {
			if (swiperServWhy.isInit) {
				swiperServWhy.destroy();
			}
		}
	}
}
;
	const sliderTechnologies = document.querySelector('.js--sl-technologies');

if (sliderTechnologies) {
	const sliderTechnologiesOffset = document.querySelector('.js--sl-technologies-offset');

	let spbTechnologies = 24;
	let spbTechnologiesLaptop = 16;
	let spbTechnologiesMobile = 8;

	let lefttechnologies = function lefttechnologies() {
		let offsetLeft;
		return offsetLeft = sliderTechnologiesOffset.offsetLeft + getScrollbarWidth()/2;
	};

	let swiperLicenses = new Swiper(sliderTechnologies, {
		init: false,
		slidesPerView: 'auto',
		freeMode: true,
		autoHeight: true,
		speed: 1000,
		slidesOffsetBefore: lefttechnologies(),
		slidesOffsetAfter: lefttechnologies(),
		spaceBetween: spbTechnologiesMobile,
		slideToClickedSlide: false,
		breakpoints: {
			768: {
				spaceBetween: spbTechnologiesLaptop,
				slidesOffsetBefore: lefttechnologies(),
				slidesOffsetAfter: lefttechnologies(),
			},
			992: {
				freeMode: false,
				slidesPerView: 2,
				slidesPerGroup: 2,
				spaceBetween: spbTechnologies,
				slidesOffsetBefore: 0,
				slidesOffsetAfter: 0,
			},
		},

        pagination: {
			el: '.js--sl-technologies-pag',
			clickable: true,
			bulletClass: 'slider__pag__bullet',
			bulletActiveClass: 'active'
		},

		on: {
			slideChange: function () {
			  updateFade(swiperLicenses, sliderTechnologies);
			},
			touchEnd: function () {
			  updateFade(swiperLicenses, sliderTechnologies);
			}
		}
	});

	swiperLicenses.init();
	updateFade(swiperLicenses, sliderTechnologies);

	window.addEventListener('resize', () => {
		if (window.innerWidth < 992) {
			swiperLicenses.params.slidesOffsetBefore = lefttechnologies();
			swiperLicenses.params.slidesOffsetAfter = lefttechnologies();
			swiperLicenses.update(true);
			if (swiperLicenses.activeIndex === 0) {
				swiperLicenses.slideTo(0);
			}
		}
	})

	window.addEventListener('orientationchange', () => {
		if (window.innerWidth < 992) {
			swiperLicenses.params.slidesOffsetBefore = lefttechnologies();
			swiperLicenses.params.slidesOffsetAfter = lefttechnologies();
			swiperLicenses.update(true);
			if (swiperLicenses.activeIndex === 0) {
				swiperLicenses.slideTo(0);
			}
		}
	})
}
;
	const sliderArticle = document.querySelector('.js-sl-article');

if (sliderArticle) {

	var swiperArticleThumbs = new Swiper(".js--sl-articlethumbs", {
		spaceBetween: 2,
		slidesPerView: "auto",
		freeMode: true,
		watchSlidesProgress: true,
    });

	let spbArticle = 24;
	let spbArticleLaptop = 16;
	let spbArticleMobile = 8;

	let swiperArticle = new Swiper(sliderArticle, {
		slidesPerView: 1,
		autoHeight: true,
		speed: 1000,
		spaceBetween: spbArticleMobile,
		thumbs: {
			swiper: swiperArticleThumbs,
		},
		on: {
			slideChange: function (swiper, index) {
				swiperArticleThumbs.slideTo(swiper.realIndex);
			},
		},
		breakpoints: {
			768: {
				spaceBetween: spbArticleLaptop,
			},
			992: {
				spaceBetween: spbArticle,
			},
		},
	});
}
;
})

const mapmain = document.querySelector('#map-home');

if (mapmain) {
    ymaps.ready(init);

    function init() {
        // Создаем карту
        let mapContacts = new ymaps.Map(mapmain, {
            center: [55.42977891477796, 37.545839433959934],
            zoom: 14,
            controls: ['zoomControl'],
            zoomMargin: [20]
        });

        // Точки на карте
        let placemarks = [
            {
                coords: [55.43531467121374, 37.55197806745907],
                hint: 'Томоград',
                balloon: '<b>Клиника на Федорова</b><br/>142181, Московская обл., город Подольск, ул. Федорова, дом 19'
            },
            {
                coords: [55.43018558664866, 37.54818950793458],
                hint: 'Томоград',
                balloon: '<b>Клиника на Комсомольской</b><br/>142100, Московская обл., город Подольск, ул. Комсомольская, дом 5'
            },
            {
                coords: [55.42644156929048, 37.532878999999994],
                hint: 'Томоград',
                balloon: '<b>Клиника на Кирова</b><br/>142110, Московская обл., город Подольск, ул. Кирова, дом 19<br/>'
            }
        ];

        // Создание меток и добавление их на карту
        placemarks.forEach((placemark, index) => {
            let mark = new ymaps.Placemark(placemark.coords, {
                hintContent: placemark.hint,
                balloonContent: placemark.balloon
            }, {
                iconLayout: 'default#image',
                iconImageHref: './img/ic-map-pin.png',
                iconImageSize: [38, 28],
                iconImageOffset: [-19, -14]
            });
            mapContacts.geoObjects.add(mark);
        });

		// Обработчик для кнопки приближения
		const linksToMark = document.querySelectorAll('.js--ypms-tomark');
		linksToMark.forEach((link) => {
			link.addEventListener('click', function(e) {
				e.preventDefault();
				indexMark = this.getAttribute('data-indexmark');
				// console.log(placemarks[indexMark])
				mapContacts.setCenter(placemarks[indexMark].coords, 17); // Увеличиваем зум при приближении

				const blockPosition = mapmain.getBoundingClientRect().top + window.scrollY;
				const offset = document.querySelector('.js--nheader').clientHeight
				window.scrollTo({
					top: blockPosition - offset,
					behavior: 'smooth'
				});
			})
		})

        // Отключаем зум при прокрутке
        mapContacts.behaviors.disable('scrollZoom');
    }
}
;




