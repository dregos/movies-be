<?php

use Faker\Generator as Faker;

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

$factory->define(App\Movie::class, function (Faker $faker) {


    return [
        'title' => $faker->name,
        'genres' => ['name' => $faker->word],
        'director' => $faker->name,
        'year' => $faker->year($max = 'now'),
        'releaseDate' => $faker->date($format = 'Y-m-d'),
        'storyLine' => $faker->realText($faker->numberBetween(30,200)),
        'thumbnail_source' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
        'video_source' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker'),
        'duration' => $faker->biasedNumberBetween($min = 50, $max = 320, $function = 'sqrt'),
    ];

});
