<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' => $faker->paragraph,
        'url' => $faker->url,
        'image' => $faker->imageUrl($width = 640, $height = 480)
    ];
});