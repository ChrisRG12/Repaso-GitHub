<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorLibro;

//Exportamos los controladores de tipo resource para la bd
use App\Http\Controllers\ControladorBDAutor;
use App\Http\Controllers\ControladorBDLibro;



Route::get('/', [controladorLibro::class, 'showPrincipal'])->name('Prin');

Route::get('Inicio', [controladorLibro::class, 'showInicio'])->name('Reg');


//------------------AUTORESSS----------------------------
//Create
Route::get('Autor/create', [ControladorBDAutor::class, 'create'])->name('Autor.create');
//store
Route::post('Autor', [ControladorBDAutor::class, 'store'])->name('Autor.store');
//index
Route::get('VistaAutor', [ControladorBDAutor::class, 'index'])->name('Autor.index');
//edit
Route::get('Autor/{id}/edit', [ControladorBDAutor::class, 'edit'])->name('Autor.edit');
//update
Route::put('Autor/{id}', [ControladorBDAutor::class, 'update'])->name('Autor.update');
//show
Route::get('Eliminar/{id}/show', [ControladorBDAutor::class, 'show']) -> name('Eliminar.show');
//destroy
Route::delete('Autor/{id}', [ControladorBDAutor::class, 'destroy']) -> name('Autor.destroy');

//------------------LIBROSSS----------------------------
//Create
Route::get('Registro/create', [ControladorBDLibro::class, 'create'])->name('Libro.create');
//store
Route::post('Registro', [ControladorBDLibro::class, 'store'])->name('Registro.store');
//index
Route::get('VistaLibro', [ControladorBDLibro::class, 'index'])->name('Libro.index');
//edit
Route::get('Libro/{id}/edit', [ControladorBDLibro::class, 'edit'])->name('Libro.edit');
//update
Route::put('Libro/{id}', [ControladorBDLibro::class, 'update'])->name('Libro.update');
//show
Route::get('Eliminar/{id}/show', [ControladorBDLibro::class, 'show']) -> name('Eliminar.show');
//destroy
Route::delete('Libro/{id}', [ControladorBDLibro::class, 'destroy']) -> name('Libro.destroy');






















/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|


Route::get('/', function () {
    return view('welcome');
});


//Creamos las rutas del Rroyecto
Route::get('Principal', function () {
    return view('Principal');
});

Route::get('Registro', function () {
    return view('Registro');
});

Route::view('Plantilla', 'Plantilla');
*/

