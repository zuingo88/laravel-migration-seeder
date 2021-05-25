<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'original_title' => $faker->wsentence(3),
        'nationality' => $faker->state,
        'date' => $faker->date,
        'vote' => $faker->randomFloat(1, 10),
    ];
});
