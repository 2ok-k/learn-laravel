<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', [PostController::class, 'index'])->name('welcome');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'store'])->name('posts.store');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/contact', [PostController::class, 'contact'])->name('contact');
Route::get('/register', [PostController::class, 'register']);


