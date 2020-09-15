<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Item;
use App\Models\Product;
use App\Models\Order;

use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker)
{
    return [
        "order_id" => $faker->unique()->numberBetween(1, Order::count()),
        "product_id" => $faker->unique()->numberBetween(1, Product::count()),
        "quantity" => $faker->numberBetween($min= 1000, $max=8000000),
        "subtotal" => $faker->numberBetween($min= 1000000, $max=8000000),
    ];
});
