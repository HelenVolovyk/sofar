@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">

	<div class="container">
	<hr class="featurette-divider">
	@include('inc.breadcrumb')
</div>
<section id="payment__one">
	<div class="container-fluid  wow fadeInUp" >
		<div class="payment__box ">
				<div class="payment__box-square ibg">
					<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(3)->img_src)}}" alt="">
				</div>
		</div>
	
			<div class="payment__block">
				<div class="grey">Donec sed odio dui. Cras justo odio, dapibus ac </div>
				<div class="white">Donec sed odio dui. Cras justo odio, dapibus ac </div>
			</div>	
	</div>	
</section>

	<div class="container-fluid mt-5 mb-5 wow fadeInUp" data-wow-duration="2s">
 
		{{-- <h2>{{ __('Payment and delivery') }}</h2> --}}

		<div class="row">
			<div class="payment">
				<div class="payment__content">
					<div class="">
						<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
						<p class="">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
				
					</div>
				</div>	
				<div class="payment__photo mt-3 mb-3">
					<div class="p_photo ibg ">
						
							<img class="ibg" src="{{Storage::disk('public')->url($otherimages->find(4)->img_src)}}" alt="" >
					</div>
				</div>
			</div>
		 </div>
	</div>


	
	
	<div class="paiment-container__left  wow fadeInUp" data-wow-duration="2s">
		<!-- Example row of columns -->
		
		  <div class="col-md-6 col-sm-12">
			  <div class="payment__title">
				<i class="fa fa-money fa-3x pr-3" aria-hidden="true"></i> 
			 	<h2 class="payment__title">Heading</h2>
			</div>
		
			<p class="heading" >
			 Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
		</p>
			 {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
			
		  </div>
		</div> 

		<div class="paiment-container__right wow fadeInUp" data-wow-duration="2s">
		  <div class="col-md-5 col-sm-12">
			<div class="payment__title">
			<i class="fa fa-credit-card fa-3x pr-3" aria-hidden="true"></i>
			 <h2>Heading</h2>
			</div>
		
			 <p class="heading" >Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
			Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			 {{-- <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p> --}}
		
		  </div>
		
		</div>
  
		
  
	
	

	{{-- <div class="container-fluid" style="background-color: rgb(235, 235, 235)">
		
		<div class="tabs">
			
			<nav class="tabs__items">
				<a href="#tab_01" class="tabs__item"><span>
					<i class="fa fa-money pr-1" aria-hidden="true"></i> 
					Первая</span></a>
				<a href="#tab_02" class="tabs__item"><span>
					<i class="fa fa-credit-card pr-1" aria-hidden="true"></i>
					Вторая</span></a>
				<a href="#tab_03" class="tabs__item"><span>
					<i class="fa fa-cc-visa pr-1" aria-hidden="true"></i>
					Третья</span></a>
			</nav>
			<div class="tabs__body">
				<div id="tab_01" class="tabs__block">
					<p>
					Первая.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					Первая.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					</p>
				</div>
			
				<div id="tab_02" class="tabs__block">
					<p>
					Вторая.  Перваяраяorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					Вторая.  Перваяраяorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore?
					</p>
				</div>
			
				<div id="tab_03" class="tabs__block">
					<p>
					Третья.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore? 
					Третья.  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magni quis perferendis neque veritatis nesciunt impedit doloribus esse. Quis nisi ut, inventore velit ipsa necessitatibus soluta suscipit harum doloribus, rerum dolore? 
					</p>
				</div>
			</div>
		</div>
		 --}}
	 </div>  

	 <div class="text text-center">
			 <p></p>
	 </div>
</div>

@endsection