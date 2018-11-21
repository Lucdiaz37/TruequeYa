<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->text($maxNbChars = 200),
        'price' => $faker->numberBetween($min = 10, $max = 1000),
        'active' => true
    ];
});
