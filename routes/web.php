<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\ConcertController;
use App\Http\Controllers\EntradaController;
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
Route::resource('escenaris', ConcertController::class)->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::get('/entrades', [EntradaController::class, 'mevesentrades'])->name('entrades.meves');
    Route::get('/concerts/{concert}/comprar', [EntradaController::class, 'create'])->name('entrades.create');
    Route::post('/concerts/{concert}/comprar', [EntradaController::class, 'store'])->name('entrades.store');
    Route::get('/concerts/{concert}/assistents', [EntradaController::class, 'assistents'])->name('entrades.assistents');
});


require __DIR__.'/auth.php';
