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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pdf', [App\Http\Controllers\PdfController::class, 'index'])->name('pdf');

<<<<<<< HEAD
/* LICENCIAS */
Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia');
Route::get('visualizar', [LicController::class, 'visualizar'])->name('visualizar');
Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic');
=======

/* Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia'); */
/* Route::resource('registrarLic', LicController::class); */
/* Route::get('reglicencia', [LicenciaController::class, 'index'])->name('reglicencia.index');
Route::get('visualizar', [LicenciaController::class, 'show'])->name('visualizar.show'); */
Route::resource('licencias', LicenciaController::class);
/* Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic'); */
>>>>>>> 3053d1bd3868a7ccca41beeebcb5fa245d41391b

/* ROLES Y PRIVILEGIOS */
Route::get('r&p', [RolController::class, 'index'])->name('index');

/* LISTA USUARIOS */
Route::get('lUsuario', [UserController::class, 'show'])->name('show');
/* AGREGAR USUARIOS */
Route::get('aUsuario', [UserController::class, 'index'])->name('index');
Route::post('aUsuario', [UserController::class, 'create'])->name('create');
/* ACTUALIZACIÓN USUARIOS */
Route::get('editUsuario/{id}', [UserController::class, 'edit'])->name('edit');
Route::post('updateUsuario/{id}', [UserController::class, 'update'])->name('update');
/* ELIMINAR USUARIOS */
Route::delete('destroyUsuario/{id}', [UserController::class, 'destroy'])->name('destroy');

<<<<<<< HEAD
Auth::routes(['reglicencia' => false]);
Route::get('/fpdf', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {

    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(50, 25, 'Hello World!');
    $fpdf->Output();
    exit;
});
=======
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
>>>>>>> 3053d1bd3868a7ccca41beeebcb5fa245d41391b

/* REGISTRAR USUARIOS */






