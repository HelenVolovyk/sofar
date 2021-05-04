<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'STOR') }}</title>-->
    <title>Admin: @yield('title')</title>

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
	 <link href="{{ asset('css/hover-min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet" media="all">
	 <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet" media="all">
	 

	
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" /> 
	 <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
<script src="{{  asset('js/wow.min.js')  }}"></script>
<script src="https://use.fontawesome.com/df92d7a464.js"></script>	 
<script>
	new WOW().init();
</script>
</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    STOR
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Categories<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                                <a class="dropdown-item" href="{{ route('admin.categories.index') }}" >
                                    {{ __('Categories List') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.categories.create') }}" >
                                    {{ __('Create Category') }}
                                </a>

                            
                            </div>
                        </li>
                    
                    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                               Products<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                                <a class="dropdown-item" href="{{ route('admin.products.index') }}" >
                                    {{ __('Products List') }}
                                </a>
                                <a class="dropdown-item" href="{{ route('admin.products.create') }}" >
                                    {{ __('Create Product') }}
                                </a>

                            
                            </div>
                        </li>
                    
                    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Users<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                               <a class="dropdown-item" href="{{ route('admin.users') }}" >
                                    {{ __('Users List') }}
                               </a> 
                               <a class="dropdown-item" href="{{ route('admin.users.orders') }}" >
                                    {{ __('Users Orders') }}
                               </a> 
                                                         
                            </div>
                        </li>
                    
                    
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Sliders<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                               <a class="dropdown-item" href="{{ route('admin.sliders.index') }}" >
                                    {{ __('Sliders List') }}
                               </a> 
                                                                                  
                               <a class="dropdown-item" href="{{ route('admin.sliders.create') }}" >
                                    {{ __('Slider Create') }}
                               </a> 
                                                                                      
                            </div>
								</li>
								
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             Images<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                               <a class="dropdown-item" href="{{ route('admin.images.index') }}" >
                                    {{ __('Images List') }}
                               </a> 
                                                                                  
                               <a class="dropdown-item" href="{{ route('admin.images.create') }}" >
                                    {{ __('Image Upload') }}
                               </a> 
                                                                                      
                            </div>
                        </li>
								
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                             Recipes<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                              
                               <a class="dropdown-item" href="{{ route('admin.recipes.index') }}" >
                                    {{ __('Recipes List') }}
                               </a> 
                                                                                  
                               <a class="dropdown-item" href="{{ route('admin.recipes.create') }}" >
                                    {{ __('Recipe Create') }}
                               </a> 
                                                                                      
                            </div>
                        </li>
                    
                       
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(auth()->user()->IsAdmin)
                                    <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif

@if(session('customError'))
<div class="alert alert-warning">
    {{session('customError')}}
</div>
@endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    @stack('footer-scripts')
</body>
</html>
