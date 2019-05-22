<?php

namespace App\Http\Controllers;

use App\Empleado;
use App\User;
use App\Sucursal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class EmpleadoController extends Controller
{
    //use AuthenticatesUsers;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    public function login()
    {
        return view('inicioAdministrador');
    }



   /* public function showloginForm()
    {
       
        return view('administrators.login');
    }

    

    public function authenticated(){
        return redirect('inicioAdministrador');
    }*/


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
        //return datatables()->eloquent(Empleado::query())->toJson();
        return view('Empleados.empleadosIndex');
    }

    public function mostrarEmpleadoAjax()
    {
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }

        $request->validate([
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => ['required', 'email', 'unique:empleados'],
            //'fecha_nac' => 'required|date',
            'telefono' => 'required|min:10|max:15',
            'rol' => 'required',
            'password' => 'required',
            'sucursal_id' => 'required',
            
        ]);
        

        $empleado = new Empleado;
        //$documento->user_id = Auth::id(); //recupera la info del usuario $request->user()->id;
        
        $empleado->sucursal_id = $request->sucursal_id; //user()->id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
        //$empleado->fecha_nac = $request->fecha_nac;
        $empleado->telefono = $request->telefono;
        $empleado->password = Hash::make($request['password']); 
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }

        $empleado->sucursal_id = $request->sucursal_id; //user()->id;
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->email = $request->email;
       // $empleado->fecha_nac = $request->fecha_nac;
        $empleado->telefono = $request->telefono;
        $empleado->rol = $request->rol;
        $empleado->password = Hash::make($request['password']);
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        } 
        $empleado->delete();
        return redirect()->route('empleados.index')
            ->with([
                'mensaje' => 'Empleado eliminado',
                'alert-class' => 'alert-warning',
            ]);
    }
}
