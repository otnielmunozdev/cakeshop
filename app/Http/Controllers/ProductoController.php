<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        return view('Productos.productoIndex', compact('producto'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Productos.productosForm');
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
            'nombre' => 'required|max:100',
            'tipo_producto' => 'required',
            'precio' => 'required',
            'descripcion' => 'required',
        ]);
        
    
           $produc = new Producto();
           $produc->nombre = $request->input('nombre');//trae la informacion del formualrio del campo llamado dependencia
           $produc->tipo_producto = $request->tipo_producto; //es lo mismo
           $produc->precio = $request->precio;
           $produc->descripcion = $request->descripcion;
           $produc->save();
           return redirect()->route('producto.index')->with([
            'mensaje' => 'Creado Correctamente',
            'alert-class' => 'alert-success'
        ]);//redirige a la ruta en el route list no de la vista
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(Producto $producto)
    {
        return view('Productos.productosShow', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(Producto $producto)
    {
        //dd($producto);
        return view('Productos.productosForm',compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        $producto->nombre = $request->input('nombre');//trae la informacion del formualrio del campo llamado dependencia
           $producto->tipo_producto = $request->tipo_producto; //es lo mismo
           $producto->precio = $request->precio;
           $producto->descripcion = $request->descripcion;
        $producto->save();
        return redirect()->route('producto.show',$producto->id)->with([
            'mensaje' => 'Actualizado con Exito',
            'alert-class' => 'alert-info'
        ]); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();//->onDelete('cascade');
        return redirect()->route('producto.index')->with([
            'mensaje' => 'El producto ha sido eliminado',
            'alert-class' => 'alert-warning'
        ]);
    }
}
