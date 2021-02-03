<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Permission;
use Faker\Generator as Faker;




$factory->define(Permission::class, function (Faker $faker) {

    $aPermission = [
        'Schüler',
        'Moderator',
        'Lehrer',
        'Admin'
    ];

    return [
        'permission' => $aPermission[mt_rand(0, count($aPermission) - 1)]
    ];
});
