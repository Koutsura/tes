<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', [TesController::class, 'index']);
Route::get('/tes/create', [TesController::class, 'create']);
Route::post('/tes/store', [TesController::class, 'store']);
Route::post('/tes/update/{id}', [TesController::class, 'update']);
Route::get('/tes/destroy/{id}', [TesController::class, 'destroy']);
