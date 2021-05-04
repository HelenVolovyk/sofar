<?php
namespace App\Services;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\ServiceProvider;

class LanguageServiceProvider extends ServiceProvider
{
	public function boot()
	{
		$this->setRouteLang();
	}

	public function setRouteLang()
	{
		$language = Request::segment(1);
		$routeLang = '';

		if(isset(config('app.locales')[$language])){
			App::setLocale($language);
			$routeLang = $language;
		}
		Config::set('routeLang', $routeLang);
	}
}

