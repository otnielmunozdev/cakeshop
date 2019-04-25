<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoUsuarioController extends Controller
{

    public function mostrarPedidos()
    {
        $pedido = \Auth::user()->pedidos;
        //$documentos = \Auth::user()->documentos;
        //$pedido = Pedido::all();
        
        return view('Pedidos.mostrarPedidosUsuario', compact('pedido'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = \Auth::user()->pedidos;
        //$documentos = \Auth::user()->documentos;
        //$pedido = Pedido::all();
        
        return view('Pedidos.pedidosUsuariosIndex', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productos = Producto::all();
        $pedido = \Auth::user()->pedidos;
        return view('Pedidos.pedidosUsuariosForm', compact('productos', 'pedidos'));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'fecha_entrega' => 'required|date',
            'producto_id' => 'required',
        ]);
        $request->merge([
            'fecha_solicitado' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
        $pedido = Pedido::create($request->except('producto_id'));    
        $pedido->productos()->attach($request->producto_id);
       
        return redirect()->route('pedidosUser.index')->with([
            'mensaje' => 'Creado Correctamente',
            'alert-class' => 'alert-success'
        ]);
    }

     /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        //dd($pedido);
        return view('Pedidos.pedidosUsuariosShow', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        //dd($pedido);
        $productos = Producto::all();
        //$pedido = \Auth::user()->pedido;
        return view('Pedidos.pedidosUsuariosForm', compact('pedido', 'productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pedido $pedido)
    {
        //Actualiza el documento
        $pedido->update($request->except('producto_id'));
        //Sincroniza los funcionarios relacionados con el documento
        $pedido->productos()->sync($request->producto_id);
        return redirect()->route('pedidosUser.index')->with([
            'mensaje' => 'Actualizado con Exito',
            'alert-class' => 'alert-info'
        ]); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pedido $pedido)
    {
        $pedido->productos()->detach();
        $pedido->delete();
        return redirect()->route('pedidosUser.index')
            ->with([
                'mensaje' => 'Pedido eliminado',
                'alert-class' => 'alert-warning',
            ]);
    }
}
