<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Group;
use Faker\Generator as Faker;

$factory->define(Group::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->randomElement(['Computer Science', 'Engineering', 'Economics', 'Chemistry']),
    ];
});
