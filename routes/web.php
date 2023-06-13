<?php

use Illuminate\Support\Facades\Route;
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

/* LICENCIAS */
Route::get('reglicencia', [LicController::class, 'index'])->name('reglicencia');
Route::get('visualizar', [LicController::class, 'visualizar'])->name('visualizar');
Route::post('registrarlicencia', [LicController::class, 'registrarLic'])->name('registrarLic');

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

Auth::routes(['reglicencia' => false]);
Route::get('/fpdf', function (Codedge\Fpdf\Fpdf\Fpdf $fpdf) {

    $fpdf->AddPage();
    $fpdf->SetFont('Courier', 'B', 18);
    $fpdf->Cell(50, 25, 'Hello World!');
    $fpdf->Output();
    exit;
});

/* REGISTRAR USUARIOS */

/* Route::get('/register', function () {
    return view('auth.register');
})->name('register'); */




