<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Homework;
use Faker\Generator as Faker;
use App\User;

$factory->define(Homework::class, function (Faker $faker) {
    // get a random subject
    $subjects = [
        'Deutsch',
        'Mathematik',
        'Physik',
        'Informatik',
        'Chemie',
        'Bioloagie'
    ];

    // get a random class
    $inclass = [
        '6a',
        '7a',
        '8a',
        '9a',
        '10a',
        '11a'
    ];

    
    
    return [
        'caption' => $faker->sentence,
        'task' => $faker->paragraph,
        'inclass' => $inclass[mt_rand(0, count($inclass) - 1)],
        'subject' => $subjects[mt_rand(0, count($subjects) - 1)],
        'images' => $faker->imageUrl($width = 1000, $height = 1000),
        'teacher' => User::all()->random()->name,
        'submissionDate' => $faker->dateTime($max = 'now', $timezone = null),
        'currentDate' => date("Y-m-d H:i:s")
    ];
});
