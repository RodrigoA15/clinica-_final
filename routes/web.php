<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\AtencionmedicaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\DoctorController;

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
    return view('layout.layouts');
});

Route::resource('pacientes', PacienteController::class);

Route::resource ('atencion', AtencionmedicaController::class);
//
Route::resource('citas', CitaController::class);
//
Route::resource('doctores', DoctorController::class);