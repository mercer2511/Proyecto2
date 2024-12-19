<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodosAcademicosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('periodos_academicos')->updateOrInsert(
            ['nombre_periodo_academico' => '2024'],
            [
                'nombre_periodo_academico' => '2024',
                'created_at' => now()
            ]
        );
    }
}
