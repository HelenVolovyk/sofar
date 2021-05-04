<div class="col-sm-6 col-md-4 m-3">
  <div class="card shadow-sm" >
     <div class="cart-link">
     </div>
   
 
    <div class="categ__card-body " class="wow fadeInTopLeft" data-wow-duration="2s" data-wow-delay="5s" data-wow-offset="10" data-wow-iteration="10">

        <h5 class="card-title">
			<a class="categ__cart-linck" href="{{route('category.show', [app()->getLocale(), $category])}}">	{{$category->__('title')}}</a>
		</h5>
      
      
		 <p class="card-text">{{$category->__('description')}}</p>
		 
		 {{-- @include('admin.categories.parts.images') --}}
      
        
    </div>
  </div>
 </div>