<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Otherimage;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	// public function __construct()
	// {
	//     $this->middleware('auth');
	// }

	/**
	 * Show the application dashboard.
	 * @param Product $products
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index()
	{
		$otherimages = Otherimage::all();
		$products = Product::inRandomOrder()->where('quantity', '>', '0')->get();
		// $products = Product::inRandomOrder()->take(3)->where('quantity', '>', '0')->get();
		//$products = Product::with('category')->where('quantity', '>', '0')->paginate(10);
		$categories = Category::all();
		
		$sliderOne = DB::table('sliders')->whereIn('id', [1,46,47])->get();
		//$slider =Slider::find(34);
	
		$slider = Slider::all();
		$image = Image::all();
		//$image =Slider::find(34)->image;
	//$image =$slider->image;

		//dd($otherimages->find(17)->img_src);
		
		//dd($slider->find(1)->title);
		return view('home.index', compact('categories', 'products', 'otherimages', 'slider', 'image'));
	}

	public function changeLocale($locale)
	 {
		
		
		// session(['locale' => $locale]);
		// 	App::setlocale($locale);
		// //dd(session('locale'));
	
		//  return redirect()->back();
	}



}