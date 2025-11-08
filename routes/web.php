<?php

// Import dari Controllers


use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});



