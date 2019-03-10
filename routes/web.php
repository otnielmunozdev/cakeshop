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

Route::get('/informacion', 'PaginasController@informacion');
Route::get('/contacto', 'PaginasController@contacto');
Route::get('/productos', 'PaginasController@productos');
Route::get('/promociones', 'PaginasController@promociones');
Route::get('/sucursales', 'PaginasController@sucursales');
Route::get('/administrador', 'PaginasController@administrador');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
