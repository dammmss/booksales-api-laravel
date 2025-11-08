<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $book = new Book();
        $books = $book->getBooks();

        return view('books', ['books' => $books]);
    }
}
