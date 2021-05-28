@extends('layouts.app')

@section('content')
<div class="container">
		@if(Session::has('success'))
		<div class="row">
			<div class="col-sm-6 col-md-4">
				<div class="alert alert-success">
				{{Session::get('success')}}
				</div>
			</div>
		</div>
		@endif
</div>


		 <!--- Start Carousel Section -->
			
	 {{-- <div class="container-fluid"> --}}

		<div class="content">
			@include('inc.slider')
		</div>
		{{-- </div>  --}}
		<!--- End Carousel Section --> 


@include('home.slick_one')


<main>
	<div id="wb">
		 <div class="row centered">

			  <div class="col-lg-12">
					<div class="wb_cont mt-5  wow fadeInUp"></div>
					<h2>Lorem ipsum dolor sit amet consectetur adipisicing elit.</h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
						 labore
						 et dolore magna aliqua</p>
			  </div>
			  {{-- <br><br><br></br> --}}
		 </div>
	</div>
</main>


	<div class="row centered">
		<div class="col-lg-12 m-auto">
			 <div class="lg_cont wow fadeInUp">
				 <span>медицина и косметология</span>
				  <div class="sofar">
						<h2>SOFAR </h2>
						<i class="fa fa-plus" aria-hidden="true"></i>
				  </div>
			</div>
		</div>
	</div>


	

	<section>
		@include('home.remAndSell')
	</section>



	<p class="text-center  wow fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Debitis inventore quos consectetur dolorum ab, illo quaerat perferendis minima accusamus error nemo voluptatem fuga dolorem doloremque id odio in soluta accusantium?</p>


	<div class="container-fluid  wow fadeInUp" id="product__carousel">
		@include('inc.owlCarousel')

		<a class="more" href="{{ route('shop', [app()->getLocale()]) }}">{{ __('View more products') }}</a>
		
  </div>
 

    
  	<section>
		{{-- @include('home.rec') --}}
	</section> 

	<section>
	
	</section>


  	<section style="">
		  <div class="last d-flex ">
			
					{{-- @include('home.inst') --}}
			 
			 
		  </div>
		
	</section> 

</div>


@endsection