<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, "invoke"]);

Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/create', [PostController::class, "create"]);

Route::get('/posts/{id}', [PostController::class, "show"]);
