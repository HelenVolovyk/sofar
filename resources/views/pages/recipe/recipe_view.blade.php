
   <div class="recipe__row">

  			<div class="recipe__thumbnail ibg" >
				<img class="ibg" src=" {{ Storage::disk('public')->url($recipe->thumbnail)}}" alt="" >
			</div>

         <div class="recipe__text left">
				<h2 class="featurette-heading ">{{ $recipe->__('title') }} </h2>
				<span class="text-muted ">It’ll blow your mind.</span>
				<p class="lead mt-5 ">{{$recipe->__('shot_description')}}</p>
			 
				 <div class="r__link mt-5">
					 <a class="recipes__link" href="{{route('recipe.show', [app()->getLocale(), $recipe])}}">
					 Donec ullamcorper zdfbdbg
					 </a>
				 </div>
			 </div>
     
	 </div>
	 
