<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('v1')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', AdminController::class);
        Route::prefix('/products')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin_products');
            Route::get('/add', [ProductController::class, 'create'])->name('create_products');
            Route::post('/store', [ProductController::class, 'store'])->name('store_products');
            Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy_products');
            Route::get('/{product}', [ProductController::class, 'edit'])->name('edit_products');
            Route::put('/{product}', [ProductController::class, 'update'])->name('update_products');
        });
    });
});
