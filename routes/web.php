<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActividadController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::view('/', 'inicio')->name('inicio');
Route::post('/registro', [AuthController::class, 'registro'])->name('registro');
Route::post('/inicio-sesion', [AuthController::class, 'inicioSesion'])->name('inicio-sesion');

Route::get('/actividades', [ActividadController::class, 'index'])->name('index.actividades');
Route::post('/actividades/guardar-registro', [ActividadController::class, 'guardarRegistro'])->name('guardar-registro');
Route::get('/actividades/resumen', [ActividadController::class, 'resumen'])->name('resumen.actividades');
