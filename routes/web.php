<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::view('/', 'home');

Route::controller(ProductController::class)
    ->prefix('products')
    ->name('products.')
    ->group(function () {

    Route::get('/', [ProductController::class, 'index'])
        ->name('index');

    Route::get('/create', [ProductController::class, 'create'])
        ->name('create');

    Route::post('/store', [ProductController::class, 'store'])
        ->name('store');

    Route::get('/{product}', [ProductController::class, 'show'])
        ->name('show');

    Route::get('/{product}/edit', [ProductController::class, 'edit'])
        ->name('edit');

    Route::patch('/{product}', [ProductController::class, 'update'])
        ->name('update');

    Route::delete('/{product}', [ProductController::class, 'destroy'])
        ->name('destroy');
});

