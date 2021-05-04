
	 

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	
	<div class="carousel-inner">
	<div class="carousel-item active ibg" >
		<img class="ibg" src='{{Storage::disk('public')->url($product->thumbnail) }}' alt="">
	
		
	  </div> 
	  @foreach($product->images as $image)
	  <div class="carousel-item ibg" >
		<img class="thumbnail" src="{{Storage::disk('public')->url($image->path)}}" />
		@endforeach
	</div>

	  {{-- <div class="carousel-item ibg" >
		
		<img class="ibg" src='{{Storage::disk('public')->url($image->path) }}' alt="">

		
	  </div>
	  <div class="carousel-item ibg" >
		
		<img class="ibg" src='{{Storage::disk('public')->url($image->path) }}' alt="">
		
	  </div> --}}
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="sr-only">Next</span>
	</a>
 </div>
