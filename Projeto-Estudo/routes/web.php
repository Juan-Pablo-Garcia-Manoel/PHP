<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\filmeController;
use App\Http\Controllers\generoController;

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

Route::resource('/principal_filme', filmeController::class);
Route::resource('/principal_genero', generoController::class);

Route::get('/filme',[filmeController::class,'index'])->name('filme.index');
Route::get('/genero',[generoController::class,'index'])->name('genero.index');

Route::get('/filme/create',[filmeController::class,'create'])->name('filme.create');
Route::get('/genero/create',[generoController::class,'create'])->name('genero.create');

Route::post('/filme/',[filmeController::class,'store'])->name('filme.store');
Route::post('/genero/',[generoController::class,'store'])->name('genero.store');

Route::get('/filme/{filme}',[filmeController::class,'show'])->name('filme.show');
Route::get('/genero/{genero}',[generoController::class,'show'])->name('genero.show');

Route::get('/filme/{filme}/edit',[filmeController::class,'edit'])->name('filme.edit');
Route::get('/genero/{genero}/edit',[generoController::class,'edit'])->name('genero.edit');

Route::put('/filme/{filme}',[filmeController::class,'update'])->name('filme.update');
Route::put('/genero/{genero}',[generoController::class,'update'])->name('genero.update');

Route::delete('/filme/{filme}',[filmeController::class,'destroy'])->name('filme.destroy');
Route::delete('/genero/{genero}',[generoController::class,'destroy'])->name('genero.destroy');















