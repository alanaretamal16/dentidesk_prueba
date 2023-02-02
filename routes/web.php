<?php

use App\Http\Controllers\CostoController;
use App\Http\Controllers\TratamientoController;
use App\Http\Controllers\VentaController;
use App\Models\Venta;
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

Route::resource('tratamientos',TratamientoController::class);

Route::resource('ventas',VentaController::class);

Route::resource('costos',CostoController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
