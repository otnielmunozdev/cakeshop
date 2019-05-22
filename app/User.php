<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellido','email', 'telefono', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function pedidos()
    {
        return $this->hasMany('App\Pedido');
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
