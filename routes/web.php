<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\LicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;



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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home.home');
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');


/* Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia'); */
/* Route::resource('registrarLic', LicController::class); */
/* Route::get('reglicencia', [LicenciaController::class, 'index'])->name('reglicencia.index');
Route::get('visualizar', [LicenciaController::class, 'show'])->name('visualizar.show'); */
Route::get('licencias/anulaciones', [LicenciaController::class, 'annulations'])->name('anulaciones');
Route::get('licencias/fpdf/{id}', [LicenciaController::class, 'fpdfLicencia'])->name('fpdfLicencia');
Route::get('licencias/print/{id}', [LicenciaController::class, 'anulacionPrint'])->name('print');
Route::resource('licencias', LicenciaController::class);

/* Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic'); */


/* LISTA USUARIOS */
Route::get('lUsuario', [UserController::class, 'show'])->name('User.show');
/* AGREGAR USUARIOS */
Route::get('aUsuario', [UserController::class, 'index'])->name('User.index');
Route::post('aUsuario', [UserController::class, 'create'])->name('User.create');
/* ACTUALIZACIÓN USUARIOS */
Route::get('editUsuario/{id}', [UserController::class, 'edit'])->name('User.edit');
Route::post('updateUsuario/{id}', [UserController::class, 'update'])->name('User.update');
/* ELIMINAR USUARIOS */
Route::delete('destroyUsuario/{id}', [UserController::class, 'destroy'])->name('User.destroy');

/* ROLES Y PRIVILEGIOS */
Route::get('r&p', [RolController::class, 'index'])->name('Role.index');
Route::get('rolEdit/{id}', [RolController::class, 'edit'])->name('Role.edit');
Route::post('rolUpdate/{id}', [RolController::class, 'update'])->name('Role.update');

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






