<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        //
        'text' => $faker->realText(50, 2),
        'post_id' => $faker->numberBetween(1, 10),
        'blog_user_id' => $faker->numberBetween(1, 5),
    ];
});
