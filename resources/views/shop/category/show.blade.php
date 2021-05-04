@extends('layouts.app')

@section('title')
 Products by   {{$category['title']}} 
@endsection

@section('content')

<div class="content">
	<div class="container">
		<div class="d-flex justify-content-between">
			<div class="bread">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a class="breadcrumb__link" href="/">{{ __('Home') }}</a></li>
					<li class="breadcrumb-item "><a class="breadcrumb__link" href="{{ route('shop', [app()->getLocale()]) }}">{{ __('Shop') }}</a></li>
					<li class="breadcrumb-item "><a class="breadcrumb__link" href="{{route('category.index', [app()->getlocale()])}}">{{ __('All Categories') }}</a></li>
					<li class="breadcrumb-item active" aria-current="page">{{ $category->__('title')}}</li> 
				</ol>
			</div>
			{{-- <div class="">
				@include('inc.search')
			</div> --}}
		</div>

		<h1 class="text-center mb-4">{{ __('Products by') }}</h1>
		<h2 class="text-center mb-4">{{ $category->__('title')}}</h2>


		<div class="row">
			
				<div class="col-md-2">
					@include('inc.sidebar')
					
				</div>
			

			<div class="col-md-10">
						
				<div class="products text-center">
					@foreach($products->chunk(3) as $productChunk)
						<div class="row">
						@foreach($productChunk as $product) 

						@include('shop.product.product_view') 
						@endforeach
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
@endsection