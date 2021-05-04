<?php

namespace App\Models\Traits;

use Illuminate\Support\Facades\App;

trait Translatable
{

	protected $defaultLocale = 'ru';

	public function __($originFieldName)
	{
		$locale = App::getLocale() ?? $this->defaultLocale;

		if ($locale === 'uk') {
			$fieldName = $originFieldName .= '_uk';
		} 
		

	//	dd($fieldName);
		//dd($this);
		
		else {
			$fieldName = $originFieldName;
		}

		   //dd($this->attributes);
 
		$attributes = array_keys($this->attributes);
		//dd($attributes);
		// if(!in_array($fieldName, $this->attributes)){
		// 	throw new \LogicException('no such attribute for model' . get_class($this));
		// }

		if ($locale === 'uk' && (is_null($this -> $fieldName) || empty($this->$fieldName))) {
			return $this->$originFieldName;
		}
// 
	return $this->$fieldName;
	 }

}