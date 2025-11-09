<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    public function run(): void
    {
        Genre::create([
            'name' => 'Fantasy',
            'description' => 'Genre berisi dunia magis dan makhluk fantastis'
        ]);

        Genre::create([
            'name' => 'Adventure',
            'description' => 'Genre penuh petualangan dan aksi'
        ]);
    }
}
