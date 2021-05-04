<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\User;
use Faker\Generator as Faker;

$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    //$user = User::all()->random()->id;
    $product = \App\Models\Product::all()->random();


    return [
        'user_id' => User::all()->random()->id,
        'comment' => implode(' ', $faker->sentences(rand(2,6))),
        'commentable_id' => $product->id,
        'commentable_type' => \App\Models\Product::class
    ];
});
