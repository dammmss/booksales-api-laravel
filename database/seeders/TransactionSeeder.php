<?php

namespace Database\Seeders;

use App\Models\Transaction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            'order_number' => 'ORD-0001',
            'user_id' => 2,
            'book_id' => 1,
            'quantity' => 1,
            'total_price' => 250000.00,
        ]);

        Transaction::create([
            'order_number' => 'ORD-0002',
            'user_id' => 2,
            'book_id' => 2,
            'quantity' => 3,
            'total_price' => 50000.00,
        ]);
    }
}
