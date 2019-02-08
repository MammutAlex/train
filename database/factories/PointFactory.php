<?php

use Faker\Generator as Faker;

$factory->define(App\Point::class, function (Faker $faker) {
    return [
        'route_id' => \App\Route::inRandomOrder()->first()->id,
        'city_id' => \App\City::inRandomOrder()->first()->id,
        'arrival' => $faker->dateTimeBetween('-1 months', '+1 months'),
    ];
});
