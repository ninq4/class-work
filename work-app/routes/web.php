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

Route::get('/', [\App\Http\Controllers\RouteController::class, 'index']) -> name('index');
Route::get('/products/{id}', [\App\Http\Controllers\RouteController::class, 'products']) -> name('products');
Route::get('/product-card/{id}', [\App\Http\Controllers\RouteController::class, 'product']) -> name('product');

Route::prefix('/category') -> group(function () {
    Route::get('', [\App\Http\Controllers\admin\CategoryController::class, 'index']) -> name('category.index');
    Route::get('/create', [\App\Http\Controllers\admin\CategoryController::class, 'create']) -> name('category.create');
    Route::get('/edit/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit']) -> name('category.edit');
    Route::get('/show/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'show']) -> name('category.show');

    Route::post('/store', [\App\Http\Controllers\Admin\CategoryController::class, 'store']) -> name('category.store');
    Route::delete('/delete/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy']) ->name('category.delete');
    Route::put('/update/{category}', [\App\Http\Controllers\Admin\CategoryController::class, 'update']) -> name('category.update');
});

Route::prefix('/product') -> group(function (){
    Route::get('', [\App\Http\Controllers\Admin\ProductController::class, 'index'])-> name('product.index');
    Route::get('/create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])-> name('product.create');
    Route::get('/edit/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'edit']) -> name('product.edit');
    Route::get('show/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'show']) -> name('product.show');

    Route::post('/store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])-> name('product.store');

    Route::delete('/delete/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])-> name('product.delete');

    Route::put('/update/{product}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])-> name('product.update');

});
