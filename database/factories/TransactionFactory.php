<?php

use Faker\Generator as Faker;
use App\User;
use App\Product;

$factory->define(App\Transaction::class, function (Faker $faker) {
    return [
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'product_id' => $faker->randomElement(Product::pluck('id')->toArray())
        
    ];
});
