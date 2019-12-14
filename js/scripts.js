(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';

		// DOM ready, take it away
		$('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			adaptiveHeight: true,
			asNavFor: '.slider-nav',
			dots: false,
			customPaging : function(slider, i) {
				var thumb = $(slider.$slides[i]).data();
				return '<a class="dot">'+(i+1)+'</a>';},
				focusOnSelect: true,
			
		});
		$('.slider-nav').slick({
			arrows:true,
			slidesToShow: 5,
			vertical:true,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: true,
			customPaging : function(slider, i) {
			var thumb = $(slider.$slides[i]).data();
			return '<a class="dot">'+(i+1)+'</a>';},
			focusOnSelect: true,
			responsive: [
				{
					breakpoint: 768,
					settings: {
						slidesToShow: 1,
						slidesToScroll: 1,
						vertical:false,
						centerMode: true
					}
				}

			]
			
			});
	 
		$('a[data-slide]').click(function(e) {
			e.preventDefault();
			var slideno = $(this).data('slide');
			$('.slider-nav').slick('slickGoTo', slideno - 1);
		});
		var $win = $(window);

		var $pos = 140;
			$win.scroll(function () {
				 if ($win.scrollTop() <= $pos)
					 $('.sponsors').removeClass('fijar');
				 else {
					 $('.sponsors').addClass('fijar');
				 }
			 });
		

		
	});
	
})(jQuery, this);
