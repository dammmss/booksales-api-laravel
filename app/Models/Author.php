<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    private $authors = [
        [
            'name' => 'Tere Liye',
            'bio' => 'Penulis novel terkenal Indonesia yang dikenal dengan karya-karya bernuansa kehidupan dan moral.',
        ],
        [
            'name' => 'Masashi Kishimoto',
            'bio' => 'Penulis dan ilustrator manga terkenal asal Jepang, pencipta serial Naruto.',
        ],
        [
            'name' => 'Mark Manson',
            'bio' => 'Penulis buku pengembangan diri asal Amerika Serikat yang terkenal dengan gaya bahasanya yang lugas.',
        ],
    ];

    public function getAuthors()
    {
        return $this->authors;
    }
}
