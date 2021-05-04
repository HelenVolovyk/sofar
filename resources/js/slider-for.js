function initSlider(){

$('.slider-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false,
	fade: true,
	asNavFor: '.slider-nav'
 });
 $('.slider-nav').slick({
	slidesToShow: 3,
	slidesToScroll: 1,
	asNavFor: '.slider-for',
	dots: false,
	centerMode: false,
	focusOnSelect: true,
	responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			 slidesToShow: 3,
			 slidesToScroll: 1,
			 infinite: false,
			 dots:false
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			 slidesToShow: 3,
			 slidesToScroll: 1,
			 infinite: false,
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			 slidesToShow: 1,
			 slidesToScroll: 1,
			 infinite: false,
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	 ]
 });
 };

// $(window).load(function() {
// 	// The slider being synced must be initialized first
// 	$('#carousel').flexslider({
// 	  animation: "slide",
// 	  controlNav: false,
// 	  animationLoop: false,
// 	  slideshow: false,
// 	  itemWidth: 210,
// 	  itemMargin: 5,
// 	  asNavFor: '#slider'
// 	});
  
// 	$('#slider').flexslider({
// 	  animation: "slide",
// 	  controlNav: false,
// 	  animationLoop: false,
// 	  slideshow: false,
// 	  sync: "#carousel"
// 	});
//  });