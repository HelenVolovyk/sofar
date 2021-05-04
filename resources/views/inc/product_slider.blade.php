 <div class="aa ibg">
		<img id=featured  src="{{Storage::disk('public')->url($array[0])}}">
</div>


<div id="slide-wrapper" >

	<div id="slider">
		@foreach($array as $item)
		<img class="thumbnail" src="{{Storage::disk('public')->url($item)}}" />
		@endforeach
	</div>
	
</div>