<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request; 
use Yajra\Datatables\Datatables;

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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }

        // $sucursales = DB::table('sucursales')->get();
       $sucursales = Sucursal::paginate(3); //Documento::where() tambien se pueden utilizar select etc.
        //->where('id', '>' ,'1')
        //->where('envia','pedro');
 
    //dd($sucursales);
    //return $docs;
       // return view('Paginas.sucursales', compact('sucursales'));
        //->with(['docs'=> $docs]);
        //return view('Sucursales.sucursalIndex',compact('sucursales')); //'carpeta','nombrevista'
        //return Datatables::eloquent(App\Sucursal::query())->make(true);
       // return datatables()->eloquent(Sucursal::query())->make(true);
       return view('Sucursales.sucursalIndex',compact('sucursales'));
        
    }
    
   /* public function mostrarSucursalAjax()
    {
       // return datatables()->eloquent(Sucursal::query())->make(true);
       $sucursales = Sucursal::all();//select(['id', 'direccion', 'horario', 'mapa', 'telefono']);

        return Datatables::of($sucursales)
            ->addColumn('action', function ($sucursales) {
                return '<a href="sucursales/'.$sucursales->id.' " class="btn btn-info btn-sm"><i class="fas fa-exclamation"></i> Detalles</a>';
            })
            ->editColumn('id', 'ID: {{$id}}')
            ->removeColumn('password')
            ->make(true);
        
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Aplica DocumentoPolicy@delete
        if(\Auth::user()->cannot('Admin')){
            return redirect()->back();
        }


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
       $request->validate([
        'direccion' => 'required|min:10|max:100',
        'horario' => 'required|min:19|max:19',
        'mapa' => 'required|url|min:30',
        'telefono' => 'required|min:10', 
    ]);
    

       $suc = new Sucursal();
       $suc->direccion = $request->input('direccion');//trae la informacion del formualrio del campo llamado dependencia
       $suc->horario = $request->horario; //es lo mismo
       $suc->mapa = $request->mapa;
       $suc->telefono = $request->telefono;
       $suc->save();
       return redirect()->route('sucursales.index')->with([
        'mensaje' => 'Creado Correctamente',
        'alert-class' => 'alert-success'
    ]);//redirige a la ruta en el route list no de la vista
   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function show(Sucursal $sucursale)
    {
        //Aplica DocumentoPolicy@delete
        if(\Auth::user()->cannot('Admin')){
            return redirect()->back();
        }
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
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
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
        $sucursale->direccion = $request->input('direccion');//trae la informacion del formualrio del campo llamado dependencia
        $sucursale->horario = $request->horario; //es lo mismo
        $sucursale->mapa = $request->mapa;
        $sucursale->telefono = $request->telefono;
        $sucursale->save();
        return redirect()->route('sucursales.show',$sucursale->id)->with([
            'mensaje' => 'Actualizado con Exito',
            'alert-class' => 'alert-info'
        ]); //redirige a la ruta en el route list no de la vista 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sucursal  $sucursal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sucursal $sucursale)
    {
        if (\Gate::denies('Admin')) {
            return redirect()->back()
                ->with(['mensaje' => 'No tienes acceso']);
        }
        $sucursale->delete();//->onDelete('cascade');
        return redirect()->route('sucursales.index')->with([
            'mensaje' => 'La sucursal ha sido eliminada',
            'alert-class' => 'alert-warning'
        ]);
    }
}
