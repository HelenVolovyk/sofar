@extends('layouts.app')

@section('title')
All Categories
@endsection

@section('content')



<div class="content">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item"><a class="breadcrumb__link" href="{{ route('shop', [app()->getLocale()]) }}">{{ __('Shop') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ __('All Categories') }}</li>
				</ol>
			</div>
 
  
	 {{-- <div class="">
		@include('inc.search')
	</div> --}}
 
		</div>
	</div>

		  <h1 class="text-center mt-2">{{ __('All Categories') }}</h1>

		  <div class="categories">
		<div class="col-md-12 mt-5">
  
  			<div class="categories__container text-center">
				<div class="categ__text pt-3 pb-3">
    			@foreach($categories->chunk(3) as $categoryChunk)
					<div class="row d-flex justify-content-around">
					
  					@foreach($categoryChunk as $category)

					@include('shop.category.categ')

					@endforeach
				</div>
					
				@endforeach
			</div>
  			</div>
		</div>
	</div>

		<div id="portfolio" class="offset">
			<div class="jumbotron jumbotron-fluid mt-5">
				<div class="container-fluid mt-5">
				<h3 class="heading text-center">Fluid jumbotron</h3>
				<div class="heading__underline"></div>
				</div>
			</div> 
		</div>
		

	
		<div class="text-center">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quas reprehenderit fuga doloremque explicabo labore odio sed, earum atque? Pariatur voluptatibus error ipsum atque ut nemo aliquid numquam et quis.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quas reprehenderit fuga doloremque explicabo labore odio sed, earum atque? Pariatur voluptatibus error ipsum atque ut nemo aliquid numquam et quis.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quas reprehenderit fuga doloremque explicabo labore odio sed, earum atque? Pariatur voluptatibus error ipsum atque ut nemo aliquid numquam et quis.</p>
		</div>

		<div class=" d-flex justify-content-center">
		 <div class="col-md-9 row no-padding">
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/1.png" target="_blank">
						<img src="img/portfolio/1.png" alt="">
					</a>
				 </div>
			 </div>
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/2.png" target="_blank">
						<img src="img/portfolio/2.png" alt="">
					</a>
				 </div>
			 </div>
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/3.png" target="_blank">
						<img src="img/portfolio/3.png" alt="">
					</a>
				 </div>
			 </div>
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/4.png" target="_blank">
						<img src="img/portfolio/4.png" alt="">
					</a>
				 </div>
			 </div>
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/5.png" target="_blank">
						<img src="img/portfolio/5.png" alt="">
					</a>
				 </div>
			 </div>
			 <div class="col-sm-4">
				 <div class="portfolio">
					 <a href="img/portfolio/6.png" target="_blank">
						<img src="img/portfolio/6.png" alt="">
					</a>
				 </div>
			 </div>
		 </div> 

		</div>
</div>
@endsection
