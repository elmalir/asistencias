<?php

use App\Http\Controllers\Habilidades;
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
    return view('welcome');
});

//Rutas para habilidades
Route::get('/habilidades', [Habilidades::class, 'index'])->name('habilidades.index');
Route::get('/habilidades/create', [Habilidades::class, 'create'])->name('habilidades.create');
Route::post('/habilidades', [Habilidades::class, 'store'])->name('habilidades.store');
Route::get('/habilidades/{habilidad}', [Habilidades::class, 'show'])->name('habilidades.show');
Route::get('/habilidades/{habilidad}/edit', [Habilidades::class, 'edit'])->name('habilidades.edit');
Route::put('/habilidades/{habilidad}', [Habilidades::class, 'update'])->name('habilidades.update');
Route::delete('/habilidades/{habilidad}', [Habilidades::class, 'destroy'])->name('habilidades.destroy');
