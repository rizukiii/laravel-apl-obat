<?php

use App\Http\Controllers\ClasificationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('clasification',[ClasificationController::class, 'index'])->name('clasification.index');
Route::post('clasification/store',[ClasificationController::class, 'store'])->name('clasification.store');
Route::get('clasification/edit/{clasification}',[ClasificationController::class, 'edit'])->name('clasification.edit');
Route::post('clasification/update/{clasification}',[ClasificationController::class, 'update'])->name('clasification.update');
Route::get('clasification/destroy/{clasification}',[ClasificationController::class, 'destroy'])->name('clasification.destroy');

