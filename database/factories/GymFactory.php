<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Gym;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

$factory->define(Gym::class, function (Faker $faker) {
    return [
        'gname' => $faker->company,
        'gcity' => $faker->randomElement($array = array ('Panvel', 'Thane', 'Nerul', 'Vashi')),
        'gphone' => $faker->unique()->numberBetween(200000,900000),
        'email' => $faker->unique()->safeEmail,
        'password' => Hash::make('12345678'),
    ];
});
