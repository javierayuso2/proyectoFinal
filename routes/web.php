<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/actividades', [ActividadController::class, 'index'])->name('index.actividades');
Route::get('/actividades/resumen', [ActividadController::class, 'resumen'])->name('resumen.actividades');