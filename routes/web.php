<?php

use App\Http\Controllers\DiaristaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [DiaristaController::class, 'index'])->name('diaristas.index');
Route::get('/diaristas/create', [DiaristaController::class, 'create'])->name('diaristas.create');
Route::post('/diaristas', [DiaristaController::class, 'store'])->name('diaristas.store');
Route::get('/diarista/{id}/edit', [DiaristaController::class, 'edit'])->name('diarista.edit');
Route::put('/diaristas/{id}', [DiaristaController::class, 'update'])->name('diaristas.update');
Route::get('/diarista/{id}/delete', [DiaristaController::class, 'delete'])->name('diarista.delete');
Route::get('/diarista/{id}/show', [DiaristaController::class, 'show'])->name('diarista.show');
