<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    protected $table = 'productos';
    public $timestamps = false;
    use SoftDeletes;

        /**
     * Establece relación hacia muchos documentos
     * @return type
     */

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class);
    }
}
