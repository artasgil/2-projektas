<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\authors;
use Faker\Generator as Faker;

$factory->define(authors::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'surname' => $faker->name,
        'username' => $faker->name,
    ];
});
