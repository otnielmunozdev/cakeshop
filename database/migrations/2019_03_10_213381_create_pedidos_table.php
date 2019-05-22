<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
           // $table->unsignedInteger('producto_id');
           // $table->unsignedInteger('empleado_id')->nullable();
            $table->date('fecha_solicitado');
            $table->date('fecha_entrega');
            //$table->integer('precio_total');
            //$table->boolean('status_entrega');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
           // $table->foreign('producto_id')->references('id')->on('productos');
           // $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->timestamps();
        });

        Schema::create('pedido_producto', function (Blueprint $table) {
            $table->unsignedInteger('pedido_id');
            $table->unsignedInteger('producto_id');
            $table->foreign('pedido_id')
                ->references('id')
                ->on('pedidos')
                ->onDelete('cascade');
            $table->foreign('producto_id')
                ->references('id')
                ->on('productos');
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('pedido_producto');
       
    }
}
