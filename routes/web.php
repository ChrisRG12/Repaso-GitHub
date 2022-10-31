<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controladorLibro;


Route::get('/', [controladorLibro::class, 'showWelcome']);

Route::get('Principal', [controladorLibro::class, 'showPrincipal'])->name('Prin');

Route::get('Registro', [controladorLibro::class, 'showRegsitro'])->name('Reg');



























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

