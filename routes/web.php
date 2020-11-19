<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DispositivoController;
use App\Http\Controllers\PendienteController;
use App\Http\Controllers\PagoController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\CalendarioController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\AcercaDeController;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\IniciarSesionController;
use App\Http\Controllers\InformacionController;

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

Route::resource('/inicio', InicioController::class);
Route::resource('/', InicioController::class);
Route::resource('/informacion', InformacionController::class);
Route::resource('/acerca-de', AcercaDeController::class);
Route::resource('/contacto', ContactoController::class);
Route::resource('/iniciar-sesion', IniciarSesionController::class);

Route::resource('/admin', AdminController::class);

Route::resource('/clientes', ClienteController::class);
Route::resource('/dispositivos', DispositivoController::class);
Route::resource('/pendientes', PendienteController::class);
Route::resource('/pagos', PagoController::class);
Route::resource('/empleados', EmpleadoController::class);
Route::resource('/calendario', CalendarioController::class);
