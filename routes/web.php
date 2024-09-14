<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VideoController;
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

Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');

Route::get('/videos/{video}', [VideoController::class, 'show'])->name('videos.show');

Route::get('/video/create', [VideoController::class, 'create'])->name('videos.create');

Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');


