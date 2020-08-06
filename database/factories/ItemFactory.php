<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Item;
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

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'description' => $faker->text,
        'sale_price'=>$faker->randomFloat(100,0,10000),
        'purchase_price'=>$faker->randomFloat(100,0,10000),
        'quantity'=>$faker->randomDigitNotNull,
        'category_id'=>App\Category::pluck("id")->random(),
        "enabled"=>$faker->boolean,
    ];
});
