<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->unsignedInteger('sucursal_id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->date('fecha_nac');
            $table->char('telefono','15');
            $table->string('rol');
            $table->string('password');
            $table->foreign('sucursal_id')->references('id')->on('sucursales')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
