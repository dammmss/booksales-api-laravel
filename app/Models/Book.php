<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'cover_photo',
        'publisher',
        'year',
        'author_id',
    ];

    public function genre()
{
    return $this->belongsTo(Genre::class);
}

    public $timestamps = true;

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}
