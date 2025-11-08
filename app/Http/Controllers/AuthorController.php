<?php

namespace App\Http\Controllers;

use App\Models\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $author = new Author();
        $authors = $author->getAuthors();

        return view('authors', ['authors' => $authors]);
    }
}
