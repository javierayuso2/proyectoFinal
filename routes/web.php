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
Route::post('/guardar-actividad', [EmotionController::class, 'store'])->name('save.activity');
Route::get('/activity-success', 'EmotionController@success')->name('activity_success');
Route::get('/activity-success', function () {
    return view('activity_success');
})->name('activity_success');

Route::get('/search_results', 'EmotionController@searchResults')->name('search_results');

Route::get('/activity/summary', [EmotionController::class, 'activitySummary'])->name('activity.summary');
Route::post('/activity/summary', [EmotionController::class, 'showSummary'])->name('activity.summary.show');

