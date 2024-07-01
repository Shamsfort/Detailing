<?php

use App\Http\Controllers\PublicController;
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

Route::get('/',[PublicController::class, 'home'])->name('home');

//Rotta per la pagina di preventivo
Route::get('preventivo', [PublicController::class, 'preventivo'])->name('preventivo');

//Rotta per invio dati
Route::post('/preventivo/invio', [PublicController::class, 'preventivoSubmit'])->name('preventivo.submit');