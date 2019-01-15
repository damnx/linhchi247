(function($) {
	'use strict';

	// Slider
	$(".main-slider").slick({
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		speed: 300,
		arrows: true,
		fade: true,
		nextArrow: "<a href='' class='slick-next'><i class='icon-next'></i><span>Xem hình trước</span></a>",
		prevArrow: "<a href='' class='slick-prev'><i class='icon-prev'></i><span>Xem hình sau</span></a>",
		responsive: [
			{
				breakpoint: 992,
				settings: {
					arrows: false
				}
			}
		]
	});

	//Click to thumb, set class .active
	$(".thumb-img .thumb-img__item").click(function(e) {
		e.preventDefault();
		var slideIndex = $(this).index();
		$('.main-slider').slick('slickGoTo', parseInt(slideIndex));
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
		getItemPos();
	});
	
	//Click product img outside modal
	$(".product-img__main, .product-img__thumb .product-img__item").click(function(e) {
		e.preventDefault();
		$(".model-fullscr").fadeIn();
		$(".main-slider").slick("refresh");

		var slideIndex = $(this).index();
		$('.main-slider').slick('slickGoTo', parseInt(slideIndex));
		$(this).addClass("active");
		$(this).siblings().removeClass("active");
		addActive();
		getItemPos();
	});

	//Count item
	$(".sum-item").html($(".thumb-img .thumb-img__item").length);

	$(document).on('click', '.slick-arrow', function(){
	    addActive();
		getItemPos();
	});

	

	// On swipe event
	$(".main-slider").on('swipe', function(event, slick, direction) {
		addActive();
		getItemPos();
	});

	//Exit modal
	$(".exit-modal").click(function(e) {
		e.preventDefault();
		$(".model-fullscr").fadeOut();
	});


	//Set class .active on document loaded
	function addActive() {
		var slidePos = $(".main-slider").slick("slickCurrentSlide");
		var thumbItem = $(".thumb-img .thumb-img__item:nth-child(" + (slidePos + 1) + ")");
		thumbItem.addClass("active");
		thumbItem.siblings().removeClass("active");
	};

	function getItemPos() {
		$(".item-current").html($(".main-slider").slick('slickCurrentSlide') + 1);
	}

	// Check if overflow
	function fixOverFlow(parent, item) {
		var thumbImgWidth = parent.width();
		var	thumbWidthInside = item.length * item.outerWidth();
		if (thumbImgWidth < thumbWidthInside) {
		    // your element have overflow
		    parent.addClass("fix-overflow");
		} else {
		    // your element doesn't have overflow
		    parent.removeClass("fix-overflow");
		};
	};

	fixOverFlow($(".product-img__thumb"), $(".product-img__item"));
	fixOverFlow($(".thumb-img"), $(".thumb-img__item"));

	addActive();
	getItemPos();

	$(window).resize(function() {
		fixOverFlow($(".product-img__thumb"), $(".product-img__item"));
		fixOverFlow($(".thumb-img"), $(".thumb-img__item"));
	});

})(jQuery);