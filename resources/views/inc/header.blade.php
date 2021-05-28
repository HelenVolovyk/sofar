@include('inc.name')
  @section('navbar')
  <?php $url = $_SERVER["REQUEST_URI"];?>

	
  
	 <div class="header__body">
		

		<nav class="header__menu">
		
			<div class="container">
			<ul class="header__list">
				
				
				<li class="header__link">
					<a class="header__link  <?php if ($url == "/shares") { echo ' active';}?>" href={{route('page', [app()->getLocale(),'shares'])}}>{{ __('РЕМОНТ') }}</a>
				</li>
					<li class="header__link">
						<a class="header__link <?php if ($url == "/shop") { echo ' active';}?>" href={{route('shop', [app()->getLocale()])}}>{{ __('ПРОДАЖА') }}</a>
					</li>
				
					<li class="header__link">
						<a class="header__link  <?php if ($url == "/payment") { echo ' active';}?>" href={{route('page', [app()->getLocale(), 'payment' ])}}>{{ __('ОБУЧЕНИЕ') }}</a>
					</li>
				
					<li class="header__link">
						<a class="header__link  <?php if ($url == "/recipes") { echo ' active';}?>" href={{route( 'recipes', [app()->getLocale()])}}>{{ __('НОВОСТИ') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link  <?php if ($url == "/about") { echo ' active';}?>" href={{route('page', [app()->getLocale(),'about'])}}>{{ __('About') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link  <?php if ($url == "/contact") { echo ' active';}?>" href="{{ route('page', [app()->getLocale(),'contact']) }}">{{ __('Contact') }}</a>
					</li>
					<li class="header__link">
						<a class="header__link" >
								т.(093) 123 11 11
						</a>
					</li>
					
				

				


					<div class="header__lang">
						<div class="lang mt-2">
							@if(count(config('app.languages')) > 1)
							
								<li class="nav-item dropdown d-md-down-none ">
									<a class="header__link " data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
												{{ strtoupper(app()->getLocale()) }}
									</a>
									<div class="dropdown-menu dropdown-menu-right">
											@foreach(config('app.languages') as $langLocale => $langName)
												<a class="dropdown-item" href="{{ url()->current() }}?change_language={{ $langLocale }}">{{ strtoupper($langLocale) }} ({{ $langName }})</a>
										
											@endforeach
									</div>
								</li>
								@endif 
						</div>  
					</div>
				
			<div class="header__enter">
				@guest
                           
				<li class="nav-item">
					 <a class="header__link" href="{{ route('login', [app()->getLocale()]) }}"><i class="fa fa-user-o" aria-hidden="true"></i></a>
				</li>		
			@else
					<li class="nav-item dropdown ml-2">
						<a id="navbarDropdown" class="header__link nav-link dropdown-toggle font-weight-bold" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }} 
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							@if(auth()->user()->IsAdmin)
							<a class="dropdown-item" href="{{ route('admin.dashboard', [app()->getlocale()]) }}">
									{{ __('Dashboard') }}
							</a>
							@endif
							@if(auth()->user()->IsUser)
							<a class="dropdown-item" href="{{ route('user.profile', [app()->getlocale()]) }}">
									{{ __('My Profile') }}
							</a>
						
							<a class="dropdown-item" href="{{ route('user.wishlist', [app()->getlocale()]) }}">
									{{ __('My WishList') }}
							</a>
							@endif
							<a class="dropdown-item" href="{{ route('user.order', [app()->getlocale()]) }}">
									{{ __('My Orders') }}
							</a>
							<a class="dropdown-item" href="{{ route('logout', [app()->getlocale()]) }}"
								onclick="event.preventDefault();
													document.getElementById('logout-form').submit();">
									{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout', [app()->getlocale()]) }}" method="POST" style="display: none;">
									@csrf
							</form>
						</div>
					</li>
			@endguest
			</div>
	
		
			</ul>
		
			{{-- <div class="nav__search">		
					@include('inc.search')
			</div> 		
						 --}}
			
		</div>

		
	
	</nav>	
	
				
						
					
	{{-- @include('inc.searchMob')			 --}}
			
		
	</div>
</header>


