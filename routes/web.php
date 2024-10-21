<?php

use App\Http\Controllers\HorrorMovieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/horrormovie', [HorrorMovieController::class, 'index'])->name('horrormovie.index');
    Route::get('/horrormovie/create', [HorrorMovieController::class,'create'])->name('horrormovie.create');
    Route::post('/horrormovie', [HorrorMovieController::class,'store'])->name('horrormovie.store');
    Route::get('/horrormovie/{horrormovie}', [HorrorMovieController::class, 'show'])->name('horrormovie.show');
    Route::get('/horrormovie/{horrormovie}/edit', [HorrorMovieController::class, 'edit'])->name('horrormovie.edit');
    Route::put('/horrormovie/{horrormovie}', [HorrorMovieController::class, 'update'])->name('horrormovie.update');
    Route::delete('/horrormovie/{horrormovie}', [HorrorMovieController::class, 'destroy'])->name('horrormovie.destroy');
});

require __DIR__.'/auth.php';
