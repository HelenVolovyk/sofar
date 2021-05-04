<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
   public function show($locale, Recipe $recipe){
	
		$image = $recipe->image()->first()->path;

		//dd($image);
		
		return view('pages.recipe.show', compact('recipe', 'image'));
	}

	public function index($locale)
	{
		
		$recipes = Recipe::all()->sortByDesc('created_at');
		$metaTitle =  __('recipes') ;
		
		return view('pages.recipes', compact('recipes'), ['metaTitle' => $metaTitle]);
	}


}