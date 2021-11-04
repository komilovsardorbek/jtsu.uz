/*--------------------- Copyright (c) 2020 -----------------------
[Master Javascript]
Project: Multifarious Services - Responsive HTML Template 
Version: 1.0.0
Assigned to: Theme Forest
-------------------------------------------------------------------*/
(function ($) {
	"use strict";
	/*-----------------------------------------------------
		Function  Start
	-----------------------------------------------------*/
	var Multifarious = {
		initialised: false,
		version:1.0,
		mobile: false,
		init: function () {
			if (!this.initialised) {
				this.initialised = true;
			} else {
				return;
			}
			/*-----------------------------------------------------
                Function Calling
            -----------------------------------------------------*/
			this.preLoader();
			this.searchBox();
			this.wowAnimation();
			this.navMenu();
			this.focusText();
			this.partner();
			this.topButton();
			this.waTestimonial();
			this.waPartner();
			this.isotop_gallery();
			// this.wa_mpa();
			this.popupGallery();
			this.ScrollTop();
		},

		/*-----------------------------------------------------
         Fixed Header
        -----------------------------------------------------*/
		ScrollTop: function(){
			if($('.fixed_header').length > 0){
				$(window).scroll(function() {
					var scroll = $(window).scrollTop();

					if (scroll >= 10) {
						$(".fixed_header").addClass("fixed");
					}
					else
					{
						$(".fixed_header").removeClass("fixed");
					}

				});
			}
		},
		/*-----------------------------------------------------
            Fix Preloader
        -----------------------------------------------------*/
		preLoader: function () {
			$(window).on('load', function () {
				$(".preloader_wrapper").removeClass('preloader_active');
			});
			jQuery(window).on('load', function () {
				setTimeout(function () {
					jQuery('.preloader_open').addClass('loaded');
				}, 100);
			});
		},

		/*-----------------------------------------------------
            Fix Search Bar & Cart
        -----------------------------------------------------*/
		searchBox: function() {
			$('.searchBtn').on("click", function() {
				$('.searchBox').addClass('show');
			});
			$('.closeBtn').on("click", function() {
				$('.searchBox').removeClass('show');
			});
			$('.searchBox').on("click", function() {
				$('.searchBox').removeClass('show');
			});
			$(".search_bar_inner").on('click', function() {
				event.stopPropagation();
			});
		},


		/*-----------------------------------------------------
				Fix Gallery Magnific Popup
        -----------------------------------------------------*/
		popupGallery: function () {
			jQuery(document).ready(function(){
				$('.popup_gallery4').magnificPopup({
					delegate: 'a',
					type: 'image',
					tLoading: 'Loading image #%curr%...',
					mainClass: 'mfp-img-mobile',
					gallery: {
						enabled: true,
						navigateByImgClick: true,
						preload: [0,1] // Will preload 0 - before current, and 1 after the current image
					},
					image: {
						tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
						titleSrc: function(item) {
							return item.el.attr('title') + '<small></small>';
						}
					}
				});
			});
		},
		/*-----------------------------------------------------
            Fix Animation
        -----------------------------------------------------*/
		wowAnimation: function () {
			new WOW().init();
		},

		/*-----------------------------------------------------
            Fix Mobile Menu
        -----------------------------------------------------*/
		navMenu: function () {
			let w = window.innerWidth;
			if (w <= 991) {
				$(".main_menu_wrapper>ul li").on('click', function () {
					$(this).find('ul.sub_menu').slideToggle();

				});
				$(".main_menu_wrapper>ul").on('click', function (e) {
					e.stopPropagation();
				});
				$(".menu_btn").on('click', function (e) {
					e.stopPropagation();
					$(".main_menu_wrapper, .menu_btn_wrap").toggleClass("open");
				});
				$("body").on('click', function () {
					$(".main_menu_wrapper, .menu_btn_wrap").removeClass("open");
				});
			}
		},

		/*-----------------------------------------------------
            Fix  On focus Placeholder
        -----------------------------------------------------*/
		focusText: function () {
			let place = '';
			$('input,textarea').focus(function () {
				place = $(this).attr('placeholder');
				$(this).attr('placeholder', '');
			}).blur(function () {
				$(this).attr('placeholder', place);
			});
		},

		/*-----------------------------------------------------
            Fix Partner Slider
        -----------------------------------------------------*/
		partner: function () {
			var PartnerSwiper = new Swiper('.partner_slider.swiper-container', {
				autoHeight: false,
				autoplay: true,
				spaceBetween: 30,
				slidesPerView: 8,
				loop: true,
				speed: 2000,
				breakpoints: {
					0: {
						slidesPerView: 2,
						spaceBetween: 0
					},
					575: {
						slidesPerView: 2,
						spaceBetween: 10
					},
					767: {
						slidesPerView: 4,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 6,
						spaceBetween: 20
					},
					1200: {
						slidesPerView: 6,
						spaceBetween: 30
					}
				}
			});
		},

		/*-----------------------------------------------------
            Fix GoToTopButton
        -----------------------------------------------------*/
		topButton: function () {
			var scrollTop = $("#scroll");
			$(window).on('scroll', function () {
				if ($(this).scrollTop() < 500) {
					scrollTop.removeClass("active");
				} else {
					scrollTop.addClass("active");
				}
			});
			$('#scroll').click(function () {
				$("html, body").animate({
					scrollTop: 0
				}, 2000);
				return false;
			});

			$(function() {
				$('.go_to_demo').click (function() {
					$('html, body').animate({scrollTop: $('#go_to_demo').offset().top }, 'slow');
					return false;
				});
			});
		},

		/*-----------------------------------------------------
            web agency Testimonial Slider
        -----------------------------------------------------*/
		waTestimonial: function () {
			var TestimonialSwiper = new Swiper('.wa_testimonial_slider .swiper-container.s2', {
				autoHeight: false,
				autoplay: false,
				loop: true,
				spaceBetween: 0,
				centeredSlides: false,
				speed: 1500,
				navigation: {
					nextEl: '.wa_Testimonial_wrapper .wa_test_next',
					prevEl: '.wa_Testimonial_wrapper .wa_test_prev',
				},
			});
		},
		/*-----------------------------------------------------
            Web agency Partner Slider
        -----------------------------------------------------*/
		waPartner: function () {
			var partnersSwiper = new Swiper('.wa_partner_wrapper .swiper-container', {
				autoHeight: false,
				autoplay: true,
				spaceBetween: 60,
				slidesPerView: 4,
				loop: true,
				speed: 1500,
				navigation: {
					nextEl: '.wa_partner_wrapper .wa_test_next',
					prevEl: '.wa_partner_wrapper .wa_test_prev'
				},
				breakpoints: {
					0: {
						slidesPerView: 1,
						spaceBetween: 0
					},
					575: {
						slidesPerView: 1,
						spaceBetween: 10
					},
					767: {
						slidesPerView: 2,
						spaceBetween: 20
					},
					992: {
						slidesPerView: 3,
						spaceBetween: 20
					},
					1200: {
						slidesPerView: 4,
						spaceBetween: 30
					}
				}
			});
		},
		/*-----------------------------------------------------
            Web agency isotop gallery
        -----------------------------------------------------*/
		isotop_gallery: function() {
			let galleryId = $('.gallery_grid');
			if(galleryId.length > 0){
				galleryId.isotope({
					itemSelector: '.grid-item',
					filter: '*'
				});
				$('.wa_project_gallery > .gallery_nav > ul > li').on( 'click', 'a', function() {
					// filter button click
					var filterValue = $( this ).attr('data-filter');
					$('.gallery_grid').isotope({ filter: filterValue });

					//active class added
					$('a').removeClass('gallery_active');
					$(this).addClass('gallery_active');
				});
			}
		}
	};
	Multifarious.init();
})(jQuery);
