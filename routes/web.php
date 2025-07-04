<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/post/create', [PostController::class, 'create'])->name('posts.create');
Route::get('/post/{id}', [PostController::class, 'show'])->name('posts.show');
Route::post('/post', [PostController::class, 'store'])->name('posts.store');


