<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $guarded = ['id'];
    protected $dates = ['fecha_solicitado', 'fecha_entrega', 'created_at', 'updated_at', 'deleted_at'];


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

    public function sucursal()
    {
        return $this->belongsToMany(Sucursal::class);
    }


    
        /**
     * Obtiene el nombre y cargo del funcionario en un solo atributo "dinámico" (nombre_cargo)
     * @return string
     */
    public function getSolicitadoEntregaAttribute()
    {
        return $this->fecha_solicitado->format('d/m/Y') . ' ************* ' . $this->fecha_entrega->format('d/m/Y');
    }
}
