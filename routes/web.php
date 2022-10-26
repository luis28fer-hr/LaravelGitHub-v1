<?php

use App\Http\Controllers\controladorVistas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('plantilla');
});

Route::get('inicio', [controladorVistas::class, 'viewInicio'])->name('Inicio');
Route::get('peliculas', [controladorVistas::class, 'viewPeliculas'])->name('Peliculas');
Route::get('registrar', [controladorVistas::class, 'viewRegistar'])->name('Registrar');

