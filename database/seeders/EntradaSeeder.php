<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Entrada;

class EntradaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 1,
            'preu_pagat' => 25.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 6,
            'preu_pagat' => 35.50,
        ]);
        Entrada::create([
            'user_id' => 3,
            'concert_id' => 11,
            'preu_pagat' => 45.00,
        ]);
        Entrada::create([
            'user_id' => 4,
            'concert_id' => 16,
            'preu_pagat' => 60.00,
        ]);
        Entrada::create([
            'user_id' => 5,
            'concert_id' => 5,
            'preu_pagat' => 75.00,
        ]);
        Entrada::create([
            'user_id' => 6,
            'concert_id' => 10,
            'preu_pagat' => 90.00,
        ]);
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 15,
            'preu_pagat' => 120.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 4,
            'preu_pagat' => 25.00,
        ]);
        Entrada::create([
            'user_id' => 3,
            'concert_id' => 9,
            'preu_pagat' => 35.50,
        ]);
        Entrada::create([
            'user_id' => 4,
            'concert_id' => 14,
            'preu_pagat' => 45.00,
        ]);
        Entrada::create([
            'user_id' => 5,
            'concert_id' => 3,
            'preu_pagat' => 60.00,
        ]);
        Entrada::create([
            'user_id' => 6,
            'concert_id' => 8,
            'preu_pagat' => 75.00,
        ]);
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 13,
            'preu_pagat' => 90.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 2,
            'preu_pagat' => 120.00,
        ]);
        Entrada::create([
            'user_id' => 3,
            'concert_id' => 7,
            'preu_pagat' => 25.00,
        ]);
        Entrada::create([
            'user_id' => 4,
            'concert_id' => 12,
            'preu_pagat' => 35.50,
        ]);
        Entrada::create([
            'user_id' => 5,
            'concert_id' => 1,
            'preu_pagat' => 45.00,
        ]);
        Entrada::create([
            'user_id' => 6,
            'concert_id' => 6,
            'preu_pagat' => 60.00,
        ]);
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 11,
            'preu_pagat' => 75.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 16,
            'preu_pagat' => 90.00,
        ]);
        Entrada::create([
            'user_id' => 3,
            'concert_id' => 5,
            'preu_pagat' => 120.00,
        ]);
        Entrada::create([
            'user_id' => 4,
            'concert_id' => 10,
            'preu_pagat' => 25.00,
        ]);
        Entrada::create([
            'user_id' => 5,
            'concert_id' => 15,
            'preu_pagat' => 35.50,
        ]);
        Entrada::create([
            'user_id' => 6,
            'concert_id' => 4,
            'preu_pagat' => 45.00,
        ]);
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 9,
            'preu_pagat' => 60.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 14,
            'preu_pagat' => 75.00,
        ]);
        Entrada::create([
            'user_id' => 3,
            'concert_id' => 3,
            'preu_pagat' => 90.00,
        ]);
        Entrada::create([
            'user_id' => 4,
            'concert_id' => 8,
            'preu_pagat' => 120.00,
        ]);
        Entrada::create([
            'user_id' => 5,
            'concert_id' => 13,
            'preu_pagat' => 25.00,
        ]);
        Entrada::create([
            'user_id' => 6,
            'concert_id' => 2,
            'preu_pagat' => 35.50,
        ]);
        Entrada::create([
            'user_id' => 1,
            'concert_id' => 7,
            'preu_pagat' => 45.00,
        ]);
        Entrada::create([
            'user_id' => 2,
            'concert_id' => 12,
            'preu_pagat' => 60.00,
        ]);
    }
}
