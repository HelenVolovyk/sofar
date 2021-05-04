<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
	use Translatable;
	
	protected $fillable = [
		'id',
		'title',
		'title_uk',
		'webname',		
		'thumbnail',
		'description',
		'description_uk',
		'shot_description',
		'shot_description_uk',
		'components',
		'components_uk'	
  ];


  public function image()
  {
	  return $this->morphMany(\App\Models\Image::class, 'imageable');
  }

  public function component()
	{
		return $this->morphMany(\App\Models\ComponentRecipe::class, 'componentable');
	}

	public function getRouteKeyName()
	{
		
		return 'webname'; 
	}

	public function getShotDescriptionAttribute()
	{
		$more = strlen($this->description) > 100 ? '...' : '';

		return substr($this->description, 0, 100) . $more;
	}

}