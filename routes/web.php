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

Route::get('empleados/login', 'EmpleadoController@showloginForm');//login de empleados
Route::post('empleados/login', 'EmpleadoController@login');

Route::get('/inicioAdministrador', function () {
    return view('inicioAdministrador');//->middleware('empleados');
});

//Route::get('/inicioAdministrador','empleados-home')->middleware('empleados');

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

Route::resource('/user','UserController');
Route::get('api/user','UserController@mostrarUsuariosAjax'); //datatables 

Route::resource('/pedidos','PedidoController');

Route::post('pedidos/elimina-producto/{pedido}', 'PedidoController@eliminaProducto')->name('pedidos.eliminaProducto');

Route::resource('/pedidosUser', 'PedidoUsuarioController')->middleware('auth');
Route::get('/pedidoUserLista', 'PedidoUsuarioController@mostrarPedidos')->middleware('auth');

Route::resource('/mail', 'MailController'); //correos de contacto


Route::get('/productos', 'PaginasController@productos');
Route::get('/promociones', 'PaginasController@promociones');
Route::get('/administrador', 'PaginasController@administrador');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/empleado', 'EmpleadoLoginController@login')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home'); 

Route::group(['prefix'=> 'empleados'], function() {

    // Login Routes...
        Route::get('login', ['as' => 'empleado.login', 'uses' => 'EmpleadoAuth\LoginController@showLoginForm']); 
        Route::post('login', ['as' => 'empleado.login', 'uses' => 'EmpleadoAuth\LoginController@login']);
        Route::post('logout', ['as' => 'empleado.logout', 'uses' => 'EmpleadoAuth\LoginController@logout']);
    
    // Registration Routes esto no lo necesito
        Route::get('register', ['as' => 'empleado.register', 'uses' => 'EmpleadoAuth\RegisterController@showRegistrationForm']);
        Route::post('register', ['uses' => 'EmpleadoAuth\RegisterController@register']);
    
    // Password Reset Routes...
        Route::get('password/reset', ['as' => 'empleado.password.reset', 'uses' => 'EmpleadoAuth\ForgotPasswordController@showLinkRequestForm']);
        Route::post('password/email', ['as' => 'empleado.password.email', 'uses' => 'EmpleadoAuth\ForgotPasswordController@sendResetLinkEmail']);
        Route::get('password/reset/{token}', ['as' => 'empleado.password.reset.token', 'uses' => 'EmpleadoAuth\ResetPasswordController@showResetForm']);
        Route::post('password/reset', ['uses' => 'EmpleadoAuth\ResetPasswordController@reset']);
    });

    //Route::get('/inicioAdministrador','empleado-home')->middleware('empleados');
