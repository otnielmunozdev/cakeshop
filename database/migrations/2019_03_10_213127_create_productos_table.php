<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
           // $table->unsignedInteger('cliente_id');
            $table->string('nombre');
            $table->string('tipo_producto');
            $table->integer('precio');
            $table->text('descripcion');
            $table->string('imagen');
            $table->softDeletes();

            //$table->foreign('cliente_id')->references('id')->on('clientes');
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
        Schema::dropIfExists('productos');
        
    }
}
