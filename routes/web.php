<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmotionController;

Route::get('/', [EmotionController::class, 'index'])->name('home');
Route::post('/register', [EmotionController::class, 'register'])->name('register');
Route::get('/registration-success', function () {
    return view('registration_success');
})->name('registration_success');

Route::post('/login', [EmotionController::class, 'login'])->name('login');
Route::get('/activity', [EmotionController::class, 'activity'])->name('activity');

Route::post('/save-activity', [EmotionController::class, 'saveActivity'])->name('save.activity'); // Corregido el nombre del controlador y método
Route::get('/search-results', [EmotionController::class, 'searchResults'])->name('search.results');
Route::get('/activity-success', function () {
    return view('activity_success');
})->name('activity_success');


Route::get('/activity/summary', [EmotionController::class, 'summary'])->name('activity.summary');
Route::post('/activity/summary', [EmotionController::class, 'showSummary'])->name('activity.summary.show');

