<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::prefix('jobs')->group(function () {
    Route::get('/', [JobController::class, 'index'])->name('jobs.index');
    Route::get('/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/store', [JobController::class, 'store'])->name('jobs.store');
    Route::get('/{job}', [JobController::class, 'show'])->name('jobs.show');
    Route::get('/{job}/edit', [JobController::class, 'edit'])->name('jobs.edit');
    Route::put('/{job}', [JobController::class, 'update'])->name('jobs.update');
    Route::delete('/{job}', [JobController::class, 'destroy'])->name('jobs.destroy');
});
