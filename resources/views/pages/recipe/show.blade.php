@extends('layouts.app')

@section('content')
<div class="content">
<div class="container">

	 {{-- <h2>{{ __('Healthy recipes') }}</h2> --}}
	 <div class="d-flex justify-content-between">
		<div class="bread">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item" ><a class="breadcrumb__link" href="{{ route('recipes') }}">{{ __('recipes') }}</a></li> 
				<li class="breadcrumb-item active" aria-current="page">{{ $recipe->__('title') }}</li> 
				
			</ol>
		</div>

	</div>

	
	 <h3 class="mt-5">{{ $recipe->__('title ')}}</h3>
	 {{-- <hr class="featurette-divider"> --}}

    <div class="row featurette">
		
	
			
			<div class="col-md-12 mt-5">
				<div class="recipe__img ibg" style="width: 100%; height: 600px">
					<img class="ibg" src=" {{ Storage::disk('public')->url($image)}}" alt="" width="1200" height="500">
				</div>
			</div>

			<div class="col-md-3" style="overflow: hidden">
				<div class="recipe__sidebar ">
					<div class="recipe__sidebar-content" style="font-size: 16px; color: grey">
						<p><span class="text-muted">Donec ullamcorper</span></p>
				
						{{-- <ul class="recipe ">
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
							<li class="recipe">gfghghgh dfgg - 300 g</li>
						
						</ul> --}}
					
						{{-- {{preg_replace('<br>', '', nl2br($recipe->components)) }} --}}
						<div class="comp" style="white-space: pre-wrap">
							 {{ $recipe->__('components') }}
						</div>
					
					
						{{-- {{ htmlenities($recipe->components) }} --}}
						{{-- {{  html_entity_decode($recipe->components) }} --}}
						
					</div>
				</div>
			</div>

				<div class="col-md-9  mt-5">
					
					<p >
						{{ $recipe->__('description') }}
					</p>
					<p >
						{{ $recipe->__('description') }}
					</p>
					<div class="comp mb-5" style="white-space: pre-line; color:gray; font-size:18px">
						{{ $recipe->__('components') }}
				  </div>
				  <p >
					{{ $recipe->__('description') }}
				</p>
				</div>

				
				<div class="col md-9">
					<div class="d-flex justify-content-end  mb-3">
						{{-- <button type="submit" class="btn btn-primary">{{ __('Add to Cart') }}</button>  --}}
						<a href="" class="wave-btn">
							<span class="wave-btn__text">{{ __('добавить в корзину') }}</span>
							<span class="wave-btn__waves"></span>
						</a> 

					</div>
				</div>	
			
		
    </div>

	 
{{-- <hr class="featurette-divider"> --}}

   
@endsection