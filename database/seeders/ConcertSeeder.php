<?php

namespace Database\Seeders;

use App\Models\Escenari;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Concert;

class ConcertSeeder extends Seeder
{

    public function randomOrder(): int {

         return (Escenari::inRandomOrder()->first()->id);
    }

    public function run(): void
    {

        Concert::create([
        'escenari_id' => Escenari::inRandomOrder()->first()->id,
        'artista_id' => 6,
        'nom' => "Concierto Eric Clapton BCN",
        'data_hora' => 20240415,
        'durada_minuts' => 90,
        'tipus' => 'ACUSTIC'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 7,
            'nom' => "Concierto Limp Bizkit BCN",
            'data_hora' => 20240416,
            'durada_minuts' => 90,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 1,
            'nom' => "Concierto Rosalia x Trakatra",
            'data_hora' => 20240417,
            'durada_minuts' => 80,
            'tipus' => 'SHOWCASE'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 5,
            'nom' => "Concierto sabrina Carpintera | Villa-marin",
            'data_hora' => 20240416,
            'durada_minuts' => 60,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 5,
            'nom' => "Concierto sabrina Carpintera | Lima Peru",
            'data_hora' => 20260415,
            'durada_minuts' => 30,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 6,
            'nom' => "Concierto Eric Clapton | Sabadell",
            'data_hora' => 20260415,
            'durada_minuts' => 90,
            'tipus' => 'ACUSTIC'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 6,
            'nom' => "Concierto Eric Clapton | Sabadell",
            'data_hora' => 20260416,
            'durada_minuts' => 120,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 3,
            'nom' => "Concierto YKZ | Sabadell",
            'data_hora' => 20260417,
            'durada_minuts' => 120,
            'tipus' => 'SHOWCASE'
        ]);


        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 6,
            'nom' => "Concierto Eric Clapton BCN Parte 2: Ahora es personal",
            'data_hora' => 20270415,
            'durada_minuts' => 90,
            'tipus' => 'ACUSTIC'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 7,
            'nom' => "Concierto Limp Bizkit BCN Parte 2: Ahora es personal",
            'data_hora' => 20270416,
            'durada_minuts' => 90,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 1,
            'nom' => "Concierto Rosalia x Trakatra Parte 2: Ahora es personal",
            'data_hora' => 20270417,
            'durada_minuts' => 80,
            'tipus' => 'SHOWCASE'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 5,
            'nom' => "Concierto sabrina Carpintera | Villa-marin Parte 2: Ahora es personal",
            'data_hora' => 20270416,
            'durada_minuts' => 60,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 5,
            'nom' => "Concierto sabrina Carpintera | Lima Peru Parte 2: Ahora es personal",
            'data_hora' => 20270415,
            'durada_minuts' => 30,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 6,
            'nom' => "Concierto Eric Clapton | Sabadell Parte 2: Ahora es personal",
            'data_hora' => 20270415,
            'durada_minuts' => 90,
            'tipus' => 'ACUSTIC'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 6,
            'nom' => "Concierto Eric Clapton | Sabadell Parte 2: Ahora es personal",
            'data_hora' => 20270416,
            'durada_minuts' => 120,
            'tipus' => 'CONCERT'
        ]);
        Concert::create([
            'escenari_id' => Escenari::inRandomOrder()->first()->id,
            'artista_id' => 3,
            'nom' => "Concierto YKZ | Sabadell Parte 2: Ahora es personal",
            'data_hora' => 20270417,
            'durada_minuts' => 120,
            'tipus' => 'SHOWCASE'
        ]);


        Escenari::inRandomOrder()->first()->id;

    }


}
