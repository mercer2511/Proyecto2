<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradosSeeder extends Seeder
{
    public function run(): void
    {
        $grados = [
            [
                'nombre_grado' => 'Primero',
                'created_at' => now()
            ],
            [
                'nombre_grado' => 'Segundo',
                'created_at' => now()
            ],
            [
                'nombre_grado' => 'Tercero',
                'created_at' => now()
            ],
            [
                'nombre_grado' => 'Cuarto',
                'created_at' => now()
            ],
            [
                'nombre_grado' => 'Quinto',
                'created_at' => now()
            ]
        ];

        DB::table('grados')->insert($grados);
    }
}
