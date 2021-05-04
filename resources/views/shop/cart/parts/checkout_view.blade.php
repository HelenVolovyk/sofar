<tr>
   <td>
      <a href="{{route('product.show', [app()->getlocale(), $row->id])}}">
      <strong>{{$row->name}}</strong>
      </a>
  </td>
     <td>    
     <span>{{$row->qty}}</span>
    </td>
    <td>
      <span class ="label label-success"> <strong>{{$row->price}} грн</strong></span>
    </td>
    <td>
      <span class ="label label-success"> <strong>{{$row->total}} грн</strong></span>
    </td>
</tr>
 
  