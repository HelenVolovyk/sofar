<?php

use App\Http\Controllers\Admin\SlidersController;
use App\Http\Controllers\Auth\AuthSocialController;
use App\Http\Controllers\OrderController;
use App\Models\Category;
use App\Services\Localization\LocalizationService;
use Carbon\Traits\Localization;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Laravel\Socialite\Facades\Socialite;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::redirect('/', '/ru');
Route::get('/', function(){
	return redirect()->route('home-locale', app()->getlocale());
})->name('index');

Auth::routes();

//*login socialite
Route::prefix('login')->group(function () {
	Route::get('/{provider}', 'Auth\LoginController@redirectToProvider')->name('redirect');
	Route::get('/{provider}/callback', 'Auth\LoginController@handleProviderCallback');
});

Route::prefix('ajax')->name('ajax.')->namespace('Ajax')->group(function () {
	Route::delete('images/{image}/remove', 'ImagesController@remove')->name('image.remove');
});

	//*admin
	Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->name('admin.')->group(function () {
		Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
		Route::get('/users', 'UsersController@index')->name('users');
		Route::get('/orders', 'UsersController@getOrders')->name('users.orders');

		Route::prefix('sliders')->name('sladers.')->group(function () {
			Route::get('/index', 'SlidersController@index')->name('index');
			Route::get('/create', 'SlidersController@create')->name('create');
			Route::post('/store', 'SlidersController@store')->name('store');
			Route::get('/index', 'SlidersController@index')->name('index');
		});
		
		
		Route::resource('products', 'ProductsController')->except(['show']);
		Route::resource('categories', 'CategoriesController')->except(['show']);
		Route::resource('sliders', 'SlidersController');
		Route::resource('images', 'OtherimageController');
		Route::resource('recipes', 'RecipeController')->except('show');
		Route::resource('components', 'ComponentsController')->except('show');
		
	});

	//* Mail
	Route::get('/send', 'MailController@send');

	

Route::group([
	'prefix' => '{locale?}',
	'where' => ['locale' => '[a-zA-Z]{2}'],
	//'prefix' => LocalizationService::locale(),
	//'prefix' => Config::get('languages'),
	'middleware' => ['set_locale']
], function () {



	

	Route::get('/{page}', 'PageController')
	->name('page')
	->where('page', 'about|contact|payment|shares');
	
	 Route::get('/', 'HomeController@index')->name('home-locale');
	 Route::get('/recipe/{recipe:webname}', 'RecipeController@show')->name('recipe.show');
	 Route::get('/recipes', 'RecipeController@index')->name('recipes');


	//*contact
	Route::prefix('contact')->name('contact.')->group(function () {
		// Route::get('/', 'ContactController@index')->name('index');
		Route::post('/send', 'ContactController@send')->name('send');
	});


		Route::get('/category/{category:webname}', 'CategoryController@show')->name('category.show');
		Route::get('/category', 'CategoryController@index')->name('category.index');
	
		Route::get('/product/{product:webname}', 'ProductController@show')->name('product.show');
		Route::get('/shop', 'ProductController@index')->name('shop');


	Route::get('/search', 'ShopController@search')->name('search');


	Route::middleware('auth')->group(function () {
		//*Shopping cart
		Route::prefix('cart')->name('cart.')->group(function () {
			Route::get('/', 'CartController@index')->name('index');
			Route::post('/add/{product:webname}', 'CartController@add')->name('add');
			Route::post('/count/{product:webname}', 'CartController@update')->name('count.update');
			Route::delete('/delete/{product:webname}', 'CartController@delete')->name('delete');
		});

		//*checkout
		Route::get('/checkout', 'CheckoutController')->name('checkout');
		Route::post('/order', 'OrderController@create')->name('order.create');
		Route::get('/thankyou/{order}', function($locale, $order){
			return view('shop.checkout.thankyou', compact('locale','order')); 
		})->name('thankyou');
		Route::get('/order', 'OrderController@getOrderByUser')->name('user.order');

		//* wishlist
		Route::prefix('wishlist')->name('wishlist.')->group(function () {
			Route::get('/{product:webname}/add', 'WishlistController@add')->name('add');
			Route::delete('/{product}/delete', 'WishlistController@delete')->name('delete');
		});


		//* Rating
		Route::post('rating/{product:webname}/add', 'RatingController@add')->name('rating.add');

		//*comment
		Route::prefix('comment')->name('comments.')->group(function () {
			Route::post('/{product:webname}/add', 'CommentController@add')->name('add');
			Route::get('/{product:webname}/all_comments', 'CommentController@show')->name('show');
		});
	});

	Auth::routes();
	
	//*auth()->user
	Route::middleware(['auth', 'user'])->prefix('user')->name('user.')->group(function () {
		Route::prefix('profile')->name('profile.')->group(function () {
			Route::get('/', 'ProfileController@index')->name('index');
			Route::get('/edit', 'ProfileController@edit')->name('edit');
			Route::post('/update', 'ProfileController@update')->name('update');
		});
	
	});

	Route::get('/wishlist', 'WishlistController@userList')->name('wishlist');

});