<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    public function run(): void
    {
        $usuarios = [
            // Docente (Rol 1)
            [
                'id_usuario' => '11111111',
                'nombre_usuario' => 'Juan',
                'apellido_usuario' => 'Pérez',
                'correo' => '11111111@sfa.edu.pe',
                'contraseña' => Hash::make('docente123'),
                'id_rol' => 1,
                'estado_usuario' => 'activo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Auxiliar (Rol 2)
            [
                'id_usuario' => '22222222',
                'nombre_usuario' => 'María',
                'apellido_usuario' => 'López',
                'correo' => '22222222@sfa.edu.pe',
                'contraseña' => Hash::make('auxiliar123'),
                'id_rol' => 2,
                'estado_usuario' => 'activo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Administrador (Rol 3)
            [
                'id_usuario' => '73831202',
                'nombre_usuario' => 'Leonardo Miguel',
                'apellido_usuario' => 'Sanchez Ramos',
                'correo' => '73831202@sfa.edu.pe',
                'contraseña' => Hash::make('admin123'),
                'id_rol' => 3,
                'estado_usuario' => 'activo',
                'created_at' => now(),
                'updated_at' => now()
            ],
            // Director (Rol 4)
            [
                'id_usuario' => '12345678',
                'nombre_usuario' => 'Ana',
                'apellido_usuario' => 'Martínez',
                'correo' => '123456789@sfa.edu.pe',
                'contraseña' => Hash::make('director123'),
                'id_rol' => 4,
                'estado_usuario' => 'activo',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('usuarios')->insert($usuarios);
    }
}
