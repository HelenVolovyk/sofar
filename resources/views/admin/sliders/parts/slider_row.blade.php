          <tr>
            
            
             <td>{{$slider->id}}</td>
             <td>{{$slider->title}}</td>

					<td>
							<div style="display: flex; flex-direction: row; align-item: center; justify-conrent: center">
								<a href="{{route('admin.sliders.edit', $slider)}}"
								style="margin-right: 6px;"
								class="btn btn-warning">Edit</a>
									<form action="{{route('admin.sliders.destroy', $slider)}}" method="post">
										@csrf
										@method('DELETE')
										<button class="btn btn-danger">Remove</button>
									</form>
							</div>
						</td>

           </tr>
           
       
  
                