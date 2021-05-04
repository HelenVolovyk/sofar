@extends('layouts.app')

@section('title')
Shopping Cart
@endsection



@section('content')
 
  @if(Cart::instance('cart')->count() > 0)
  <div class="container">
	  <div class="content">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="/">{{ __('Home') }}</a></li>
				<li class="breadcrumb-item"><a href="/shop">{{ __('Shop') }}</a></li>
				<li class="breadcrumb-item active" aria-current="page">{{ __('Cart') }}</li>
			</ol>
	 
	
	
	 

    <h1 class="text-center">{{ __('Cart') }}</h1>
    <div class="row justify-content-md-center">
    
      <div class="col-sm-10 col-md-10 col-md-offset-3 col-sm-offset-3">
       
       <table class="table table-light">
          <thead>
            <tr>
             <th>{{ __('Product') }}</th>
             <th>{{ __('Qty') }}</th>
             <th>{{ __('Price') }}</th>
             <th>{{ __('Subtotal') }}</th>
            </tr>
          </thead>
          <tbody>
            @each('shop.cart.parts.cart_view', Cart::instance('cart')->content(), 'row')
          </tbody>
       </table>
                       
      </div>
    </div>


 
  <div class="row-right mt-5">
    <div class="col-sm-11 col-md-11 col-md-offset-3 col-sm-offset-3">
    <div>
    <span><strong>{{ __('Total') }}
		 {{Cart::total()}}</strong></span>
    </div>
    <div class="mt-3">
       <a href="{{ route('checkout', app()->getLocale()) }}" type="button" class="btn btn-success">{{ __('Checkout') }}</a> 
     
    </div>
    </div>
  </div>

  	@else
		<div class="content">
			<div class="row justify-content-center">
				<h2>{{ __('No items in the Cart!') }}</h2> 
				</div>
			</div>
		</div>
	</div>
@endif
@endsection