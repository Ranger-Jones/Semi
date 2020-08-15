<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    //generate random code
    $length = 30;
    $code = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);

    // get a random topic
    $topics = [
        'Schulleben',
        'Organisatorisches',
        'Umfragen'
    ];

    // get a random addressee
    $addressees = [
        'Meine Klasse',
        'Meine Homies',
        'Meine Schule'
    ];

    // generate random post for random user
    return [
        'caption' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'user_id' => User::all()->random()->id,
        'description' => $faker->paragraph,
        'code' => $code,
        'topic' => $topics[mt_rand(0, count($topics) - 1)],
        'addressees' => $addressees[mt_rand(0, count($addressees) - 1)],
        'image' => $faker->imageUrl($width = 1000, $height = 1000)
    ];
});
