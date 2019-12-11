<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'text' => $faker->realText(50, 2),
        'image' => "",
        'date_posted' => $faker->dateTimeThisMonth(),
        'blog_user_id' => $faker->numberBetween(1, 5),
    ];
});
