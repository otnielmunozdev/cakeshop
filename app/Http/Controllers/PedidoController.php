<?php

namespace App\Http\Controllers;

use App\Pedido;
use App\Producto;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pedido = Pedido::all();
        //Realiza una consulta de los documentos del usuario logeado
        //$documentos = \Auth::user()->documentos;
        
        return view('Pedidos.pedidosIndex', compact('pedido'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       // $usuarios = User::all()->orderBy('apellido', 'desc');
       $usuarios = DB::table('users')
                ->orderBy('apellido', 'asc')
                ->get();
        $productos = Producto::all();
        return view('Pedidos.pedidosForm', compact('usuarios', 'productos'));
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
            'user_id' => 'required|',
            'fecha_entrega' => 'required|date',
            'producto_id' => 'required',
        ]);

        //dd($request);
        //Agrega el campo 'recibido' al $request
        $request->merge([
            'fecha_solicitado' => \Carbon\Carbon::now()->toDateTimeString()
        ]);
         //Guarda todos los campos del formualrio (que están en $request)
        //Documento::create($request->all());
        /*
         * Guarda $request en documentos, excepto 'funcionarios_id' 
         * que no es parte de la tabla 'documentos' pero la enviamos en el formulario
         * para realizar la relación muchos a muchos entre Documento y Funcionario.
         * Una vez creado el Documento, lo asigna a $doc
         */
        $pedido = Pedido::create($request->except('producto_id'));    
         /*
         * Crea la relación entre el documento y los funcionarios
         * Desde la instancia de $documento, se llama al métod funcionarios (del Modelo Documento)
         * para crear la realción con el método attach() que recibe uno o muchos IDs de los funcionarios.
         */
        $pedido->productos()->attach($request->producto_id);
       
        // $pedido = DB::table('pedidos')->get()->pluck('producto_id');
        //$pedidoArray = $pedido->all();
        //'producto_id' = $request->producto_id;
        //$pedido->productos()->attach($request->producto_id);
                /*
         * Crea un nuevo documento utilizando todo el contenido de $request y lo asocia con un usuario
         */
        // $documento = new Documento($request->all()); //Crea un nuevo documento en memoria
        // $user = User::find($request->user_id); //Crea una instancia del usuario
        // $user->documentos()->save($documento); //Guarda el documento ($documento) asociandolo con el usuario
        /*
         * Crea un nuevo documento en memoria asignando los valores de cada columna
         */
        // $documento = new Documento([
        //     'envia' => $request->envia,
        //     'no_oficio' => $request->no_oficio,
        //     'fecha_oficio' => $request->fecha_oficio,
        //     'recibido' => \Carbon\Carbon::now()->toDateTimeString()
        // ]);
    
        /*
         * Crea un nuevo documento creando una nueva instancia de Documento
         * y asignando cada propiedad. Guarda a la base de datos utilizando el método save()
         */
        // $documento = new Documento;
        // $documento->user_id = $request->user_id;
        // $documento->envia = $request->envia;
        // $documento->no_oficio = $request->no_oficio;
        // $documento->fecha_oficio = $request->fecha_oficio;
        // $documento->recibido = \Carbon\Carbon::now()->toDateTimeString();          
        // $documento->save();
        //Redirecciona hacia ruta doumentos.index
        
        
        return redirect()->route('pedidos.index')->with([
            'mensaje' => 'Creado Correctamente',
            'alert-class' => 'alert-success'
        ]);//redirige a la ruta en el route list no de la vista
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function show(Pedido $pedido)
    {
        return view('Pedidos.pedidoShow', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pedido  $pedido
     * @return \Illuminate\Http\Response
     */
    public function edit(Pedido $pedido)
    {
        $usuarios = User::all();
        $productos = Producto::all();
        return view('Pedidos.pedidosForm', compact('pedido', 'usuarios', 'productos'));
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
        return redirect()->route('pedidos.index')->with([
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
        /*
         * Elimina la relación entre documento y funcionarios.
         * No se requiere si se agregó un FK constraint con onDelete('cascade')
         */
        $pedido->productos()->detach();
        $pedido->delete();
        return redirect()->route('pedidos.index')
            ->with([
                'mensaje' => 'Pedido eliminado',
                'alert-class' => 'alert-warning',
            ]);
    }

    /**
     * Elimina la relación de un funcionario con el documento
     * @param Request $request 
     * @param Pedido $pedido 
     * @return \Illuminate\Http\Response
     */
    public function eliminaProducto(Request $request, Pedido $pedido)
    {
        $pedido->productos()->detach($request->producto_id);
        return redirect()->route('pedidos.show', $pedido->id);
    }
}
