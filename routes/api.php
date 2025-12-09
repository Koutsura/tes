<?php
use App\Http\Controllers\Api\PasienApiController;
use Illuminate\Support\Facades\Route;

Route::get('/pasien', [PasienApiController::class, 'index']);
Route::post('/pasien', [PasienApiController::class, 'store']);
Route::get('/pasien/{id}', [PasienApiController::class, 'show']);
Route::put('/pasien/{id}', [PasienApiController::class, 'update']);
Route::delete('/pasien/{id}', [PasienApiController::class, 'destroy']);

