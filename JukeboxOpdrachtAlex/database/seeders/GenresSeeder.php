<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenresSeeder extends Seeder
{
    public function run(): void
    {
        $genres = [
            ['Genre' => 'Rock'],
            ['Genre' => 'Metal'],
            ['Genre' => 'House'],
            ['Genre' => 'Classic'],
            ['Genre' => 'Phonk']
        ];

        DB::table('genres')->insert($genres);
    }
}
