<?php

use Illuminate\Database\Seeder;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('users')->insert([
            'sucursal_id' => '1',
            'nombre' => 'Administrador',
            'apellido' => 'Administrador',
            'email' => 'administrador@gmail.com',
            'telefono' => '1212121212',
            'rol' => 'Administrador',
            'password' => Hash::make('123456'),
        ]);

        factory(App\Empleado::class, 25)->create();
    }
}
