<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
//use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [HomeController::class, "invoke"]); //home del portafolio, este seria nuestro index

Route::get('/posts', [PostController::class, "index"]); //quedo index pero no es el index
Route::get('/posts/create', [PostController::class, "create"]);

Route::get('/posts/{id}', [PostController::class, "show"]);

Route::get("/login", [LoginController::class, "login"]);




/*
Route::resource("/proyectos", [ProyectoController::class]);
 *
 *
 * me falta hacer la conexion a la base para que funcione correctamente
 */
/*
casting

Route :: get("prueba", fuction (){
    $post = Post::find(1);
    return $post-> published_at ->format("d/m/Y");

});

*/

//falta agregar el campo al archivo de la bbdd y migrarlo
