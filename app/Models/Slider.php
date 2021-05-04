<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = [
		 'id',
		 'title',
		 'title_uk',
		 'shotTitle',
		 'shotTitle_uk',
		 'thumbnail',
		 'created_at',
		 'updated_at'
		 
		 
		 
	 ];


	 public function image()
	 {
		 return $this->morphMany(\App\Models\Image::class, 'imageable');
	 }
}