<?php

use App\Http\Controllers\vehiculoController;
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
    return view('inicio');
});

Route::get('/index',[vehiculoController::class,'index']);
Route::get('/vehiculos/create',[vehiculoController::class,'create']);
Route::post('/index',[vehiculoController::class,'store']);