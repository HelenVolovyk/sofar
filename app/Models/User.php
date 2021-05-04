<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Models\Product;
use App\Models\SocialAccount;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		  'id',
        'role_id',
        'name',
        'surname',
		  'email',
		  'balance',
		  'social_account_id',
		  'provider',
        'phone',
        'password',
        'birth_date'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role()
    {
        return $this->belongsTo(\App\Models\Role::class);
    }

    public function orders()
    {
        return $this->hasMany(\App\Models\Order::class);
    }

    public function comments()
    {
        return $this->hasMany(\App\Models\Comment::class);
    }


    public function image()
    {
        return $this->morphOne(\App\Models\Image::class, 'imageable');
    }


	//  public function socialAccount()
	//  {
	// 	 return $this->belongsToMany(App\Models\SocialAccount:: class);
	//  }


    public function instanceCartName()
    {
		 	//$userName = Auth::user();
        	$userName = implode('_',[
            Auth::user()->id,
            Auth::user()->name,
            Auth::user()->surname
        ]);

        return $userName;
    }


    public function wishes()
    {
        return $this-> belongsToMany(
            Product::class, 
            'wishlist',
            'user_id', 
            'product_id'
        );
    }


    public function addToWish(Product $product)
    {
        $this->wishes()->attach($product);
	 }
	 

    public function removeFromWish(Product $product)
    {
        $this->wishes()->detach($product);
    }


    
    //мутаторы
    public function setFirstNameAttribute($value)
    {
        $this->attributes['first_name'] = ucfirst($value);
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    // public function getFirstNameAttribute() 
    // {
    //     return "First name:" . ucfirst($this->attributes['name']);
    // }

    public function getIsAdminAttribute()
    {
        return $this->role->name === config('roles.admin');
    }

    public function getIsUserAttribute()
    {
        return $this->role->name === config('roles.customer');
    }
}
