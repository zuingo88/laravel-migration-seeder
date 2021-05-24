<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->fistname,
        'original_title' => $faker->lastname,
        'nationality' => $faker->word,
        'date' => $faker->date,
        'vote' => $faker->numberBetween(1, 10),
    ];
});
