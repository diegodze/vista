<?php

use App\Http\Controllers\RegistroController;
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

Route::get('index', [RegistroController::class, 'index'])->name('index');
Route::get('formulario', [RegistroController::class, 'formulario'])->name('formulario');
Route::get('nuevo', [RegistroController::class, 'nuevo'])->name('nuevo');
Route::get('info/{id}', [RegistroController::class, 'info'])->name('info');
Route::get('editar/{id}', [RegistroController::class, 'editar'])->name('editar');
Route::get('eliminar/{id}', [RegistroController::class, 'eliminar'])->name('eliminar');
