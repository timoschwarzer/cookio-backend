<?php

/** @var Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factory;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'food' => $faker->boolean,
        'number' => $faker->numberBetween(0, 100),
    ];
});
