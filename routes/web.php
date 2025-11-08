<?php

// Import dari Controllers

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

// Menggunakan Controller
route::get('/genres', function (){
    return view('genres');
});

route::get('/books', [BookController::class, 'index']);
route::get('/genres', [GenreController::class, 'index']);
route::get('/authors', [AuthorController::class, 'index']);