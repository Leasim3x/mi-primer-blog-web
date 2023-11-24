<?php

use Illuminate\Support\Facades\Route;
// Especifica que va a utilizar el controlador "Home"
use App\Http\Controllers\HomeController;
// Especifica el controlador para los "Cursos"
use App\Http\Controllers\CursoController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Sitio principal '/' -> Se ha modificado para usar el controlador "Home" utilizando el método "class"
Route::get('/', HomeController::class);// Se inicia la página principal

// Grupo de rutas donde los elementos usan el método en común "CursoController"
Route::controller(CursoController::class)->group(function () {
    // Ruta -> entre array Controller::class ->  , método index
    Route::get('cursos', 'index');

    // Simular una ruta que contenga el formulario para crear un curso
    Route::get('cursos/create','create');

    // Donde nombre_carpeta/nombre_variable, nombre_método
    Route::get('cursos/{curso}','show');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('categories', 'index');

    Route::get('categories/create','create');

    Route::get('categories/{category}','show');
});

// sitio para las publicaciones
Route::controller(PostController::class)->group(function(){
    Route::get('posts/create','create');

    Route::get('posts/{post}','show');
});

Route::controller(CommentController::class)->group(function(){
    Route::get('commnets/create','create');

    Route::get('comments/{post}','show');
});

Route::controller(UsersController::class)->group(function(){
    Route::get('users/create','create');

    Route::get('users/{show}','show');
});