<?php

use App\Http\Controllers\ProductViewController;

// View routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductViewController::class, 'index'])->name('products.index');
    Route::get('/create', [ProductViewController::class, 'create'])->name('products.create');
    Route::post('/', [ProductViewController::class, 'store'])->name('products.store');
    Route::get('/{id}', [ProductViewController::class, 'show'])->name('products.show');
    Route::get('/{id}/edit', [ProductViewController::class, 'edit'])->name('products.edit'); 
    Route::put('/{id}', [ProductViewController::class, 'update'])->name('products.update'); 
});