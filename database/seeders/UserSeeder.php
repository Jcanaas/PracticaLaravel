<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Paco Cañadas',
            'email' => 'jordi2007cm@gmail.com',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'Joel Doncel',
            'email' => 'e.jdoncels@ies-sabadell.cat',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'Amador Rivas',
            'email' => 'capitansalamiisinthehouse@gmail.com',
            'password' => 'password',
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => 'password',
        ]);



    }
}
