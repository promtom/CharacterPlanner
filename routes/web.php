<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/about', [App\Http\Controllers\AboutController::class, 'index'])->middleware('auth');

Route::get('class', [App\Http\Controllers\KelasController::class, 'index'])->middleware('auth');
Route::prefix('class')->group(function () {
    Route::get('create', [App\Http\Controllers\KelasController::class, 'create'])->middleware('auth');
    Route::prefix('{id}')->group(function () {
        Route::get('edit', [App\Http\Controllers\KelasController::class, 'edit'])->middleware('auth');
        Route::get('show', [App\Http\Controllers\KelasController::class, 'show'])->middleware('auth');
    });
});
Route::post('class', [App\Http\Controllers\KelasController::class, 'store'])->middleware('auth');
Route::patch('class/{id}', [App\Http\Controllers\KelasController::class, 'update'])->middleware('auth');
Route::delete('class/{id}', [App\Http\Controllers\KelasController::class, 'destroy'])->middleware('auth');

Route::resource('characters', App\Http\Controllers\KarakterController::class);