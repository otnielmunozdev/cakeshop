<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Empleado extends model
//class Empleado extends Authenticatable //nuevo
{
    //use Notifiable; //nuevo

    //protected $guard = 'empleado'; //nuevo


    public $timestamps = false;
    protected $table = 'users';
   // protected $guard = 'empleados';
   

    public function sucursal()
    {
        return $this->belongsToMany(Sucursal::class);
    }

     /**
     * Guarda el nombre en mayúsculas.
     * @param string $nombre
     * @return void
     */
    
    public function setNombreAttribute($nombre)
    {
        $this->attributes['nombre'] = strtoupper($nombre);
    }

    public function setApellidoAttribute($apellido)
    {
        $this->attributes['apellido'] = strtoupper($apellido);
    }
}
