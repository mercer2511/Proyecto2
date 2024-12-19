<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoAsistenciasSeeder extends Seeder
{
    public function run(): void
    {
        $estados = [
            'Presente',
            'Falta',
            'Tardanza',
            'Falta Justificada'
        ];

        foreach ($estados as $estado) {
            DB::table('estado_asistencias')->updateOrInsert(
                ['nombre_estado_asistencia' => $estado],
                [
                    'nombre_estado_asistencia' => $estado,
                    'created_at' => now()
                ]
            );
        }
    }
}