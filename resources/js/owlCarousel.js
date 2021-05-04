// const nextIcon = '<i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>';
// const prevIcon = '<i class="fa fa-arrow-right fa-2x" aria-hidden="true"></i>';
const nextIcon = '<i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>';
const prevIcon = '<i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>';

$(window).on('load', function(){
	$('.owl-carousel').owlCarousel({
		// autoplay: true,
		autoplayHoverPause: true,
		// autoplayTimeout: 2000,
		items:4,
		slideBy: 4,
		lazyLoad:true,
		nav: true,
		dots: false,
		loop: true,
		margin:10,
		animateOut: "fadeOut",
		//  stagePadding: 5,
		navText: [
			nextIcon,
			prevIcon	
		],
		responsive:{
				0:{
						items:1
				},
				600:{
						items:2
				},
				800:{
						items:3
				},
				1030:{
						items:3
				},
				1200:{
						items:4
				},
				1500:{
						items:5
				},
				1700:{
						items:6
				}
			}
		});
	});




	

