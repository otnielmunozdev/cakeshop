<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Empleado::class, function (Faker $faker) {
        return [
            'sucursal_id' => '1',
            'nombre' => $faker->name,
            'apellido' => $faker->lastname,
            'email' => $faker->unique()->safeEmail,
            //'fecha_nac' => $faker->date,
            'telefono' => $faker->numberBetween($min = 1000000000, $max = 9000000000),
            'rol' =>  'Empleado',
            'password' => Hash::make('123456'), // secret
        ];
});
