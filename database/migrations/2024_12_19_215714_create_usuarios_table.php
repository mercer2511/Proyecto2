<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->string('id_usuario')->primary();
            $table->string('nombre_usuario');
            $table->string('apellido_usuario');
            $table->string('correo')->unique();
            $table->string('contraseña');
            // Relación usando foreignId()->constrained()
            $table->foreignId('id_rol')->constrained('roles', 'id_rol')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            
            $table->enum('estado_usuario', ['activo', 'inactivo'])->default('activo');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
