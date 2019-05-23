<?php

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
        'sucursal_id' => null,
        'nombre' => $faker->name,
        'apellido' => $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'telefono' => $faker->numberBetween($min = 1000000000, $max = 9000000000),
        'rol' =>  null,
        'email_verified_at' => now(),
        'password' => Hash::make('123456'), // secret
        'remember_token' => Str::random(10),
    ];
});
