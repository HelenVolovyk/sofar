$(document).ready(function(){
	$('.ac-block__title').click(function(event){
		if($('.ac-block').hasClass('one')){
			$('.ac-block__title').not($(this)).removeClass('active');
			$('.ac-block__text').not($(this).next()).slideUp(300);
		}
		$(this).toggleClass('active').next().slideToggle(300);
		 
	});
});