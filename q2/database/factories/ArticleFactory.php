<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'user_id' => rand(1, 3),
        'title' => $faker->sentence(),
        'body' => $faker->text(),
    ];
});
