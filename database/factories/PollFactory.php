<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Poll;
use App\Post;
use Faker\Generator as Faker;

$factory->define(Poll::class, function (Faker $faker) {
    return [
        'code' => Post::all()->random()->code,
        'text' => $faker->sentence,
        'description' => $faker->paragraph,
        'image' => $faker->imageUrl($width = 1000, $height = 1000)
    ];
});
