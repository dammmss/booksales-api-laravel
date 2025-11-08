<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        Author::create([
            'name' => 'J.K. Rowling',
            'bio' => 'Penulis seri Harry Potter',
            'nationality' => 'Inggris',
        ]);

        Author::create([
            'name' => 'J.R.R. Tolkien',
            'bio' => 'Penulis The Lord of the Rings dan The Hobbit',
            'nationality' => 'Inggris',
        ]);
    }
}
