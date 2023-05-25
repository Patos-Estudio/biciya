<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/inicio', function () {
    return view('inicio.index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');

//Route::get('login1.blade.php', function () {
 //   return view('login.login1');
//});


Route::get('/login2', function () {
    return view('login.login2');
});
Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');


// Route::get('acceso', function () {
//     return view('acceso.acceso');
// });
Route::get('/acceso', [App\Http\Controllers\UsuariosController::class, 'index']);

Route::get('create', function () {
    return view('login.create');
});

// Route::resource('users', '\App\Http\Controllers\RegisterController');
