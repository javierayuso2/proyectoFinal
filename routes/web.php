<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ActividadController;
use App\Http\Controllers\EmotionController;

Route::get('/', [EmotionController::class, 'index'])->name('home');
Route::post('/register', [EmotionController::class, 'register'])->name('register');
Route::post('/login', [EmotionController::class, 'login'])->name('login');
Route::get('/activity', [EmotionController::class, 'activity'])->name('activity');
Route::post('/save-activity', [EmotionController::class, 'saveActivity'])->name('save.activity');
Route::get('/summary', [EmotionController::class, 'summary'])->name('activity.summary');
Route::get('/registration/success', [EmotionController::class, 'registrationSuccess'])->name('registration.success');


