<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(\App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'email'=>$faker->email
//        'password' => $faker->password
    ];
});

$factory->define(\App\News::class, function (Faker\Generator $faker) {
    $text = $faker->text(1000);
    return [
        'name' => rtrim($faker->text(15), '.'),
        'announcement' => substr($text, 0, 50),
        'text' => $text,
        'img' => $faker->imageUrl(),
        'category_id' => $faker->numberBetween(1, 6),
        'user_id' => $faker->numberBetween(1, 10)
    ];
});