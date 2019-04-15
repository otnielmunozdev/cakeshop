<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;
    protected $table = 'empleados';

    public function sucursal()
    {
        return $this->belongsToMany(Sucursal::class);
    }
}
