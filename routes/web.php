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

Route::put('/clientes/edit', [ClientController::class,'edit'])->name('client.edit');

Route::post('/clientes', [ClientController::class, 'store'])->name('client.store');
//Route::post('/clientes/store', 'ClientController@store')->name('store');

Route::delete('clientes/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

//auth::routes();
//Route::resource('/clientes', ClientController::class);