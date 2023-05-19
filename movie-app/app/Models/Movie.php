<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $movies = [
        [
            'no' => 1,
            'judul' => 'The Imposibel',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2018,
            'rating' => 9.8,
        ],
        [
            'no' => 2,
            'judul' => 'The Fast',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2017,
            'rating' => 9.6,
        ],
        [
            'no' => 3,
            'judul' => 'Jhon Wick 4',
            'poster' => 'image.png',
            'genre' => 'Action',
            'negara' => 'USA',
            'tahun' => 2023,
            'rating' => 9.9,
        ],
        [
            'no' => 4,
            'judul' => 'The Godfather',
            'poster' => 'image.png',
            'genre' => 'Crime',
            'negara' => 'USA',
            'tahun' => 1972,
            'rating' => 9.5,
        ],
        [
            'no' => 5,
            'judul' => 'Avengers Infinity War',
            'poster' => 'image.png',
            'genre' => 'Hero',
            'negara' => 'USA',
            'tahun' => 2022,
            'rating' => 9.7,
        ],
    ];

    public function getAllMovies()
    {
        return $this ->movies;
    }
}
