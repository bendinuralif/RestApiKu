<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoliController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PegawaiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/poli', [PoliController::class, 'index']);
Route::get('poli/{id}', [PoliController::class, 'show']);
Route::post('poli', [PoliController::class, 'store']);
Route::put('poli/{id}', [PoliController::class, 'update']);
Route::delete('poli/{id}', [PoliController::class, 'destroy']);
// Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('pegawai/{id}', [PegawaiController::class, 'show']);
Route::post('pegawai', [PegawaiController::class, 'store']);
Route::put('pegawai/{id}', [PegawaiController::class, 'update']);
Route::delete('pegawai/{id}', [PegawaiController::class, 'destroy']);
// Pasien
Route::get('/pasien', [PasienController::class, 'index']);
Route::get('pasien/{id}', [PasienController::class, 'show']);
Route::post('pasien', [PasienController::class, 'store']);
Route::put('pasien/{id}', [PasienController::class, 'update']);
Route::delete('pasien/{id}', [PasienController::class, 'destroy']);
