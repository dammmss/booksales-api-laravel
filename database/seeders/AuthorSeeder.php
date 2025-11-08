<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'Tere Liye', 'email' => 'tere@example.com', 'biography' => 'Penulis novel Indonesia.'],
            ['name' => 'Masashi Kishimoto', 'email' => 'kishimoto@example.com', 'biography' => 'Mangaka Naruto.'],
            ['name' => 'Mark Manson', 'email' => 'mark@example.com', 'biography' => 'Penulis pengembangan diri.'],
            ['name' => 'Andrea Hirata', 'email' => 'andrea@example.com', 'biography' => 'Penulis Laskar Pelangi.'],
            ['name' => 'Dewi Lestari', 'email' => 'dee@example.com', 'biography' => 'Penulis novel Supernova.'],
        ]);
    }
}
