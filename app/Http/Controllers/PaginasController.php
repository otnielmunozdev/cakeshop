<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function informacion()
    {
        return view("Paginas.informacion");
    }

    public function contacto()
    {
        return view("Paginas.contacto");
    }

    public function productos()
    {
        return view("Paginas.productos");
    }

    public function sucursales()
    {
        return view("Paginas.sucursales");
    }

    public function promociones()
    {
        return view("Paginas.promociones");
    }

    public function administrador()
    {
        return view("Paginas.administrador");
    }
}

