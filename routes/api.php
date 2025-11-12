<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\TransactionController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ------------------------------
// AUTHENTICATION
// ------------------------------
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ------------------------------
// BOOKS
// ------------------------------
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/{id}', [BookController::class, 'show']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/books', [BookController::class, 'store']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
});

// ------------------------------
// TRANSACTIONS
// ------------------------------
Route::middleware(['auth:sanctum'])->group(function () {
    // 🔹 Admin only: Read all & delete
    Route::middleware('admin')->group(function () {
        Route::get('/transactions', [TransactionController::class, 'index']);
        Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']);
    });

    // 🔹 Customer only: Create, Show, Update
    Route::middleware('customer')->group(function () {
        Route::post('/transactions', [TransactionController::class, 'store']);
        Route::get('/transactions/{id}', [TransactionController::class, 'show']);
        Route::put('/transactions/{id}', [TransactionController::class, 'update']);
    });
});

// ------------------------------
// AUTHORS
// ------------------------------
Route::get('/authors', [AuthorController::class, 'index']);
Route::get('/authors/{author}', [AuthorController::class, 'show']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/authors', [AuthorController::class, 'store']);
    Route::put('/authors/{author}', [AuthorController::class, 'update']);
    Route::delete('/authors/{author}', [AuthorController::class, 'destroy']);
});

// ------------------------------
// GENRES
// ------------------------------
Route::get('/genres', [GenreController::class, 'index']);
Route::get('/genres/{genre}', [GenreController::class, 'show']);

Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::post('/genres', [GenreController::class, 'store']);
    Route::put('/genres/{genre}', [GenreController::class, 'update']);
    Route::delete('/genres/{genre}', [GenreController::class, 'destroy']);
});
