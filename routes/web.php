<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/prueba/nosotros', [PruebaController::class, 'nosotros'])->name('prueba.nosotros');
Route::get('/prueba/vista1', [PruebaController::class, 'vista1'])->name('prueba.vista1');
Route::get('/prueba/vista2', [PruebaController::class, 'vista2'])->name('prueba.vista2');

Route::get('/prueba/calculadora', [PruebaController::class, 'mostar_calculadora'])->name('prueba.calculadora');
Route::post('/prueba/calcuadora', [PruebaController::class, 'calcular'])->name('prueba.calcuadora');


Route::get('/producto/create', [PruebaController::class, 'create'])->name('producto.create');
Route::post('/producto/store', [PruebaController::class, 'store'])->name('producto.store');
Route::get('/producto/index', [PruebaController::class, 'index'])->name('producto.index');
Route::get('/producto/{id}/edit', [PruebaController::class, 'edit'])->name('producto.edit');
Route::put('/producto/{id}', [PruebaController::class, 'update'])->name('producto.update');
Route::delete('/producto/{id}', [PruebaController::class, 'destroy'])->name('producto.destroy');

