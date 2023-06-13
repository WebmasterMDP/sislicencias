<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\LicController;
use App\Http\Controllers\UserController;


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

/* Route::get('/', function () {
    return view('welcome');
}); */




Route::get('/', function () {
    return view('auth.login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');


/* Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia'); */
/* Route::resource('registrarLic', LicController::class); */
/* Route::get('reglicencia', [LicenciaController::class, 'index'])->name('reglicencia.index');
Route::get('visualizar', [LicenciaController::class, 'show'])->name('visualizar.show'); */
Route::resource('licencias', LicenciaController::class);
/* Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic'); */

Route::get('lUsuario', [UserController::class, 'show'])->name('show');

Route::get('aUsuario', [UserController::class, 'index'])->name('index');
Route::post('aUsuario', [UserController::class, 'create'])->name('create');

/* ACTUALIZACIÓN USUARIOS */
Route::get('editUsuario/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('updateUsuario/{id}', [UserController::class, 'update'])->name('update');

/* ELIMINAR USUARIOS */
Route::delete('destroyUsuario/{id}', [UserController::class, 'destroy'])->name('destroy');

/* Route::post('/home', 'LicController@registrarLic'); */

Auth::routes(['register' => false,
/* 'reset' => false,
'verify' => false,
'confirm' => false,
'logout' => false,
'login' => true,
'password.request' => false,
'password.email' => false,
'password.update' => false,
'password.reset' => false,
'password.confirm' => false,
'password.confirmation' => false,
'password.verify' => false,
'password.confirm' => false, */
]);

/* REGISTRAR USUARIOS */






