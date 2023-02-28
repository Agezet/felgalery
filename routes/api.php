<?php

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UserController;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::apiResource('apiProduk', ProdukController::class);
Route::get('apiProduk', [ProdukController::class, 'index']);
Route::get('detailProduk/{id}', [ProdukController::class, 'show']);
Route::post('createProduk', [ProdukController::class, 'store']);
Route::put('updateProduk/{id}', [ProdukController::class, 'update']);
Route::delete('deleteProduk/{id}', [ProdukController::class, 'destroy']);

Route::get('dataUser', [UserController::class, 'index']);
Route::get('totalUser', [UserController::class, 'totalUser']);
