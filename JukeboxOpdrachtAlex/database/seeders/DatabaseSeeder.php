<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
{
    Genre::create(['Genre' => 'Rock', 'Nummers' => 'RockSong1, RockSong2']);
    Genre::create(['Genre' => 'Pop', 'Nummers' => 'PopSong1, PopSong2']);
    // Voeg hier meer genres toe indien nodig
}
}
