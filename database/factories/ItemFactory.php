<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\item;
use Faker\Generator as Faker;

$factory->define(item::class, function (Faker $faker) {
    return [
        'tipo' => $faker->randomElement(['fisico','especial','baya']),
        'vida' => rand(70,100)
    ];
});
