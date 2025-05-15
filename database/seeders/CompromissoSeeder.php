<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompromissoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('compromissos')->insert([
            [
                'titulo' => 'Ser Woke',
                'quando'=> '2025-05-14T20:23',
            ],
            [
                'titulo' => 'Lacrar',
                'quando'=> '2025-05-14T20:23',
            ],
            [
                'titulo' => 'Ler o Manifesto Comunista',
                'quando'=> '2025-05-14T20:23',
            ],
            [
                'titulo' => 'Ser Vibes',
                'quando'=> '2025-05-14T20:23',
            ],
        ]);
    }
}
