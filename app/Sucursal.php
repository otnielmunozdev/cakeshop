<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Sucursal extends Model
{
    public $timestamps = false; 
    protected $table = 'sucursales';

    public function empleados()
    {
        return $this->hasMany(Empleado::class);
    }

    public function pedidos()
    {
        return $this->hasMany(Pedido::class);
    }
}
