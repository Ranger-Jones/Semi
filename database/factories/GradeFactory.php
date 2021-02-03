<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Grade;
use App\User;
use Faker\Generator as Faker;

$factory->define(Grade::class, function (Faker $faker) {
    
    $inclass = [
        '6a',
        '7a',
        '8a',
        '9a',
        '10a',
        '11a',
        '12a'
    ];

    $users = User::all();
    $teacher = [];
    foreach($users as $u){
        $permissions = $u->permissions()->get();
        foreach ($permissions as $p) {
            if($p->permission == "Lehrer"){
                $teacher[] = $u->name;
            }
        }
    }
    
    
    return [
        'name' => $inclass[mt_rand(0, count($inclass) - 1)],
        'teacher' => array_rand($teacher)
    ];
});
