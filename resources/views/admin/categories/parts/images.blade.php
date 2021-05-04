 <div class="container">
	<div class="form-group row "> 
		<div class="col-12 product-images-wrapper" style="padding: 5px; border: 1px solid #eee;">
   
			@if(!empty($category->image))
			{{-- @foreach($category->images as $image) --}}
     
        <br>
          <div class="row product-images-row" style="width: 100%; margin: 0 auto;"> 
           
              <div class="col-8">
                   <img src="{{Storage::disk('public')->url($image->path)}}" height="250" width="250"/> 
                  {{-- <input type="file" name="category_images[]"/>              </div> --}}
          
            
      	</div> 

         

        {{-- @endforeach --}}
        @endif 

    </div>
  
    </div>
  </div>




  