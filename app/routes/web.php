<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']) -> name('home');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about']) -> name('about');
Route::get('/contacts', [\App\Http\Controllers\MainController::class, 'contacts']) -> name('contacts');
Route::get('/portfolio', [\App\Http\Controllers\MainController::class, 'portfolio']) -> name('portfolio');
