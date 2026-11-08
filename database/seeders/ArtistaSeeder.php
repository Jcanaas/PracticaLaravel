<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Artista;
use App\Models\Genere;

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

        $pop = Genere::where('nom', 'Pop')->first();
        $rock = Genere::where('nom', 'Rock')->first();
        $electro = Genere::where('nom', 'Electrònica')->first();
        $jazz = Genere::where('nom', 'Jazz')->first();
        $hiphop = Genere::where('nom', 'Hip-hop')->first();
        $indie = Genere::where('nom', 'Indie')->first();

        Artista::where('nom', 'Rosalía')->first()->generes()->attach([$pop->id, $electro->id]);
        Artista::where('nom', 'George Michael')->first()->generes()->attach([$pop->id]);
        Artista::where('nom', 'YKZ')->first()->generes()->attach([$hiphop->id, $rock->id]);
        Artista::where('nom', 'Eric Clapton')->first()->generes()->attach([$rock->id, $jazz->id]);
        Artista::where('nom', 'Sabrina Carpenter')->first()->generes()->attach([$pop->id, $indie->id]);
        Artista::where('nom', 'ABBA')->first()->generes()->attach([$pop->id]);
        Artista::where('nom', 'Limp Bizkit')->first()->generes()->attach([$rock->id, $hiphop->id]);
        Artista::where('nom', 'Urban Dance Squad')->first()->generes()->attach([$hiphop->id, $rock->id, $electro->id]);
    }
}
