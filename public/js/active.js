/*********************************************************************************

	Template Name: Blazen - Event and Exhibition Bootstrap4 Template
	Description: A perfect multi-concept template for event or event management websites. It comes with nice and clean design.
	Version: 1.0

	Note: This is active js. Plugins activation code here.

**********************************************************************************/


/*===============================================================================
			[ INDEX ]
=================================================================================

	Scroll Up Activation
	Fake Loader
	Banner Slider Active
	Events Slider Active
	Testimonial Slider
	Brand Logo Slider
	Popular Post SLider Active
	Countdown Activation
	Portfolio Popup Gallery
	Mobilemenu Activation
	Odometer Activation
	Instafeed Activation
	Nice Select Activation
	Twitterfeed Activation
	Sticky Sidebar Activation
	Parallax Activation

=================================================================================
			[ END INDEX ]
================================================================================*/

(function ($) {
	'use strict';


	/* Scroll Up Activation */
	$.scrollUp({
		scrollText: '<i class="fa fa-angle-up"></i>',
		easingType: 'linear',
		scrollSpeed: 900,
	});




	/* Fake Loader */
	$('.fakeloader').fakeLoader({
		timeToHide: 1200,
		bgColor: '#de2532',
		spinner: 'spinner4',
	});




	/* Banner Slider Active */
	$('.banner-slider-active').slick({
		autoplay: false,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: false,
		dotsClass: 'cr-slider-dots'
	});





	/* Events Slider Active */
	$('.events2-wrap-inner').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: false,
		dotsClass: 'cr-slider-dots',
		fade: true,
	});




	/* Testimonial Slider */
	$('.testimonial-wrap').slick({
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: false,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		adaptiveHeight: true,
		dots: true,
		dotsClass: 'cr-slider-dots',
		fade: false,
	});


	/* Brand Logo Slider */
	$('.brand-logos-slider').slick({
		slidesToShow: 6,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 1199,
			settings: {
				slidesToShow: 5,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 992,
			settings: {
				slidesToShow: 4,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 768,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});





	/* Popular Post SLider Active */
	$('.polular-post-slider-active').slick({
		slidesToShow: 3,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		arrows: true,
		prevArrow: '<span class="cr-navigation cr-navigation-prev"><i class="fa fa-angle-left"></i></span>',
		nextArrow: '<span class="cr-navigation cr-navigation-next"><i class="fa fa-angle-right"></i></span>',
		dots: false,
		responsive: [{
			breakpoint: 991,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 1
			}
		},
		{
			breakpoint: 576,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			}
		}
	]
	});




	/* Countdown Activation */
	$('.event-countdown').each(function () {
		var $this = $(this),
			finalDate = $(this).data('countdown');
		$this.countdown(finalDate, function (event) {
		$this.html(event.strftime(
		'<div class="event-countdown-box event-countdown-day"><h2 class="time-count">%-D</h2><h4>Days</h4></div><div class="event-countdown-box event-countdown-hour"><h2 class="time-count">%-H</h2><h4>Hour</h4></div><div class="event-countdown-box event-countdown-minute"><h2 class="time-count">%M</h2><h4>Min</h4></div><div class="event-countdown-box event-countdown-second"><h2 class="time-count">%S</h2><h4>Sec</h4></div>'));
		});
	});




	/* Portfolio Popup Gallery */
	$('.portfolio-popup-gallery-active').lightGallery({
		selector: '.portfolio'
	}); 




	/* Mobilemenu Activation */
	$('nav.bn-navigation').meanmenu({
		meanMenuClose: '<img src="images/icons/icon-close.png" alt="close icon">',
		meanMenuCloseSize: '18px',
		meanScreenWidth: '991',
		meanExpandableChildren: true,
		meanMenuContainer: '.mobile-menu',
		onePage: true
	});



	
	/* Odometer Activation */
	if( $('.odometer').length ){

		$(window).on('scroll', function(){

			function winScrollPosition() {
				var scrollPos = $(window).scrollTop(),
					winHeight = $(window).height();
				var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
				return scrollPosition;
			}

			var scrollPos = $(this).scrollTop();
			var elemOffset = $('.odometer').offset().top;
			var winHeight = $(window).height();

			if ( elemOffset < winScrollPosition()) {

				$('.odometer').each(function(){
					$(this).html($(this).data('count-to'));
				});

			}
			
		});

	}

	/* Instafeed Activation */

	if($('#sidebar-instagram-feed').length){

		var userFeed = new Instafeed({
			get: 'user',
			userId: 6665768655,
			accessToken: '6665768655.1677ed0.313e6c96807c45d8900b4f680650dee5',
			target: 'sidebar-instagram-feed',
			resolution: 'standard_resolution',
			limit: 4,
			template: '<div class="sidebar-instafeed-single"><a href="{{link}}" target="_new"><img src="{{image}}" /><span>{{caption}}</span></a></div>',
			
			after: function() {

				$('#sidebar-instagram-feed').slick({
					slidesToShow: 1,
					infinite: true,
					autoplay: true,
					autoplaySpeed: 5000,
					arrows: false,
					dots: true,
					adaptiveHeight: true,
				});

			},
		});
		userFeed.run();

	}






	/* Nice Select Activation */
	$('select').niceSelect();


	/* Twitterfeed Activation */

	if($('#sidebar-twitter-feed').length){

		var configProfile = {
			"profile": {"screenName": 'akcent_chester'},
			"domId": 'sidebar-twitter-feed',
			"maxTweets": 2,
			"enableLinks": true, 
			"showUser": false,
			"showTime": true,
			"showImages": true,
			"lang": 'en'
		};
		twitterFetcher.fetch(configProfile);

	}


	/* Sticky Sidebar Activation */
	$('.sticky-sidebar-active').theiaStickySidebar({
		additionalMarginTop: 30
	});



	/* Parallax Activation */
	$('.bg-parallax').jarallax();




})(jQuery);
