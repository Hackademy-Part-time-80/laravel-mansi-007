<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index'])->name('books.index');

Route::get('/crea-libro', [BookController::class, 'create'])->name('books.create');
Route::post('/salva-libro', [BookController::class, 'store'])->name('books.store');

Route::get('/dettaglio-libro/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/modifica-libro/{book}', [BookController::class, 'edit'])->name('books.edit');
Route::put('/aggiorna-libro/{book}', [BookController::class, 'update'])->name('books.update');

Route::delete('/elimina-libro/{book}', [BookController::class, 'destroy'])->name('books.destroy');
