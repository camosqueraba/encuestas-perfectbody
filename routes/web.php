<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CirugiaEncuestaController;
use App\Http\Controllers\HospitalizacionEncuestaController;
use App\Http\Controllers\PrioritariaEncuestaController;
use App\Http\Controllers\QuejaController;
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

//Route::get('/cirugia/create', [CirugiaEncuestaController::class, 'create']);
Route::resource('cirugia', CirugiaEncuestaController::class);
Route::resource('hospitalizacion', HospitalizacionEncuestaController::class);
Route::resource('prioritaria', PrioritariaEncuestaController::class);
Route::resource('queja', QuejaController::class);
