
$(document).ready(function () {
	$('.slick_cl__one').slick({
		slidesToShow: 5,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 2000,
		  responsive: [
			{
				 breakpoint: 1800,
				 settings: {
					  slidesToShow: 3,
					  slidesToScroll: 3,
				 }
			},
		
			{
				 breakpoint: 900,
				 settings: {
					  slidesToShow: 2,
					  slidesToScroll: 2
				 }
			},
			{
				 breakpoint: 740,
				 settings: {
					  slidesToShow: 1,
					  slidesToScroll: 1
				 }
			}
 		]
	})
});


$(document).ready(function () {
    $('.slick_cl').slick()
});