<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'url' => $faker->url,
        'image' => $faker->imageUrl($width = 1000, $height = 1000)
    ];
});