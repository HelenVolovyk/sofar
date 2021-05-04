<?php

namespace App\Http\Controllers;

use App\Jobs\PostAfterCreateUser;
use App\Mail\newMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

//use Illuminate\Support\Facades\Mail as FacadesMail;
//use Mail;

class MailController extends Controller
{
    public function send()
    {
		 Mail::send(new newMail());
		 
		 Mail::send(['test'=>'email'], ['name', 'webDev'], function($message){
			$message->to('mr0778240@gmail.com', 'toWebDev')->subject('test');
			$message->from('mr0778240@gmail.com', 'toWebDev');

		 });
	 }
	 
   //  public function email()
   //  {
   //     return view('email');
	//  }
	
	public function mailRegistr($data)
	{
		$item = User::create($data);

		if($item){
			$job = new PostAfterCreateUser($item);
			$this->dispatch($job);
		}
	}
}