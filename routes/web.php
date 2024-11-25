<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TreinadorController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/pokemon');
})->middleware(['auth']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('pokemon', [PokemonController::class, 'index'])->name('pokemon.index');
    Route::get('pokemon/create', [PokemonController::class, 'create'])->name('pokemon.create');
    Route::post('pokemon', [PokemonController::class, 'store'])->name('pokemon.store');
    Route::get('pokemon/{id}/edit', [PokemonController::class, 'edit'])->name('pokemon.edit');
    Route::put('pokemon/{id}', [PokemonController::class, 'update'])->name('pokemon.update');
    Route::delete('pokemon/{id}', [PokemonController::class, 'destroy'])->name('pokemon.destroy');


    Route::get('treinadors', [TreinadorController::class, 'index'])->name('treinadors.index');
    Route::get('treinador/create', [TreinadorController::class, 'create'])->name('treinador.create');
    Route::post('treinador', [TreinadorController::class, 'store'])->name('treinador.store');
    Route::get('treinador/{id}/edit', [TreinadorController::class, 'edit'])->name('treinador.edit');
    Route::put('treinador/{id}', [TreinadorController::class, 'update'])->name('treinador.update');
    Route::delete('treinador/{id}', [TreinadorController::class, 'destroy'])->name('treinador.destroy');
});

require __DIR__.'/auth.php';
