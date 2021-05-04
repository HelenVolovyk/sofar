@extends('layouts.app')
@section('header')
	<title>{{ $metaTitle }}</title>
@endsection

@section('content')
<div class="content">
<div class="container">

	
   <hr class="featurette-divider">
@include('inc.breadcrumb')



    <h2>{{ __('Healthy recipes') }}</h2>
	 
	 @foreach ($recipes as $recipe)

		@if ($recipe->id % 2)
			@include('pages.recipe.recipe_view2')
			
		@else
			@include('pages.recipe.recipe_view')
		
		@endif
			  
	 @endforeach
	
</div>
</div>
@endsection