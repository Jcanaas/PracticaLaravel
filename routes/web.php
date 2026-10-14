<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ConcertController;
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

Route::resource('artistes', ArtistaController::class)->middleware('auth')->parameter('artistes', 'artista');
Route::resource('concerts', ConcertController::class)->middleware('auth');


require __DIR__.'/auth.php';
