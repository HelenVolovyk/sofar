<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'STOR') }}</title> --}}
	 {{-- <title>MyShop</title> --}}
	 @yield('header')

    <!-- Scripts -->
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
	 <script src="{{ asset('js/app.js') }}" defer></script>
	
	 
    @stack('scripts')
   


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	 <link rel="preconnect" href="https://fonts.gstatic.com">
	 <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
	 
    <!-- Styles -->
   
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('slick/slick.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('slick/slick-theme.css') }}" rel="stylesheet" media="all">
	 

	
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" /> 
	 <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<script src="{{  asset('js/wow.min.js')  }}"></script>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script>
		<script type="text/javascript" src="{{ asset('slick/slick.min.js') }}"></script> 
<script src="https://use.fontawesome.com/df92d7a464.js"></script>	 
<script>
	new WOW().init();
</script>
  
</head>

	<body style="opacity: 0; transition: .5s;">
		<div id="app">
			<div class="wrapper">
		
			@include('inc.header')
			@include('inc.message')
			@show
	
			

		
			
					{{-- <main > --}}
						
							
						
								@yield('content')
							
							
									
								<div class="go">	
								<a class="go__phone" href="tel:123-56-78"><i class="fa fa-phone" aria-hidden="true"></i></a>
								{{-- <div class="go__search">
									
									@include('inc.search')
								

								</div> --}}
								<a class="gotop" href=""><i class="fa fa-arrow-up"></i></a>
							</div>	
					{{-- </main> --}}
				</div>
		</div>

	
		@include('layouts.footer')
		
		@stack('footer-scripts')
		{{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
		crossorigin="anonymous"></script> --}}

	 <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
	 <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	  <script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script> 
	  <script defer src="{{ asset('js/owl.carousel.min.js') }}"></script> 
	  <script defer src="{{ asset('slick/slick.js') }}"></script> 
	  
	  {{-- <script defer src="{{ asset('js/jquery.flexslider.js') }}"></script> 
	  <script defer src="{{ asset('js/jquery.flexslider-min.js') }}"></script>  --}}
	 
	 <script>
		 $(document).ready(function(){
			 $('body').css('opacity', '1');
		 });
	 </script>
		
		
	</body>
</html>