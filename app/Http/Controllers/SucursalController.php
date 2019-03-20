<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    public function mostrarSucursalVistaUsuario()
    {
        $sucursales = Sucursal::all();
        return view('Paginas.sucursales', compact('sucursales'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $sucursales = DB::table('sucursales')->get();
        $sucursales = Sucursal::all(); //Documento::where() tambien se pueden utilizar select etc.
        //->where('id', '>' ,'1')
        //->where('envia','pedro');
 
        //dd($sucursales);
    //return $docs;
       // return view('Paginas.sucursales', compact('sucursales'));
        //->with(['docs'=> $docs]);
        return view('Sucursales.sucursalIndex',compact('sucursales')); //'carpeta','nombrevista'
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Sucursales.sucursalForm');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd('Entra a metodo storage');
       // dd($request->all());
       $suc = new Sucursal();
       $suc->direccion = $request->input('direccion');//trae la informacion del formualrio del campo llamado dependencia
       $suc->horario = $request->horario; //es lo mismo
       $suc->mapa = $request->mapa;
       $suc->telefono = $request->telefono;
       $suc->save();
       return redirect()->route('sucursales.index');//redirige a la ruta en el route list no de la vista
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursale)
    {
        //dd($sucursale);
        return view('Sucursales.sucursalShow',compact('sucursale'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function edit(Sucursal $sucursale)
    {
        //dd($sucursale);
        return view('Sucursales.sucursalForm',compact('sucursale'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sucursal $sucursale)
    {
        $sucursale->direccion = $request->input('direccion');//trae la informacion del formualrio del campo llamado dependencia
        $sucursale->horario = $request->horario; //es lo mismo
        $sucursale->mapa = $request->mapa;
        $sucursale->telefono = $request->telefono;
        $sucursale->save();
        return redirect()->route('sucursales.show',$sucursale->id); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursale)
    {
        $sucursale->delete();//->onDelete('cascade');
        return redirect()->route('sucursales.index');
    }
}
