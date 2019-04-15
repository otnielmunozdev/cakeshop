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
    return view('inicioAdministrador');
});

Route::get('/sucursalesGDL','SucursalController@mostrarSucursalVistaUsuario');
Route::get('api/sucursales','SucursalController@mostrarSucursalAjax'); //datatables

Route::get('/informacion', 'PaginasController@informacion');
Route::get('/contacto', 'PaginasController@contacto');
//Route::get('/sucursales', 'SucursalController@index')->name('sucursales.index');
Route::resource('/sucursales','SucursalController');
Route::resource('/empleados','EmpleadoController');
Route::get('api/empleados','EmpleadoController@mostrarEmpleadoAjax'); //datatables 


Route::resource('/producto','ProductoController');
Route::get('/pasteles','ProductoController@mostrarPastelesVistaUsuario');
Route::get('/galletas','ProductoController@mostrarGalletasVistaUsuario');
Route::get('/muffins','ProductoController@mostrarMuffinsVistaUsuario');
Route::get('/pays','ProductoController@mostrarPaysVistaUsuario');
Route::get('/gelatinas','ProductoController@mostrarGelatinasVistaUsuario');


Route::get('/productos', 'PaginasController@productos');
Route::get('/promociones', 'PaginasController@promociones');
Route::get('/administrador', 'PaginasController@administrador');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
