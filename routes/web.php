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

Route::get('Inicio/index.blade.php', function () {
    return view('inicio.index');
});

Auth::routes();
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin/cruds', [App\Http\Controllers\Admin\UsersController::class, 'index'])->name('admin.cruds');

Route::post('/admin/cruds/store', [App\Http\Controllers\Admin\UsersController::class, 'store'])->name('admin.cruds.store');


//Route::resource('usuarios', '\App\Http\Controllers\UsuariosController');

//Route::get('login1.blade.php', function () {
 //   return view('login.login1');
//});

Route::post('/inicio', [App\Http\Controllers\UsController::class, 'store'])->name('admin.cruds.store');

Route::get('login2', function () {
    return view('login.login2');
});



Route::get('acceso.blade.php', function () {
    return view('acceso.acceso');
});



