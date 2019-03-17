<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\DB;
use App\Sucursal;
use Illuminate\Http\Request;


class SucursalController extends Controller
{
    public function index()
    {
        
       // $sucursales = DB::table('sucursales')->get();
        $sucursales = Sucursal::all(); //Documento::where() tambien se pueden utilizar select etc.
        //->where('id', '>' ,'1')
        //->where('envia','pedro');
 
        //dd($sucursales);
    //return $docs;
        return view('Paginas.sucursales', compact('sucursales'));
        //->with(['docs'=> $docs]);
    }
}
