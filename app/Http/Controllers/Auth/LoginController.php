<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\UserCreated;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Laravel\Socialite\Facades\Socialite;



class LoginController extends Controller
{
	/*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

	use AuthenticatesUsers;

	/**
	 * Where to redirect users after login.
	 *
	 * @var string
	 */
	//protected $redirectTo = RouteServiceProvider::HOME;
	protected $redirectTo = 'admin/dashboard';

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest')->except('logout');
	}


	public function redirectToProvider($provider)
	{
		return Socialite::driver($provider)->redirect();
	}


	public function handleProviderCallback($provider)
	{
		$SocialUser = Socialite::driver($provider)->user();

		//dd($SocialUser );
		$user = $this->createUser($SocialUser, $provider);
		Auth::login($user, true);
		return redirect('/');
	}

	function createUser($SocialUser, $provider)
	{
		

		if ($user = User::where('email', $SocialUser->email)->first()) {
			return $user;
		}



		if (!$user) {
			$user = User::create([
				'role_id' => 2,
				'name' => $SocialUser->getName(),
				'surname' => 'Sociallite',
				'email' => $SocialUser->getEmail(),
				'social_account_id' => $SocialUser->getId(),
				'provider' => $provider,
				'password' => bcrypt(rand(10, 20)),
			]);
		}
		return $user;
		// Mail::to()->send(new UserCreated($user));
		//Mail::send(new newMail());
	}
}