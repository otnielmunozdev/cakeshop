<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\Sucursal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class EmpleadoController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return datatables()->eloquent(Empleado::query())->toJson();
        return view('Empleados.empleadosIndex');
    }

    public function mostrarEmpleadoAjax()
    {
       // return datatables()->eloquent(Sucursal::query())->make(true);
       $sucursales = Sucursal::all();
       $empleados = Empleado::all();

       //dd($empleados);
      
        return Datatables::of($empleados)
            ->addColumn('action', function ($empleados) {
                return '<a href="empleados/'.$empleados->id.' " class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalles</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sucursales = Sucursal::all();
        //dd($sucursales);
        return view('Empleados.empleadosForm',compact('sucursales'));
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
            'nombre' => 'required',
            'apellido' => 'required',
            'correo' => 'required|email',
            'fecha_nac' => 'required|date',
            'telefono' => 'required|min:10|max:15',
            'rol' => 'required',
            'sucursal_id' => 'required',
        ]);

        $empleado = new Empleado;
        //$documento->user_id = Auth::id(); //recupera la info del usuario $request->user()->id;
        $empleado->sucursal_id = $request->sucursal_id; //user()->id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->correo = $request->correo;
        $empleado->fecha_nac = $request->fecha_nac;
        $empleado->telefono = $request->telefono;
        $empleado->rol = $request->rol;
        $empleado->save();
        return redirect()->route('empleados.index')->with([
            'mensaje' => 'Creado Correctamente',
            'alert-class' => 'alert-success'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        return view('Empleados.empleadoShow', compact('empleado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(Empleado $empleado)
    {
        $sucursales = Sucursal::all();
        
        return view('Empleados.empleadosForm', compact('empleado','sucursales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empleado $empleado)
    {
        $empleado->sucursal_id = $request->sucursal_id; //user()->id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->correo = $request->correo;
        $empleado->fecha_nac = $request->fecha_nac;
        $empleado->telefono = $request->telefono;
        $empleado->rol = $request->rol;
        $empleado->save();
        return redirect()->route('empleados.show',$empleado->id)->with([
            'mensaje' => 'Actualizado con Exito',
            'alert-class' => 'alert-info'
        ]); //redirige a la ruta en el route list no de la vista 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empleado $empleado)
    {
        $empleado->delete();
        return redirect()->route('empleados.index')
            ->with([
                'mensaje' => 'Empleado eliminado',
                'alert-class' => 'alert-warning',
            ]);
    }
}