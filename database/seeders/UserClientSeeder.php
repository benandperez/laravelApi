<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserClientSeeder extends Seeder
{
    public function run()
    {
        // Insertar registros por defecto en la tabla "user_clients"
        DB::table('user_clients')->insert([
            'name' => 'Usuario 1',
            'email' => 'usuario1@example.com',
        ]);

        DB::table('user_clients')->insert([
            'name' => 'Usuario 2',
            'email' => 'usuario2@example.com',
        ]);

        DB::table('user_clients')->insert([
            'name' => 'Usuario 3',
            'email' => 'usuario3@example.com',
        ]);

        DB::table('user_clients')->insert([
            'name' => 'Usuario 4',
            'email' => 'usuario4@example.com',
        ]);
    }
}

