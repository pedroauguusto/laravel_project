<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controle1;


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

Route::get('/local1/{id?}', [Controle1::class, 'index']);


Route::post('/local1', [Controle1::class, 'criar']);

Route::put('/local1', [Controle1::class, 'editar']);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return dd("Chegou aqui");
});

Route::get('/local/{id?}', ['uses'=>'Controle1@index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/contato', [App\Http\Controllers\HomeController::class, 'visualizar'])->name('contato');


