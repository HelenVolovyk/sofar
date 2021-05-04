<?php

namespace App\Models;

use Gloudemans\Shoppingcart\CanBeBought;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use willvincent\Rateable\Rateable;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Traits\Translatable;

class Product extends Model implements Buyable
{

	use Translatable;
	use CanBeBought, Rateable;


	protected $fillable = [
		'id',
		'category_id',
		'SKU',
		'name',
		'name_uk',
		'webname',
		'description',
		'description_uk',
		'shot_description',
		'shot_description_uk',
		'price',
		'discount',
		'quantity',
		'thumbnail'

	];

	public function category()
	{
		return $this->belongsTo(\App\Models\Category::class);
	}

	public function orders()
	{

		return $this->belongsToMany(\App\Models\Order::class, 'order_product', 'product_id', 'order_id',)
			->withPivot('quantity', 'price')
			->withTimestamps();
	}


	public function images()
	{
		return $this->morphMany(\App\Models\Image::class, 'imageable');
	}

	public function comments()
	{
		return $this->morphMany(\App\Models\Comment::class, 'commentable');
	}


	
	public function followers()
	{
		return $this->belongsToMany(
			User::class,
			'wishlist',
			'product_id',
			'user_id'
		);
	}


	public function getShotDescriptionAttribute()
	{
		$more = strlen($this->description) > 100 ? '...' : '';

		return substr($this->description, 0, 100) . $more;
	}


	public function printPrice()
	{
		$price = $this->price;

		if ($this->discount > 0) {
			$price -= ($price / 100 * $this->discount);
		}

		return number_format($price, 2, '.', '');
	}

	public function getPrice()
	{
		return  $this->printPrice();
	}

	/**
	 * @return mixed
	 */
	public function getUserProductRating()
	{
		$vote = $this->ratings()->where([
			['user_id', auth()->id()],
			['rateable_id', $this->id]
		])->first();

		//dd($vote);

		return !empty($vote->rating) ? $vote->rating : false;
	}

	
	public function getRouteKeyName()
	{
		return 'webname'; 
	}
	
	// protected $lang_fields = [
	// 	'name',
	// 	'name_uk',
	// 	'description',
	// 	'description_uk',
	// 	'shot_description',
	// 	'shot_description_uk',
		
	// ];
	
	// 	public function getAttribute($key)
	// 	{
			
	// 		$default = parent::getAttribute($key);
	// 		dd($default);
	// 		if(isset($this->lang_fields) && is_array($this->lang_fields) && in_array($key, $this->lang_fields)){
	// 			return $this->{$key.'_'.app()->getLocale()} ?? '';
	// 		}
	
			
	// 		return $default;
	// 	}
}