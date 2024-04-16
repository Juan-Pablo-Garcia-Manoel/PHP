<?php

use App\Http\Controllers\FormularioController;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\SobreController;
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

Route::get('sobre', [SobreController::class,'index']);

Route::get('hello-world', [HelloWorldController::class,'index']);

Route::resource('/post',FormularioController::class);