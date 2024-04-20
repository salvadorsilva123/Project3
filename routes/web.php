<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use resources\views\clients;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', [ClientController::class,'index'])->name('index.client');
Route::get('/clientes/crear', [ClientController::class,'create'])->name('create.client');

//* nuevas rutas pendiente revisar:
Route::post('/clientes/store', [ClientController::class,'store'])->name('store.client');
Route::get('/clientes/mostar', [ClientController::class,'show'])->name('show.client');
Route::get('/clientes/editar', [ClientController::class,'edit'])->name('edit.client');
Route::put('/clientes/actualizar', [ClientController::class,'update'])->name('update.client');
Route::delete('/clientes/eliminar', [ClientController::class .'destroy'])->name('destroy.client');
