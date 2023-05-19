<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rivew extends Model
{
    use HasFactory;

    protected $rivew = [
        [
            'no' => 1,
            'film' => 'jhon wick 4',
            'user' => 'Keanu Reeves',
            'rating' => 9.8,
            'rivew' => 'menawarkan sensasi pertarungan yang sangat wow sekali  ',
            'tanggal' => 2023-04-25,
            
            
        ],
        [
            'no' => 2,
            'film' => 'A QUITE PLACE PART II',
            'user' => 'Emily Blunt',
            'rating' => 9.2,
            'rivew' => 'menawarkan kesunyian dan ketegangan yang sama dengan A QUITE PLACE PART I.',
            'tanggal' => 2020-04-19 ,
            
            
        ],
        [
            'no' => 3,
            'film' => 'GODZILLA VS KONG',
            'user' => 'Adam Wingard',
            'rating' => 9.7,
            'rivew' => 'Bercerita tentang pertarungan antara dua raksasa berkekuatan besar',
            'tanggal' => 2021-03-26,
            
            
        ],
        [
            'no' => 4,
            'film' => ' CRUELLA',
            'user' => 'Emma Stone',
            'rating' => 9.4,
            'rivew' => 'berfokus pada kisah hidup karakter ini semasa muda',
            'tanggal' => 2022-04-25,
            
            
        ],
        [
            'no' => 5,
            'film' => 'GHOSTBUSTERS: AFTERLIFE',
            'user' => 'afterlife',
            'rating' => 9.5,
            'rivew' => 'bercerita tentang keluarga Callie dan kedua anaknya yang pindah ke kota kecil.',
            'tanggal' => 2021-04-25,
            
            
        ],

    ];

    public function getAllRivew()
    {
        return $this ->rivew;
    }    
}
