<?php

use Illuminate\Support\Str;
use Faker\Generator as Faker;


$factory->define(App\Sucursal::class, function (Faker $faker) {
        return [
            'direccion' => $faker->address,
            'horario' => '10:00 AM - 10:00 PM',
            'mapa' => $faker->url,
            'telefono' => $faker->numberBetween($min = 1000000000, $max = 9000000000),
        ];
});
