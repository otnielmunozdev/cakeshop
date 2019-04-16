<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        //dd($usuarios);
        return view('Users.userIndex');
    }

    public function mostrarUsuariosAjax()
    {
       // return datatables()->eloquent(Sucursal::query())->make(true);
       $usuarios = User::all();//select(['id', 'direccion', 'horario', 'mapa', 'telefono']);
       

        return Datatables::of($usuarios)
            ->addColumn('action', function ($usuarios) {
                return '<a href="user/'.$usuarios->id.' " class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalles</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
           // return datatables()->eloquent(User::query())->toJson();
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Users.userForm');
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
       $request->validate([
        'nombre' => 'required',
        'apellido' => 'required',
        'email' => 'required|email',
        'telefono' => 'required|min:10',
        'password' => 'required',

    ]);
    

       $usuario = new User();
       $usuario->nombre = $request->input('nombre');//trae la informacion del formualrio del campo llamado dependencia
       $usuario->apellido = $request->apellido; //es lo mismo
       $usuario->email = $request->email;
       $usuario->telefono = $request->telefono;
       $usuario->password = Hash::make($request['password']);
       
       $usuario->save();
       return redirect()->route('user.index')->with([
        'mensaje' => 'Creado Correctamente',
        'alert-class' => 'alert-success'
    ]);//redirige a la ruta en el route list no de la vista
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('Users.userShow',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('Users.userForm',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $user->nombre = $request->input('nombre');//trae la informacion del formualrio del campo llamado dependencia
        $user->apellido = $request->apellido; //es lo mismo
        $user->email = $request->email;
        $user->telefono = $request->telefono;
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('user.show',$user->id)->with([
            'mensaje' => 'Actualizado con Exito',
            'alert-class' => 'alert-info'
        ]); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();//->onDelete('cascade');
        return redirect()->route('user.index')->with([
            'mensaje' => 'EL cliente ha sido eliminada',
            'alert-class' => 'alert-warning'
        ]);
    }
}
