<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UjianController;
use App\Http\Controllers\SoalUjianController;
use App\Http\Controllers\PantauUjianController;;
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
Route::group(['prefix' => 'auth'], function () {
  Route::get('/semester', [AuthController::class, 'semester']);
  Route::post('login', [AuthController::class, 'login']);
  Route::group(['middleware' => 'auth:sanctum'], function() {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::get('user', [AuthController::class, 'user']);
    Route::post('user', [AuthController::class, 'update_user']);
    Route::post('users/generate', [AuthController::class, 'generate']);
    Route::get('users/list', [AuthController::class, 'list']);
    Route::post('user/delete', [AuthController::class, 'hapus']);
    Route::post('user/detil', [AuthController::class, 'detil']);
    Route::post('user/reset-password', [AuthController::class, 'reset_password']);
    Route::post('user/foto', [AuthController::class, 'foto']);
    Route::post('user/ganti-password', [AuthController::class, 'ganti_password']);
    Route::post('user/update-role', [AuthController::class, 'update_role']);
  });
});
Route::group(['middleware' => 'auth:sanctum'], function () {
  Route::group(['prefix' => 'ujian'], function () {
    Route::get('/', [UjianController::class, 'index']);
    Route::post('/soal', [UjianController::class, 'soal']);
    Route::post('waktu', [UjianController::class, 'waktu']);
    Route::post('/simpan', [UjianController::class, 'simpan']);
    Route::post('selesai', [UjianController::class, 'selesai']);
    Route::post('hasil', [UjianController::class, 'hasil']);
  });
  Route::group(['prefix' => 'user'], function () {
    Route::get('profile', [AuthController::class, 'profile']);
    Route::post('update-profile', [AuthController::class, 'update_profile']);
  });
  Route::group(['prefix' => 'soal-ujian'], function () {
    Route::get('/', [SoalUjianController::class, 'index']);
    Route::post('/referensi', [SoalUjianController::class, 'referensi']);
    Route::post('/store', [SoalUjianController::class, 'store']);
    Route::post('/status', [SoalUjianController::class, 'status']);
    Route::delete('/destroy/{id}', [SoalUjianController::class, 'destroy']);
    Route::post('/upload-jawaban', [SoalUjianController::class, 'upload_jawaban']);
  });
  Route::group(['prefix' => 'pantau-ujian'], function () {
    Route::get('/', [PantauUjianController::class, 'index']);
    Route::post('/list', [PantauUjianController::class, 'list']);
    Route::post('/status', [PantauUjianController::class, 'status']);
  });
});
