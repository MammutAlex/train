<?php

use Faker\Generator as Faker;

$factory->define(App\Train::class, function (Faker $faker) {
    return [
        'number' => $faker->numberBetween($min = 1000, $max = 9000),
        'name' => $faker->firstName,
    ];
});
