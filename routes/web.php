<?php

use App\Http\Controllers\GaleryController;
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

Route::middleware(['auth'])->group(function () {
    Route::get('/galery', [GaleryController::class, 'index']);
    Route::get('/galery/tambah', [GaleryController::class, 'create']);
    Route::post('galery/store', [GaleryController::class, 'store']);
    Route::get('galery/{id}/edit', [GaleryController::class, 'edit']);
    Route::put('/galery/{id}', [GaleryController::class, 'update']);
    Route::get('/galery/{id}/show', [GaleryController::class, 'show']);
    Route::delete('/galery/{id}', [GaleryController::class, 'delete']);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
