<?php

use App\Http\Controllers\CompañiaController;
use App\Http\Controllers\CuartelController;
use App\Http\Controllers\CuerpoController;
use App\Http\Controllers\SoldadoController;
use Illuminate\Support\Facades\Route;

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

Route::get('/examen', function () {
    return view('index');
});

Route::get('/examen/soldado', [SoldadoController::class,'mostrar'])->name('mostrarSoldado');
Route::post('/examen/soldado-store', [SoldadoController::class,'store'])->name('storeSoldado');

Route::get('/examen/cuartel', [CuartelController::class,'mostrar'])->name('mostrarCuartel');
Route::post('/examen/cuartel-store', [CuartelController::class,'store'])->name('storeCuartel');

Route::get('/examen/cuerpo', [CuerpoController::class,'mostrar'])->name('mostrarCuerpo');
Route::post('/examen/cuerpo-store', [CuerpoController::class,'store'])->name('storeCuerpo');

Route::get('/examen/compañia', [CompañiaController::class,'mostrar'])->name('mostrarCompañia');
Route::post('/examen/compañia-store', [CompañiaController::class,'store'])->name('storeCompañia');