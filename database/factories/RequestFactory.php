<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Request;
use Faker\Generator as Faker;

$factory->define(Request::class, function (Faker $faker) {
    return [
        'auto_id'        => $faker->randomDigit,
        'type'           => $faker->randomElement(Request::TYPES),
        'fio'            => $faker->name,
        'email'          => $faker->unique()->safeEmail,
        'phone'          => $faker->phoneNumber,
        'mark'           => $faker->optional()->firstNameFemale,
        'model'          => $faker->optional()->lastName,
        'year'           => $faker->optional()->year,
        'price'          => $faker->numberBetween(300000),
        'advance'        => $faker->numberBetween(0, 750000),
        'duration_years' => $faker->numberBetween(1, 7),
        'transmission'   => $faker->optional()->word,
        'volume'         => $faker->optional()->randomFloat(2, 0, 5),
        'text'           => $faker->optional()->text(100),
    ];
});
