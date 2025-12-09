<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tes', [TesController::class, 'index']);
Route::get('/tes/create', [TesController::class, 'create']);
Route::post('/tes/store', [TesController::class, 'store'])->name('tes.store');
Route::get('/tes/edit', [TesController::class, 'store'])->name('tes.edit');
Route::post('/tes/update/{id}', [TesController::class, 'update'])->name('tes.update');
Route::delete('/tes/destroy/{id}', [TesController::class, 'destroy'])->name('tes.delete');
