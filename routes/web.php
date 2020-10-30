<?php

use Illuminate\Support\Facades\Route;

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
    return view('index');
});
Route::get('index', function () {
    return view('index');
});
Route::get('inicio', function () {
    return view('index');
});

//¿Auth o sesiones php?


//Rutas de los controladores

Route::resource('administradores','AdministradoresController');
Route::resource('clientes','ClientesController');
Route::resource('disenios','DiseniosController');
Route::resource('pagos','PagosController');
Route::resource('usuarios','UsuariosController');