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

Route::get('', [\App\Http\Controllers\MainController::class, 'index']) -> name('home');
Route::get('/about', [\App\Http\Controllers\MainController::class, 'about']) -> name('about');
Route::get('/contacts', [\App\Http\Controllers\MainController::class, 'contacts']) -> name('contacts');
Route::get('/portfolio', [\App\Http\Controllers\MainController::class, 'portfolio']) -> name('portfolio');
//------------------------------------------------------------------------------------------------------------------

Route::prefix('/post') -> group(function () {
    Route::get('', [\App\Http\Controllers\PostController::class, 'index']) -> name('post.index');
    Route::get('/create', [\App\Http\Controllers\PostController::class, 'create']) -> name('post.create');
    Route::get('/edit/{post}', [\App\Http\Controllers\PostController::class, 'edit']) -> name('post.edit');
    Route::get('/show/{post}', [\App\Http\Controllers\PostController::class, 'show']) -> name('post.show');

    Route::post('/store', [\App\Http\Controllers\PostController::class, 'store']) -> name('post.store');
    Route::delete('/delete/{post}', [\App\Http\Controllers\PostController::class, 'destroy']) -> name('post.delete');
    Route::put('/update/{post}', [\App\Http\Controllers\PostController::class, 'update']) -> name('post.update');
});

Route::prefix('/category') -> group(function () {
    Route::get('', [\App\Http\Controllers\admin\CategoryController::class, 'index']) -> name('category.index');
    Route::get('/create', [\App\Http\Controllers\admin\CategoryController::class, 'create']) -> name('category.create');
    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']) -> name('category.store');
    Route::delete('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']) ->name('category.delete');
});

Route::prefix('/product') -> group(function (){
   Route::get('', [\App\Http\Controllers\Admin\ProductController::class, 'index'])-> name('product.index');
});
