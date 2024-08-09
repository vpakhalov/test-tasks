<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/catalog', [ProductController::class, 'index'])->name('catalog');
