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
    return view('login.login1');
});

Route::get('login2', function () {
    return view('login.login2');
});

Route::get('Inicio/index.blade.php', function () {
    return view('inicio.index');
});

Route::get('acceso.blade.php', function () {
    return view('acceso.acceso');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
