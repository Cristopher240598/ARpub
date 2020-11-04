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

//Rutas para probar vistas
Route::get('/', function ()
{
    return view('clientes/index');
})->name('inicio');

Route::get('/services', function ()
{
    return view('clientes/services');
})->name('servicios');

Route::get('/users', function ()
{
    return view('clientes/users');
})->name('usuarios');

Route::get('/clients', function ()
{
    return view('clientes/clients');
})->name('clientes');

Route::get('/login', function ()
{
    return view('clientes/login');
})->name('login');

Route::get('/user', function ()
{
    return view('clientes/index-user');
})->name('index-usuario');

Route::get('/create-design', function ()
{
    return view('clientes/create-design');
})->name('crear-disenio');

Route::get('/modify-profile', function ()
{
    return view('clientes/modify-profile');
})->name('modificar-perfil');

Route::get('/login-admin', function ()
{
    return view('clientes/login-admin');
})->name('login-admin');

Route::get('/admin', function ()
{
    return view('clientes/index-admin');
})->name('index-admin');
//Fin rutas para probar vistas





Route::get('index', function ()
{
    return view('index');
});

Route::get('inicio', function ()
{
    return view('index');
});

//¿Auth o sesiones php?


//Rutas de los controladores

Route::resource('administradores', 'AdministradoresController');
Route::resource('clientes', 'ClientesController');
Route::resource('disenios', 'DiseniosController');
Route::resource('pagos', 'PagosController');
Route::resource('usuarios', 'UsuariosController');
