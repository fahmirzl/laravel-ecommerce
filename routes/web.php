<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderDetailController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('v1')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/', AdminController::class);
        Route::prefix('products')->group(function () {
            Route::get('/', [ProductController::class, 'index'])->name('admin_products');
            Route::get('/add', [ProductController::class, 'create'])->name('create_products');
            Route::post('/store', [ProductController::class, 'store'])->name('store_products');
            Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy_products');
            Route::get('/{product}', [ProductController::class, 'edit'])->name('edit_products');
            Route::put('/{product}', [ProductController::class, 'update'])->name('update_products');
        });
        Route::prefix('orders')->group(function() {
            Route::get('/', [OrderController::class, 'index'])->name('admin_orders');
            Route::patch('/complete/{order}', [OrderController::class, 'complete'])->name('complete_orders');
            Route::match(['DETAIL', 'GET'], '/detail', [OrderDetailController::class, 'index'])->name('detail_orders');
        });
        Route::prefix('customers')->group(function() {
            Route::get('/', CustomerController::class);
        });
    });
});
