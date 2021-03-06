<?php

use App\Http\Controllers\RegisterController;
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
    return view('welcome');
});

// Route::get('/registro', [RegisterController::class, 'index'])->name('register');
// Route::post('/registro', [RegisterController::class, 'store']);

Route::controller(RegisterController::class)->prefix('registro')->name('registro.')->group(function(){
    Route::get('/', 'index')->name('form');
    Route::post('/', 'store')->name('store');
});
