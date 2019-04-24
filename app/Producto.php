<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamps = false;

        /**
     * Establece relación hacia muchos documentos
     * @return type
     */

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
