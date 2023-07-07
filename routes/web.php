<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LicenciaController;
use App\Http\Controllers\ZonificacionController;
use App\Http\Controllers\SeguimientoController;
use App\Http\Controllers\LicController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\GiroController;

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
    return view('auth.login');
})->name('login');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('Home.home');
Route::get('/licencias/pdf/{id}', [PdfController::class, 'index'])->name('pdf');

Route::get('/qr', [PdfController::class, 'show'])->name('qr');

Route::get('listahabilitacion', [LicenciaController::class, 'habilitacion'])->name('habilitaciones');
Route::post('licencias/desanular/{id}', [LicenciaController::class, 'desAnulacion'])->name('desanular');
Route::post('licencias/anular/{id}', [LicenciaController::class, 'anulacion'])->name('anular');
Route::post('licencias/desPrint/{id}', [LicenciaController::class, 'desAnulacionPrint'])->name('desPrint');
/* Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia'); */
/* Route::resource('registrarLic', LicController::class); */
/* Route::get('reglicencia', [LicenciaController::class, 'index'])->name('reglicencia.index');
Route::get('visualizar', [LicenciaController::class, 'show'])->name('visualizar.show'); */
Route::get('licencias/anulaciones', [LicenciaController::class, 'annulations'])->name('anulaciones');
Route::get('licencias/fpdf/{id}', [LicenciaController::class, 'fpdfLicencia'])->name('fpdfLicencia');
Route::get('licencias/print/{id}', [LicenciaController::class, 'anulacionPrint'])->name('print');

Route::get('licencias/getSunatDatos/{ruc}', [LicenciaController::class, 'getSunatDatos'])->name('getSunatDatos');;
Route::get('licencias/getSector/{zona}', [LicenciaController::class, 'getSector'])->name('getSector');;

Route::get('licencias/sector', [SectorController::class, 'index'])->name('sector');
Route::get('licencias/giro', [GiroController::class, 'index'])->name('giro');
Route::get('licencias/zonificacion', [ZonificacionController::class, 'index'])->name('zonificacion');

Route::post('licencias/sector', [SectorController::class, 'create'])->name('create.sector');
Route::post('licencias/giro', [GiroController::class, 'create'])->name('create.giro');
Route::post('licencias/zonificacion', [ZonificacionController::class, 'create'])->name('create.zonificacion');

Route::resource('licencias', LicenciaController::class);

Route::get('seguimiento', [SeguimientoController::class, 'index'])->name('seguimiento');
/* LISTA USUARIOS */
Route::get('lista/usuario', [UserController::class, 'show'])->name('User.show');
/* AGREGAR USUARIOS */
Route::get('agregar/usuario', [UserController::class, 'index'])->name('User.index');
Route::post('agregar/usuario', [UserController::class, 'create'])->name('User.create');
/* ACTUALIZACIÓN USUARIOS */
Route::get('editusuario/{id}', [UserController::class, 'edit'])->name('User.edit');
Route::post('updateusuario/{id}', [UserController::class, 'update'])->name('User.update');
/* ELIMINAR USUARIOS */
Route::delete('destroyusuario/{id}', [UserController::class, 'destroy'])->name('User.destroy');

/* ROLES Y PRIVILEGIOS */
Route::get('ryp', [RolController::class, 'index'])->name('Role.index');
Route::get('roledit/{id}', [RolController::class, 'edit'])->name('Role.edit');
Route::post('rolupdate/{id}', [RolController::class, 'update'])->name('Role.update');

/* Route::post('/home', 'LicController@registrarLic'); */
Route::get('sweet', [PdfController::class, 'watch'])->name('sweet');

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






