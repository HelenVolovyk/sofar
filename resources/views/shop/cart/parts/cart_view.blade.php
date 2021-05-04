@include('inc.message')
<tr>
   <td>
      {{-- <img src="{{Storage::disk('public')->url($product['product']['thumbnail'])}}" height="64" width="64"/>  --}}

    {{-- <a href="{{route('product.show'), $row->id}}"> --}}

    <a href="{{route('product.show', [app()->getlocale(), $row->id])}}">
      <strong>{{$row->name}}</strong>
    </a>
  </td>
  
    
 <td>    
<form action="{{route('cart.count.update', [app()->getlocale(), $row->id])}}" method="POST"> 
  @csrf
 
  <input type="hidden" value="{{$row->rowId}}" name="rowId">
  <input type="number" min="1"  value="{{$row->qty}}" name="product_count" style="width: 55px; height: 35px; margin-right:10px">
  <input type="submit" class="btn btn-outline-success" value="{{ __('update count') }}">

</form>
</td>
<td>
  <span class ="label label-success"><strong>{{$row->price}} грн</strong></span>
</td>
<td>
  <span class ="label label-success"><strong>{{$row->total}} грн</strong></span>
</td>
<td>
 <form action="{{route('cart.delete', [app()->getlocale(), $row->id ])}}" method="POST"> 
  @method('DELETE')
  @csrf
  <input type="hidden" value="{{$row->rowId}}" name="rowId">
  <input type="submit" class="btn btn-outline-danger" value="{{__('delete')}}">
</form>
</td>

</tr>
    {{-- <div class="btn-group">
      <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
        Action <span class="caret"></span>
      </button>
       
      <ul class="dropdown-menu">
        <li><a href="{{route('product.addByOne', ['id'=>$product['product']['id']])}}">Add by 1</a></li>
        <li><a href="{{route('product.reduceByOne', ['id'=>$product['product']['id']])}}">Reduce by 1</a></li>
        <li><a href="{{route('product.remove', ['id'=>$product['product']['id']])}}">Reduce by all</a></li>
      </ul>
    </div> --}}
  