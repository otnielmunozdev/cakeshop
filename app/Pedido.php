<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $guarded = ['id'];


    /**
     * Establece relación hacia un usuario
     * @return type
     */

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Establece relación hacia un productos
     * @return type
     */

    public function productos()
    {
        return $this->belongsToMany(Producto::class);
    }


    
        /**
     * Obtiene el nombre y cargo del funcionario en un solo atributo "dinámico" (nombre_cargo)
     * @return string
     */
    public function getSolicitadoEntregaAttribute()
    {
        return $this->fecha_solicitado . ' ************* ' . $this->fecha_entrega;
    }
}
