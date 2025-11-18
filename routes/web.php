<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::middleware('auth')->prefix('jobs')->name('jobs.')->group(function () {
    Route::get('/', [\App\Http\Controllers\JobController::class, 'index'])->name('index');
    Route::get('/create', [\App\Http\Controllers\JobController::class, 'create'])->name('create');
    Route::post('/', [\App\Http\Controllers\JobController::class, 'store'])->name('store');
    Route::get('/{job}', [\App\Http\Controllers\JobController::class, 'show'])->name('show');
    Route::get('/{job}/edit', [\App\Http\Controllers\JobController::class, 'edit'])->name('edit');
    Route::patch('/{job}', [\App\Http\Controllers\JobController::class, 'update'])->name('update');
    Route::delete('/{job}', [\App\Http\Controllers\JobController::class, 'destroy'])->name('destroy');
});

