<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AsignacionEstudiantesSeeder extends Seeder
{
    public function run(): void
    {
        $asignaciones = [];
        $idEstudiante = 10000000;
        
        // Obtener IDs necesarios
        $periodo = DB::table('periodos_academicos')
            ->where('nombre_periodo_academico', '2024')
            ->first();
            
        $grados = DB::table('grados')->pluck('id_grado');

        // Asignar 10 estudiantes a cada grado
        foreach ($grados as $grado) {
            for ($i = 0; $i < 10; $i++) {
                $asignaciones[] = [
                    'id_estudiante' => (string)$idEstudiante,
                    'id_grado' => $grado,
                    'id_periodo_academico' => $periodo->id_periodo_academico,
                    'created_at' => now()
                ];
                $idEstudiante++;
            }
        }

        DB::table('asignacion_estudiantes')->insert($asignaciones);
    }
}