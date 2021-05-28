$(function(){
	$('.form__btn_3').hover(
	function(){
			
		 $('.yes').css('opacity', '1');
		 $('.yes').css('transition', '0.5s ease-out');
	},	
		function(){
			
			$('.yes').css('opacity', '0');
			 $('.yes').css('transition', '0.5s ease-out');
			}	
		);	
});