<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GenereSeeder::class,
            EscenariSeeder::class,
            ArtistaSeeder::class,
            ConcertSeeder::class,
            UserSeeder::class,
            EntradaSeeder::class,
        ]);
    }
}
