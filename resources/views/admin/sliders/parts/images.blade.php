 <div class="container">
 <div class="form-group row "> 
   <div class="col-12 slider-images-wrapper" style="padding: 5px; border: 1px solid #eee;">
   
      @if(!empty($slider->images))
        @foreach($slider->images as $image)
     
        <br>
          <div class="row slider-images-row" style="width: 100%; margin: 0 auto;"> 
           
              <div class="col-8">
                   <img src="{{Storage::disk('public')->url($image->path)}}" height="250" width="250"/> 
                  <input type="file" name="slider_images[]"/>
              </div>
			 
				  <div class="col-4">
      
					<button class="btn btn-danger slider-images-remove ajax"
						 data-route="{{route('ajax.image.remove', $image->id)}}">Remove</button> 
				  </div> 

        </div> 

         

        @endforeach
        @endif 

	 </div>
	 
	
      <div class="col-12">
          <button class="btn btn-outline-primary slider-images-add float-right mt-2">Add Image</button>
      </div>
    </div>
  </div>
@push('footer-scripts')
  <script type="text/javascript" src="{{URL::asset('js/admin/slider-images.js')}}"></script>
@endpush



