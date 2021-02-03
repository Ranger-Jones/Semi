<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Profile;
use Faker\Generator as Faker;


$factory->define(Profile::class, function (Faker $faker) {
    return [
        'description' => $faker->paragraph,
        'url' => $faker->url,
        'image' => $faker->image(public_path("storage/uploads",1000,1000, null, false))
    ];
});