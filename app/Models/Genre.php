<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    private $genres = [
        ['name' => 'Drama'],
        ['name' => 'Action'],
        ['name' => 'Motivasi'],
    ];

    public function getGenres()
    {
        return $this->genres;
    }
}
