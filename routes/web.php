<?php

use App\Http\Controllers\ClasificationController;
use App\Http\Controllers\DrugController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('clasification')->group(function () {
    Route::get('/', [ClasificationController::class, 'index'])->name('clasification.index');
    Route::post('store', [ClasificationController::class, 'store'])->name('clasification.store');
    Route::get('edit/{clasification}', [ClasificationController::class, 'edit'])->name('clasification.edit');
    Route::post('update/{clasification}', [ClasificationController::class, 'update'])->name('clasification.update');
    Route::get('destroy/{clasification}', [ClasificationController::class, 'destroy'])->name('clasification.destroy');
});

Route::prefix('drug')->group(function () {
    Route::get('/', [DrugController::class, 'index'])->name('drug.index');
    Route::post('store', [DrugController::class, 'store'])->name('drug.store');
    Route::get('edit/{drug}', [DrugController::class, 'edit'])->name('drug.edit');
    Route::post('update/{drug}', [DrugController::class, 'update'])->name('drug.update');
    Route::get('destroy/{drug}', [DrugController::class, 'destroy'])->name('drug.destroy');
});


