<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create([
            'title' => 'Harry Potter',
            'publisher' => 'Bloomsbury',
            'year' => 1997,
            'author_id' => 1,
            'genre_id' => 1,
            'description' => 'Petualangan penyihir muda di Hogwarts.',
            'price' => 150000,
            'stock' => 10,
            'cover_photo' => 'harry_potter.jpg',
        ]);

        Book::create([
            'title' => 'The Hobbit',
            'publisher' => 'George Allen & Unwin',
            'year' => 1937,
            'author_id' => 2,
            'genre_id' => 2,
            'description' => 'Perjalanan Bilbo Baggins ke Gunung Sunyi.',
            'price' => 175000,
            'stock' => 8,
            'cover_photo' => 'the_hobbit.jpg',
        ]);
    }
}
