<?php

namespace App\Models;

use App\Models\Traits\Translatable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	use Translatable;
	
    protected $fillable = [
        'id',
        'title',
		  'title_uk',
		  'webname',
        'description',
        'description_uk'

    ];

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }

    public function image()
    {
        return $this->morphOne(\App\Models\Image::class, 'imageable');
    }

    public function getShotDescriptionAttribute()
    {
        $more = strlen($this->description) > 100 ? '...' : '';

        return substr($this->description, 0, 100) . $more;
	 }
	 
	public function getRouteKeyName()
	{
		return 'webname'; 
	}
}