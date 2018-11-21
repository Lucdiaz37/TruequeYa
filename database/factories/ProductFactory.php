<?php

use Faker\Generator as Faker;
use App\Category;
use App\User;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text($maxNbChars = 200),
        'category_id' => $faker->randomElement(Category::pluck('id')->toArray()),
        'price' => $faker->numberBetween($min = 10, $max = 1000),
        'user_id' => $faker->randomElement(User::pluck('id')->toArray()),
        'active' => true
    ];
});
