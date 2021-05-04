<?php

namespace App\Http\Controllers;

use App\Models\Otherimage;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{

	public function __invoke($locale,$page)
	{
		$otherimages = Otherimage::all();
		$metaTitle = __('Meta Title: ' . $page);
		if($metaTitle == 'Meta Title: ' . $page){
			$metaTitle = NULL;
		}
			//dd($page);
		return view('pages.' .  $page , ['metaTitle' => $metaTitle], compact('otherimages'));
	}

 }