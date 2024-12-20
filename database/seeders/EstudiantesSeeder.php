<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EstudiantesSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('es_ES');
        $estudiantes = [];
        $contador = 10000000;

        $grados = DB::table('grados')->pluck('id_grado');

        foreach ($grados as $grado) {
            for ($i = 0; $i < 10; $i++) {
                $estudiantes[] = [
                    'id_estudiante' => (string)$contador,
                    'nombre_estudiante' => $faker->firstName(),
                    'apellido_estudiante' => $faker->lastName(),
                    'estado_estudiante' => 'activo',
                    'created_at' => now()
                ];
                $contador++;
            }
        }

        DB::table('estudiantes')->insert($estudiantes);
    }
}