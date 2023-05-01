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
Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');

Route::get('login1.blade.php', function () {
    return view('Paginabicicleta.login.login1');
});

Route::get('login2', function () {
    return view('Paginabicicleta.login.login2');
});

Route::get('Inicio/index.blade.php', function () {
    return view('Paginabicicleta.inicio.index');
});

Route::get('acceso.blade.php', function () {
    return view('Paginabicicleta.acceso.acceso');
});

