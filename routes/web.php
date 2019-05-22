<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/inicioAdministrador', function () {
    if(Auth::user()->rol == 'Empleado' || Auth::user()->rol == 'Administrador'){
        return view('inicioAdministrador');  
    }
    else{
        return view('home');
    }
   // return view('inicioAdministrador');//->middleware('empleados');
})->middleware('auth');

//Route::get('/inicioAdministrador','empleados-home')->middleware('empleados');

Route::get('/sucursalesGDL','SucursalController@mostrarSucursalVistaUsuario');
Route::get('api/sucursales','SucursalController@mostrarSucursalAjax'); //datatables

Route::get('/informacion', 'PaginasController@informacion');
Route::get('/contacto', 'PaginasController@contacto');
//Route::get('/sucursales', 'SucursalController@index')->name('sucursales.index');
Route::resource('/sucursales','SucursalController')->middleware('auth','can:Admin');
Route::resource('/empleados','EmpleadoController')->middleware('auth','can:Admin');
Route::get('api/empleados','EmpleadoController@mostrarEmpleadoAjax')->middleware('auth','can:Admin'); //datatables 


Route::resource('/producto','ProductoController')->middleware('auth');
Route::get('/pasteles','ProductoController@mostrarPastelesVistaUsuario');
Route::get('/galletas','ProductoController@mostrarGalletasVistaUsuario');
Route::get('/muffins','ProductoController@mostrarMuffinsVistaUsuario');
Route::get('/pays','ProductoController@mostrarPaysVistaUsuario');
Route::get('/gelatinas','ProductoController@mostrarGelatinasVistaUsuario');

Route::resource('/user','UserController')->middleware('auth');
Route::get('api/user','UserController@mostrarUsuariosAjax')->middleware('auth'); //datatables 

Route::resource('/pedidos','PedidoController')->middleware('auth');

Route::post('pedidos/elimina-producto/{pedido}', 'PedidoController@eliminaProducto')->name('pedidos.eliminaProducto')->middleware('auth');

Route::resource('/pedidosUser', 'PedidoUsuarioController')->middleware('auth');//->middleware('auth');
Route::get('/pedidoUserLista', 'PedidoUsuarioController@mostrarPedidos')->middleware('auth');//->middleware('auth');

Route::resource('/mail', 'MailController'); //correos de contacto


Route::get('/productos', 'PaginasController@productos');
Route::get('/promociones', 'PaginasController@promociones');
Route::get('/administrador', 'PaginasController@administrador')->middleware('auth');


Auth::routes();

Route::get('/home', function(){
    if(Auth::user()->rol == 'Empleado' || Auth::user()->rol == 'Administrador'){
        return view('inicioAdministrador');  
    }
    else{
        return view('home');
    }
})->name('home')->middleware('auth');
