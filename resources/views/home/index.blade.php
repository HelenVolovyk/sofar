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
<section>
		<!--- Start Carousel Section -->
		{{-- <div class="container-fluid">
			@include('inc.slider')
		</div> --}}
		<!--- End Carousel Section -->
</section>



<div class="content">
	<div class="container">
		<div class="mt-4 mb-4  wow fadeInUp" >
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate atque asperiores nostrum quam enim obcaecati tempori tainerbus eveniet numquam, cumque porro ad, rerum repudiandae earum placeat, libero recusandae. Voluptate, praesentium laborum?</p>
		</div>
	</div>


<section>
	@include('home.prod')
</section>



	<p class="text-center  wow fadeInUp">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br> Debitis inventore quos consectetur dolorum ab, illo quaerat perferendis minima accusamus error nemo voluptatem fuga dolorem doloremque id odio in soluta accusantium?</p>


	<div class="container-fluid  wow fadeInUp" id="product__carousel">
		@include('inc.owlCarousel')

		<a class="more" href="{{ route('shop', [app()->getLocale()]) }}">{{ __('View more products') }}</a>
		
  </div>
 
{{-- @each('admin.images.show', $otherimage, 'otherimage') --}}
    
  	<section style="">
		{{-- @include('home.rec') --}}
	</section> 

	<section>
		@include('home.slick_one')
	</section>


  	<section style="">
		  <div class="last d-flex ">
			
					{{-- @include('home.inst') --}}
			 
			 
		  </div>
		
	</section> 

</div>


@endsection