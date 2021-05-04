 //$(window).on('load', function(){
	$(window).on('load', function(){
		$('#owl-slideshow').owlCarousel({
		items:4,
		loop:true,
		margin:10,
		autoplay:true,
		autoplayTimeout:2000,
		autoplayHoverPause:true,
  
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
		$('.play').on('click',function(){
			owl.trigger('play.owl.autoplay',[1000])
	  })
	  $('.stop').on('click',function(){
			owl.trigger('stop.owl.autoplay')
		})
	});




