<div class="">
	<p>hh</p>

	<a href="{{route('product.show', [app()->getlocale(), $row->id])}}">
	<strong>{{$row->name}}</strong>
	</a>
 
  {{-- <span>  {{$row->qty}}  x <strong> ${{$row->price}}</strong> </span>  --}}
 
</div>  