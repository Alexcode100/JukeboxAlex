<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsSeeder extends Seeder
{
    public function run()
    {

        $rockGenreId = DB::table('genres')->where('Genre', 'Rock')->first()->id;
        $metalGenreId = DB::table('genres')->where('Genre', 'Metal')->first()->id;
        $houseGenreId = DB::table('genres')->where('Genre', 'House')->first()->id;
        $classicGenreId = DB::table('genres')->where('Genre', 'Classic')->first()->id;
        $phonkGenreId = DB::table('genres')->where('Genre', 'Phonk')->first()->id;
        $songs = [
            // Rock nummers
            ['Naam' => 'Bohemian Rhapsody', 'Artiest_Band' => 'Queen', 'Duur' => 354, 'genre_id' => $rockGenreId],
            ['Naam' => 'Hotel California', 'Artiest_Band' => 'Eagles', 'Duur' => 390, 'genre_id' => $rockGenreId],
            ['Naam' => 'Sweet Child o\' Mine', 'Artiest_Band' => 'Guns N\' Roses', 'Duur' => 355, 'genre_id' => $rockGenreId],

            // Metal nummers
            ['Naam' => 'Master of Puppets', 'Artiest_Band' => 'Metallica', 'Duur' => 516, 'genre_id' => $metalGenreId],
            ['Naam' => 'Painkiller', 'Artiest_Band' => 'Judas Priest', 'Duur' => 363, 'genre_id' => $metalGenreId],
            ['Naam' => 'Holy Wars... The Punishment Due', 'Artiest_Band' => 'Megadeth', 'Duur' => 402, 'genre_id' => $metalGenreId],

            // House nummers
            ['Naam' => 'Levels', 'Artiest_Band' => 'Avicii', 'Duur' => 362, 'genre_id' => $houseGenreId],
            ['Naam' => 'Animals', 'Artiest_Band' => 'Martin Garrix', 'Duur' => 300, 'genre_id' => $houseGenreId],
            ['Naam' => 'I Remember', 'Artiest_Band' => 'Deadmau5 & Kaskade', 'Duur' => 589, 'genre_id' => $houseGenreId],

            // Classic nummers
            ['Naam' => 'Für Elise', 'Artiest_Band' => 'Beethoven', 'Duur' => 150, 'genre_id' => $classicGenreId],
            ['Naam' => 'Nocturne in E-flat major, Op. 9, No. 2', 'Artiest_Band' => 'Chopin', 'Duur' => 240, 'genre_id' => $classicGenreId],
            ['Naam' => 'Canon in D', 'Artiest_Band' => 'Pachelbel', 'Duur' => 360, 'genre_id' => $classicGenreId],

            // Phonk nummers
            ['Naam' => 'Resurrection', 'Artiest_Band' => 'Elevation', 'Duur' => 320, 'genre_id' => $phonkGenreId],
            ['Naam' => 'Drift', 'Artiest_Band' => 'Phonkha', 'Duur' => 210, 'genre_id' => $phonkGenreId],
            ['Naam' => 'Lost Souls', 'Artiest_Band' => 'Hensonn', 'Duur' => 305, 'genre_id' => $phonkGenreId],
            
            // Voeg hier meer nummers toe zoals nodig
        ];

        DB::table('songs')->insert($songs);
    }
}
