<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama genre' => 'Action',
            'deskripsi' => 'Film ini sangat menegangkan dang sangat seru wajib untuk di tonton bersama sahabat',
            
            
        ],
        [
            'no' => 2,
            'nama genre' => 'Horor',
            'deskripsi' => 'Film ini sangat menegangkan dang sangat seru wajib untuk di tonton bersama sahabat',
            
            
        ],
        [
            'no' => 3,
            'nama genre' => 'Comedy',
            'deskripsi' => 'Film ini sangat menegangkan dang sangat seru wajib untuk di tonton bersama sahabat',
            
            
        ],
        [
            'no' => 4,
            'nama genre' => 'Fmaly',
            'deskripsi' => 'Film ini sangat menegangkan dang sangat seru wajib untuk di tonton bersama sahabat',
            
            
        ],
        [
            'no' => 5,
            'nama genre' => 'Hero',
            'deskripsi' => 'Film ini sangat menegangkan dang sangat seru wajib untuk di tonton bersama sahabat',
            
            
        ],

    ];

    public function getAllGenres()
    {
        return $this ->genres;
    }

}
