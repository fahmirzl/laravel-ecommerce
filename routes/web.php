<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::prefix('v1')->group(function() {

    Route::prefix('admin')->group(function() {
        Route::get('/', AdminController::class);
    });

});
