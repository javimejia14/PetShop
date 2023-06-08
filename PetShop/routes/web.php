<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GatoController;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\FormularioController;

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
Route::get('/',[GatoController::class,'index']);
Route::get('/getgato',[GatoController::class,'getGatos']);
Route::get('/getperro',[PerroController::class,'getPerros']);
Route::post('/',[FormularioController::class,'index']);
Route::post('/postdatos',[FormularioController::class,'store']);