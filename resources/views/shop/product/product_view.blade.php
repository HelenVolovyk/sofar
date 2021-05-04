
<div class="col-sm-12 col-md-6 col-lg-4">

     <div class="card mb-2" style="border: none" >
        <a  class="cart__link" href="{{route('product.show', [app()->getLocale(), $product])}}">
          <div class="scale cart-img ">
				<img src="{{Storage::disk('public')->url($product->thumbnail)}}" class="scale card-img-top" alt="..." >
			</div> 
        </a>

        <div class="cart-link">
          
			 <a class=" badge rounded-pill bg-light flot-right" href="{{route('wishlist.add', [app()->getLocale(), $product])}}"><i class="fa fa-heart-o fa-2x" aria-hidden="true"></i>
			</a>
                      
        </div>
      
 
       <div class="card-body">
			<h5 class="card-title">{{$product->__('name')}}</h5>
		
				<div class="">
      		 @include('shop.category-view', ['category'=>$product->category()->first()])
				</div>  
           
              
           <div class="clearfix ">
             <div class="price">
             @if($product->discount > 0)
               <small style="color: red; text-decoration: line-through">{{$product->price}} грн</small>
             @endif
             <div class="printPrice">{{$product->printPrice()}} грн</div>
            </div>
           
				<div class="d-flex justify-content-center mt-3">
             <form action="{{route('cart.add', [app()->getLocale(), $product])}}" method="POST" class="form-inline" id="button_center">             
              @method('POST')
              @csrf
              <div class="form-froup  mb-2">
                <input type="hidden" name="price_with_discount" value="">
                <label for="product_count" class="sr-only">Count</label>
                 <input type="hidden"
                        name="product_count"
                        class="form-content"
                        id="product_count"
                        min="1"
                        max="1"
                        value="1"
                      > 
      
              </div> 
	  	
				<button type="submit" class="btn  card__btn" id="button_center">{{ __('Add to Cart') }}
				</button> 
				<div class="btn__line">
					<div class="block1"></div>
					<div class="block2"></div>
				</div>
			
			</div>

				
            </div>
               </form>

			  </div>
		  </div>
	   </div>
  

  
                