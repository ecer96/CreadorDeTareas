<?php

use App\Http\Controllers\TareasController;
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
    return view('app');
});


Route::get('/tareas', [TareasController::class,'index'])->name('tareas');

Route::post('/tareas', [TareasController::class,'store'])->name('tareas');


Route::delete('/tareas/{id}', [TareasController::class,'destroy'])->name('tareas-destroy');

Route::get('/tareas/{id}', [TareasController::class,'show'])->name('tareas-edit');

Route::patch('/tareas/{id}', [TareasController::class,'update'])->name('tareas-update');