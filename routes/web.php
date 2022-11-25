<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorLibro;

//Exportamos los controladores de tipo resource para la bd
use App\Http\Controllers\ControladorBDAutor;
use App\Http\Controllers\ControladorBDLibro;


Route::get('welcome', [controladorLibro::class, 'showWelcome']);

Route::get('/', [controladorLibro::class, 'showPrincipal'])->name('Prin');
//Create
Route::get('Registro/create', [ControladorBDAutor::class, 'create'])->name('Registro.create');


Route::post('LibroGuardado', [controladorLibro::class, 'Procesar_Libro'])->name('Guard');


Route::get('Autor', [controladorLibro::class, 'showAutor'])->name('Au');

Route::post('AutorGuardado', [controladorLibro::class, 'ProcesarAutor'])->name('Gua');



























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

