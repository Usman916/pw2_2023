<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::create([
            'judul'=> 'Jhon Weck 4',
            'poster'=> 'image.png',
            'genre_id'=> 1,
            'negara'=> 'USA',
            'tahun'=> 2023,
            'rating'=> 9.9,
        ]);

        Movie::create([
            'judul'=> 'The GoodFather',
            'poster'=> 'image.png',
            'genre_id'=> 3,
            'negara'=> 'USA',
            'tahun'=> 2017,
            'rating'=> 8.0,
        ]);
    }
}
