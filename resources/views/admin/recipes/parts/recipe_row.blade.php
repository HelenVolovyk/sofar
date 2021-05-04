          <tr>
             <th scope="row">{{$recipe->__('title')}}</th>
             <th><img src="{{Storage::disk('public')->url($recipe->thumbnail)}}" height="50" width="50"></th>
          	
       
             <td>{{$recipe->shot_description}}</td>
          
             <td>
               <div style="display: flex; flex-direction: row; align-item: center; justify-conrent: center">
                <a href="{{route('admin.recipes.edit', $recipe->id)}}"
                style="margin-right: 6px;"
                class="btn btn-warning">Edit</a>
                {{-- <a href="{{route('admin.components.create', $recipe->id)}}"
                style="margin-right: 6px;"
                class="btn btn-warning">Add components</a> --}}
                <form action="{{route('admin.recipes.destroy', $recipe->id)}}" method="post">
                  @csrf
                   @method('DELETE')
                   <button class="btn btn-danger">Remove</button>
                </form>
               </div>
            </td>

           </tr>
           
       
  
                