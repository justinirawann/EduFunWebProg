<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PopularController;
use App\Models\Category;

Route::get('/', [PostController::class, 'index']);


Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{category:slug}', [CategoryController::class, 'show']);
Route::get('/writers', [WriterController::class, 'index']);
Route::get('/writers/{writer}', [WriterController::class, 'show']);
Route::get('/popular', [PopularController::class, 'index']);
Route::get('/about', function () {
    return view('about', [
        'title' => 'About Us'
        // 'categories' => Category::all() // Perlu untuk navbar
    ]);
});

Route::get('/popular', [PopularController::class, 'index']);
