<div class="carousel_block mt-5 ">
	<div class="carousel__left col-md-6">


	</div>

	<div class="owl-carousel one ">
			@foreach($products->chunk(3) as $productChunk)
			@foreach($productChunk as $product)
		
		<div class="it">
			<div class="c">
				@include('shop.product.product_view')
			</div>
		</div>
		
			@endforeach
			@endforeach 
		
	</div>
	
</div>

