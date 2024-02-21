<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmotionController;
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



Route::get('/', [EmotionController::class, 'index'])->name('home');
Route::post('/register', [EmotionController::class, 'register'])->name('register');
Route::post('/login', [EmotionController::class, 'login'])->name('login');
Route::get('/activity', [EmotionController::class, 'activity'])->name('activity');
Route::post('/save-activity', [EmotionController::class, 'saveActivity'])->name('save.activity');
Route::get('/summary', [EmotionController::class, 'summary'])->name('activity.summary');
Route::get('/search', [EmotionController::class, 'search'])->name('activity.search');
Route::get('/registration-success', function () {
    return view('registration_success');
})->name('registration.success');

