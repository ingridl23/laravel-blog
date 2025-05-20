<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;


Route::get('/', [HomeController::class, "invoke"]);

Route::get('/posts', [PostController::class, "index"]);
Route::get('/posts/create', [PostController::class, "create"]);

Route::get('/posts/{id}', [PostController::class, "show"]);


/*
casting

Route :: get("prueba", fuction (){
    $post = Post::find(1);
    return $post-> published_at ->format("d/m/Y");

});

*/

//falta agregar el campo al archivo de la bbdd y migrarlo
