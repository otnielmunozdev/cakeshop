<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends Model
{
    public $timestamps = false;
    protected $table = 'empleados';
    protected $guard = 'empleados';
   

    public function sucursal()
    {
        return $this->belongsToMany(Sucursal::class);
    }
}
