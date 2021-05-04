@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
           

<h2 class="text-center mb-4">{{ __('My Orders') }}</h2>
 

<div class="table-responsive-md">

<table class="table">
    <thead>
      <tr>
        <th>Order_id</th>
        <th>Total </th>
        <th>Status</th>
        <th>My requisites</th>
        <th>My products</th>
		</tr>
	</thead>
	<tbody>
		@foreach($orders as $order)
      <tr>
		  <td>N{{$order->id}}<br>
			{{ $order->created_at }}</td>
        <td> {{number_format($order->total, 2, ',', '.')}} </td>
        <td> {{$order->status->type}}</td>
        <td><div>
                      
                <div>{{$order->user_name}}</div>
                <div>{{$order->user_surname}}</div>
                <div>{{$order->user_email}}</div>
                <div>{{$order->user_phone}}</div>
                <div>{{$order->country}}</div>
                <div>{{$order->city}}</div>
                <div>{{$order->address}}</div>
              
            </div>
         </td>

		  <td>	
			  {{-- @foreach($order->products as $product)
				name: {{ $product->name }}<br>
				quantity: {{ $product->quantity }}<br>
				price: {{ number_format($product->price, 2, ',', '.') }}<br> --}}
			 
				<table class="table table-light">
					<thead>
					  <tr>
						<th>{{ __('Product') }}</th>
						<th>{{ __('Qty') }}</th>
						<th>{{ __('Price') }}</th>
					
					  </tr>
					</thead>
					<tbody>
						@foreach($order->products as $product)
					 <td>{{ $product->name }}</td>
					 <td>{{ $product->pivot->quantity }}</td>
					 <td>{{ $product->pivot->price }}</td>
					</tbody>
					@endforeach
				</table>
		
             {{-- @endforeach --}}
         </td>
		</tr>
		
@endforeach
</tbody>
  

  </table>
</div>

        </div>
    </div>
</div>

@endsection