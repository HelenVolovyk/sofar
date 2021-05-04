		 var bl = $('.gotop, .go__search, .go__phone')
		 window.addEventListener('scroll', function() {
			 var st = document.documentElement.scrollTop
			
			 if (st > 300 ) {
				 bl.css('opacity', '1')
			
			 }else{
				bl.css('opacity', '0')
			 }
		 })