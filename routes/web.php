<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class]);

Route::get('/', [PostController::class, "index"]);
Route::get('/', [PostController::class, "create"]);

Route::get('/posts/{id}', [PostController::class, "show"]);
