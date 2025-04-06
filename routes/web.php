<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('v1')->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('/', AdminController::class);
        Route::get('/products', [ProductController::class, 'index'])->name('admin_products');
        Route::get('/products/add', [ProductController::class, 'create']);
        Route::post('/products/store', [ProductController::class, 'store'])->name('store_products');
        Route::delete('/products/{product}', [ProductController::class, 'destroy'])->name('destroy_products');
        Route::get('/products/{product}', [ProductController::class, 'edit'])->name('edit_products');
        Route::put('/products/{product}', [ProductController::class, 'update'])->name('update_products');
    });
});
