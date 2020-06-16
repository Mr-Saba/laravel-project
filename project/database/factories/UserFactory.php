<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Movie;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'language' => 'qartuli',
        'summary' => 'ragac',
        'production_year' => floor(mt_rand(1900, 2010)),
        'duration' => floor(mt_rand(0, 100)),
        'genre' => 'janri',
        'imdb' => mt_rand(0, 10),
        'remember_token' => Str::random(10),
    ];
});
