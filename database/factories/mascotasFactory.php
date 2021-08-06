<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\mascotas;
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

$factory->define(mascotas::class, function (Faker $faker) {
    return [
        'nombre' => $faker->firstNameFemale(),
        'raza' => $faker->jobTitle(),
        'fecha_nacimiento' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'propietario' => $faker->name(),
        'tel_propietario' => $faker->phoneNumber(),
        'dir_propietario' => $faker->address(),
        'email_propietario' => $faker->unique()->safeEmail(),
    ];
});
