<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;

class ArtistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Artista::create([
            'nom' => 'Rosalía',
            'pais' => 'Espanya',
            'bio' => 'Cantant i compositora catalana.',
            'imatge_url' => null,
            'actiu' => true,
        ]);
        Artista::create([
            'nom' => 'George Michael',
            'pais' => 'Reino Unido',
            'bio' => 'Cantante de pop',
            'imatge_url' => null,
            'actiu' => true,
        ]);
        Artista::create([
            'nom' => 'YKZ',
            'pais' => 'Japon',
            'bio' => 'Grupo de Rap-core/Funk',
            'imatge_url' => null,
            'actiu' => false,
        ]);
        Artista::create([
            'nom' => 'Eric Clapton',
            'pais' => 'Estados Unidos',
            'bio' => 'Cantante y cimpositor de blues',
            'imatge_url' => null,
            'actiu' => true,
        ]);
        Artista::create([
            'nom' => 'Sabrina Carpenter',
            'pais' => 'Estados Unidos',
            'bio' => 'Cantante de pop',
            'imatge_url' => null,
            'actiu' => true,
        ]);
        Artista::create([
            'nom' => 'ABBA',
            'pais' => 'Suecia',
            'bio' => 'Grupo de pop',
            'imatge_url' => null,
            'actiu' => false,
        ]);
        Artista::create([
            'nom' => 'Limp Bizkit',
            'pais' => 'Estados unidos',
            'bio' => 'Grupo de nu metal',
            'imatge_url' => null,
            'actiu' => true,
        ]);
        Artista::create([
            'nom' => 'Urban Dance Squad',
            'pais' => 'Paises bajos',
            'bio' => 'Grupo de rapcore/numetal',
            'imatge_url' => null,
            'actiu' => false,
        ]);

    }
}
/*id
nom
pais
bio
imatge_url
actiu
timestamps
*/
