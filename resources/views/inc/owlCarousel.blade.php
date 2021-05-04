<div class="mt-5 ">
	
	<div class="owl-carousel one">
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

