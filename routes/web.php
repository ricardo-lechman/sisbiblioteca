<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EditorialController;
use App\Http\Controllers\EjemplarController;
use App\Http\Controllers\EstadoController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;

Route::resource('alumnos', AlumnoController::class);
Route::resource('autores', AutorController::class);
Route::resource('categorias', CategoriaController::class);
Route::resource('editoriales', EditorialController::class);
Route::resource('ejemplares', EjemplarController::class);
Route::resource('estados', EstadoController::class);
Route::resource('libros', LibroController::class);
Route::resource('prestamos', PrestamoController::class);


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
