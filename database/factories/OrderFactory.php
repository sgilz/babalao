<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------
------
| Model Factories
|--------------------------------------------------------------------
------
|
| This directory should contain each of the model factory definitions
for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Order::class, function (Faker $faker)
{
    return [
        'date' => $faker->date(),
        'status' => "DELIVERED",
        'user_id' => 0,
        'total' => $faker->numberBetween($min = 200, $max = 90000),
    ];
});
