<?php

use Faker\Generator as Faker;

$factory->define(App\Route::class, function (Faker $faker) {
    return [
        'train_id' => \App\Train::inRandomOrder()->first()->id,
    ];
})->afterCreating(App\Route::class, function ($route, $faker) {
    factory(App\Point::class, 8)->create([
        'route_id' => $route->id
    ]);
});
