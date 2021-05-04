<aside class="product-section container">
					<div class="sidebar">
				
						<div class="category_link ">
							<div class="mb-2">
								<a class="category__link" href="{{route('category.index', [app()->getlocale()])}}">{{ __('all categories') }}
								</a>
							</div>
							<div>
							
						
							</div>
				
							@each('shop.category-view', $categories, 'category') 
			
				
							</div>
						</div>
					</aside> 