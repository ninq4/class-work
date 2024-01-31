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
Route::get('/categories', [\App\Http\Controllers\MainController::class, 'category']) -> name('categories');
Route::get('/products/{id}', [\App\Http\Controllers\MainController::class, 'products']) -> name('products');
Route::get('/product-card/{id}', [\App\Http\Controllers\MainController::class, 'product']) -> name('product');
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
    Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']) -> name('category.edit');
    Route::get('/show/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show']) -> name('category.show');

    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']) -> name('category.store');
    Route::delete('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']) ->name('category.delete');
    Route::put('/update/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']) -> name('category.update');
});

Route::prefix('/tovar') -> group(function (){
   Route::get('', [\App\Http\Controllers\Admin\ProductController::class, 'index'])-> name('tovar.index');
    Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])-> name('tovar.create');
    Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']) -> name('tovar.edit');
    Route::get('show/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show']) -> name('tovar.show');

    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])-> name('tovar.store');

    Route::delete('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])-> name('tovar.delete');

    Route::put('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])-> name('tovar.update');

});

