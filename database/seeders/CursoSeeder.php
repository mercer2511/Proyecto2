<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CursoSeeder extends Seeder
{
    public function run(): void
    {
        $cursos = [
            [
                'nombre_curso' => 'Matemática',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Arte',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Computación',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Comunicación',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Ciencias Sociales',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Ciencia y Tecnología',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Desarrollo Personal, Ciudadanía y Cívica',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Educación Física',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Educación Religiosa',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'nombre_curso' => 'Inglés',
                'id_periodo_academico' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('cursos')->insert($cursos);
    }
}
