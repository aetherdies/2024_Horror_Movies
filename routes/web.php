<?php

use App\Http\Controllers\HorrorController;
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

    Route::get('/horror', [HorrorController::class, 'index'])->name('horror.index');
    Route::get('/horror/create', [HorrorController::class, 'create'])->name('horror.create');
    Route::get('/horror/{horror}', [HorrorController::class, 'show'])->name('horror.show');
    Route::get('/horror', [HorrorController::class, 'store'])->name('horror.store');
});

require __DIR__.'/auth.php';
