<?php

use App\Http\Controllers\ClientController;
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

Route::get('/clientes', [ClientController::class,'index'])->name('index.client');
Route::get('/clientes/crear', [ClientController::class,'create'])->name('create.client');

//* nuevas rutas pendiente revisar

//    Route::post('/clientes', ClientController::class, 'store')->name('');
//    Route::get('/clientes/mostar', ClientController::class, 'show')->name('show.view');
//    Route::get('/clientes/editar/edit', ClientController::class, 'edit')->name('edit.view');
//    Route::put('/clientes/actualizar', ClientController::class, 'update')->name('');
//    Route::delete('/clientes/destruir', ClientController::class, 'destroy')->name('');
