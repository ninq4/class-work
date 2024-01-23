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

Route::prefix('/post') -> group(function () {
    Route::get('/index', [\App\Http\Controllers\PostController::class, 'index']) -> name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create']) -> name('post.create');
    Route::get('/edit', [\App\Http\Controllers\PostController::class, 'edit']) -> name('post.edit');

    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store']) -> name('post.store');
});
