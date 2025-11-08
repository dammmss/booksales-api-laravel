<?php

namespace App\Http\Controllers;

use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genre = new Genre();
        $genres = $genre->getGenres();

        return view('genres', ['genres' => $genres]);
    }
}
