<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

Route::get('/', function () {
    return redirect('/tes');
});

Route::get('/tes', [TesController::class, 'index']);
Route::get('/tes/create', [TesController::class, 'create']);
Route::post('/tes/store', [TesController::class, 'store'])->name('tes.store');
Route::get('/tes/edit/{id}', [TesController::class, 'edit'])->name('tes.edit');
Route::put('/tes/update/{id}', [TesController::class, 'update'])->name('tes.update');
Route::delete('/tes/destroy/{id}', [TesController::class, 'destroy'])->name('tes.delete');
