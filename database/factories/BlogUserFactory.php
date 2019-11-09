<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\BlogUser;
use Faker\Generator as Faker;

$factory->define(BlogUser::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstName() . " " . $faker->lastName(),
        'date_of_birth' => $faker->dateTimeBetween('-50 years', '-18 years'),
        'phone_number' => $faker->tollFreePhoneNumber(),
    ];
});
