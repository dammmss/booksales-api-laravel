<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Pulang', 'publisher' => 'Gramedia', 'year' => 2015, 'author_id' => 1],
            ['title' => 'Naruto', 'publisher' => 'Shueisha', 'year' => 1999, 'author_id' => 2],
            ['title' => 'Sebuah Seni untuk Bersikap Bodo Amat', 'publisher' => 'Gramedia', 'year' => 2016, 'author_id' => 3],
            ['title' => 'Laskar Pelangi', 'publisher' => 'Bentang Pustaka', 'year' => 2005, 'author_id' => 4],
            ['title' => 'Supernova', 'publisher' => 'Bentang Pustaka', 'year' => 2001, 'author_id' => 5],
        ]);
    }
}
