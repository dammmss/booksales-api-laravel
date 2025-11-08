<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class genre
{
    public static function all()
    {
        return [
            ['id' => 1, 'name' => 'Fiction'],
            ['id' => 2, 'name' => 'Fantasy'],
            ['id' => 3, 'name' => 'Science'],
            ['id' => 4, 'name' => 'History'],
            ['id' => 5, 'name' => 'Horror'],
        ];
    }
}
