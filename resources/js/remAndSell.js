//* photo hover
$(function(){
	$('.ddd').hover(
	function(){
		 $('.ddd_cont').css('opacity', '1');
		 $('.ddd_cont').css('transition', '0.5s ease-out');
		
		 $('.ddd img').css('transform', 'scale(1.2)');
		 $('.ddd img').css('transition', '0.5s ease-out');
		
	},	
		function(){
			 $('.ddd_cont').css('opacity', '0');
			 $('.ddd img').css('transform', 'scale(1)');
			 $('.ddd img').css('transition', '0.5s ease-out');
			}	
		);	
		
});
$(function(){
	$('.eee').hover(
	function(){
		 $('.eee_cont').css('opacity', '1');
		 $('.eee_cont').css('transition', '0.5s ease-out');
		
		 $('.eee img').css('transform', 'scale(1.2)');
		 $('.eee img').css('transition', '0.5s ease-out');
	},	
		function(){
			 $('.eee_cont').css('opacity', '0');
			 $('.eee img').css('transform', 'scale(1)');
			 $('.eee img').css('transition', '0.5s ease-out');
			}	
		);	
});

$(function(){
	$('.uc__right-ph').hover(
	function(){
			
		 $('.uc__right-ph img').css('transform', 'scale(1.2)');
		 $('.uc__right-ph img').css('transition', '0.5s ease-out');
	},	
		function(){
			
			 $('.uc__right-ph img').css('transform', 'scale(1)');
			 $('.uc__right-ph img').css('transition', '0.5s ease-out');
			}	
		);	
});