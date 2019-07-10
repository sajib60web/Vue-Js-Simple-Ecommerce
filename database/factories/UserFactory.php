<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
use Illuminate\Support\Str;
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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'cat_name' => $faker->name,
        'parentId' => rand(0,0),
        'cat_description' => $faker->paragraph,
        'cat_status' => rand(0,1),
    ];
});

$factory->define(App\Brand::class, function (Faker $faker) {
    return [
        'brand_name' => $faker->company,
        'brand_description' => $faker->paragraph,
        'brand_status' => rand(0,1),
    ];
});

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'pro_name' => $faker->sentence,
        'category_id' => rand(1, 5),
        'manufactur_id' => rand(1,5),
        'pro_short_description' => $faker->paragraph,
        'pro_long_lescription' => $faker->text($maxNbChars = 500),
        'pro_new_price' => rand(200,500),
        'pro_old_price' => rand(200,500),
        'stock' => rand(20,50),
        'pro_image' => $faker->imageUrl($width = 800, $height = 800),
        'pro_view' => rand(0,0),
        'pro_status' => rand(0,1),
    ];
});
