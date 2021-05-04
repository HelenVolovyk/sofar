@extends('layouts.app')

@section('title')
{{ __('Search Products') }}
@endsection

@section('content')
@include('inc.message')

<div class="container">
	<div class="content">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
    <li class="breadcrumb-item"><a href="/">{{ __('Shop') }}</a></li>
  	 <li class="breadcrumb-item">{{ __('Search') }}</li>
  </ol>

		<div class="row">
		<div class="col-md-2">
			<aside class="product-section container">
				<div class="sidebar">
				
					<div class="category_link ">
						<div class="mb-2"><a class="category__link" href="{{route('category.index')}}">{{ __('all categories') }}</a></div>
						<div>
						
					
						</div>
			
						@each('shop.category-view', $categories, 'category') 
		
			
						</div>
					</div>
		</aside>
</div>

			<div class="col-md-10">



			<div class="search-results-container container">
				{{-- <h1>{{ __('Search Result') }}</h1> --}}
				<div class="result d-flex">
				<p class="search-results-count">{{ $products->total()}} 
					{{ __('result(s) for') }} </p>
					<span class="query__result"> &nbsp '{{  request()->input('query') }}'</span>
				</div>
				
					<div class="products">
						@foreach($products->chunk(3) as $productChunk)
							<div class="row">
								@foreach($productChunk as $product)
								
											@include('shop.product.product_view')

								@endforeach
							</div>
						@endforeach
					
						{{ $products->appends(request()->input())->links()  }}
					</div>
				
			</div>
			
			</div>
		</div>
	</div>
	</div>
@endsection