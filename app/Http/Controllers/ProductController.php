<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Image;
use App\Models\Otherimage;
use App\Models\Unit;

class ProductController extends Controller
{


	/**
	 * Display the specified resource.
	 *
	 * @param  Product $product
	 * @return \Illuminate\Http\Response
	 */
	public function show($locale, Product $product, Image $image)
	{
		$categories = Category::all();
		$comments = $product->comments()->with('user')->paginate(5);
		
		
		$images = $product->images()->get();
					
		$array = collect([$product->thumbnail]);
		$images->each(function($image) use ($array){
			$array->push($image->path);
		});
		
		$products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		$categories = Category::all();
	
		
		return view('shop.product.show', compact('product', 'products', 'comments', 'categories', 'array'));
	}

	public function index($locale, Product $product, Category $category)
	{
		$products = Product::all()->where('quantity', '>', '0');
		$categories = Category::all();
		
	
		
//dd($products);
		return view('shop.index', compact('categories', 'category', 'products', 'product'));
	}
}