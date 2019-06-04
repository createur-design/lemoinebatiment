(function ($, root, undefined) {

	$(function () {

		'use strict';

		$(window).on("load", function(){
			$("#loader").fadeOut(600);
		})
		// DOM ready, take it away
		// nav 
		$('.bt-menu').on('click', function () { 
			$('#menu').toggleClass('show');
		});
		$('.menu-item-has-children').on('click mouseover', function () {
			$('.sub-menu').removeClass('montre');
			$(this).find('.sub-menu').toggleClass('montre');
		});
		$('.menu-item-has-children').on('mouseleave', function () {
			$('.sub-menu').removeClass('montre');
		});

		//page accueil
		if($("body").hasClass("home")){
			console.log("welcome home!");
			$(".heroSlider").owlCarousel({
				items:1,
				loop:true,
				autoplay:true,
				autoplayTimeout: 7000,
				animateIn: 'slideInDown',
				animateOut: 'slideOutUp',
				onInitialized: animeTxt,
				onTranslated: animeTxt,
				onChanged: animeTxt,
				dots:false,
				nav:true
			});

			function animeTxt(){
				$(".owl-item a").removeClass("anime");
				$(".owl-item.active a").addClass("anime");
			}

			$(".carouselBlog").owlCarousel({
				dots: true,
				margin: 10,
				autoplay:true,
				loop:true,
				responsive : {
					// breakpoint from 0 up
					0 : {
						items: 1
					},
					// breakpoint from 480 up
					480 : {
						items: 2
					},
					// breakpoint from 768 up
					768 : {
						items: 3
					}
				}
			});
		}

		// CONTACT
		//  Au focus
		$('.field-input').focus(function(){
			$(this).parent().addClass('is-focused has-label');
		});
	
		// à la perte du focus
		$('.field-input').blur(function(){
			if($(this).val() == ''){
				$(this).parent().removeClass('has-label');
			}
			$(this).parent().removeClass('is-focused');
		});
	
		// si un champs est rempli on rajoute directement la class has-label
		$('.field-input').each(function(){
			if($(this).val() != ''){
				$(this).parent().addClass('has-label');
			}
		});
		

	});

})(jQuery, this);