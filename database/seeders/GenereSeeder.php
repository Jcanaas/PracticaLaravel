<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Genere;

class GenereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $generes = ['Pop', 'Rock', 'Electrònica', 'Jazz', 'Hip-hop', 'Indie'];

        foreach ($generes as $nom) {
            Genere::firstOrCreate(['nom' => $nom]);
        }
    }
}
