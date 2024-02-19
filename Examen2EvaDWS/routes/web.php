<?php

use App\Http\Controllers\ManzanasController;
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

Route::get('/', function () {
    return view('welcome');
});
//Ruta para mostrar la vista de las manzanas mediante el método index
Route::get('/manzanas', [ManzanasController::class, 'index'])->name('manzanas');

//Ruta para insertar una nueva manzana mediante el método create, que redirige al formulario de inserción 
Route::get('create', [ManzanasController::class, 'create'])->name('manzanas.create');
//Ruta para almacenar la manzana del formulario mediante el método store, que redirige a la vista de manzanas 
Route::post('/manzanas', [ManzanasController::class, 'store'])->name('manzanas.store');

//Ruta para modificar una manzana de la base de datos mediante el método edit, que redirige al formulario de modificación de manzanas
Route::get('edit', [ManzanasController::class, 'edit'])->name('manzanas.edit');
//Ruta para almacenar la manzana modificada del formulario mediante el método update, que redirige a la vista de manzanas
Route::put('/manzanas', [ManzanasController::class, 'update'])->name('manzanas.update');

//Ruta para eliminar una manzana, mediante el método destroy, que redirige a la vista de manzanas
Route::delete('/manzanas/{id}', [ManzanasController::class, 'destroy'])->name('manzanas.destroy');
require __DIR__ . '/auth.php';

