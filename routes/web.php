<?php

use App\Http\Controllers\DiaristaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DiaristaController::class, 'index'])->name('diaristas.index');
Route::get('/diarista/create', [DiaristaController::class, 'create'])->name('diarista.create');
Route::post('/diarista', [DiaristaController::class, 'store'])->name('diarista.store');
Route::get('/diarista/{id}/edit', [DiaristaController::class, 'edit'])->name('diarista.edit');
Route::put('/diarista/{id}', [DiaristaController::class, 'update'])->name('diaristas.update');
Route::get('/diarista/{id}', [DiaristaController::class, 'destroy'])->name('diarista.destroy');
Route::get('/diarista/{id}/show', [DiaristaController::class, 'show'])->name('diarista.show');
