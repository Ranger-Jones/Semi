<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    
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

    $role = [
        'Schüler',
        'Lehrer',
        'Moderator'
    ];
    

    
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'username' => $faker->username,
        'inclass' => $inclass[mt_rand(0, count($inclass) - 1)],
        'subject' => $subjects[mt_rand(0, count($subjects) - 1)],
        'role' => $role[mt_rand(0, count($role) - 1)],
        'password' => '12341234', // password
        'remember_token' => Str::random(10),
    ];
});
