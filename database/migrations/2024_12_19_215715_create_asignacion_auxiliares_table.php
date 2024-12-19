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
        Schema::create('asignacion_auxiliares', function (Blueprint $table) {
            // Clave primaria
            $table->id('id_asignacion_auxiliar');
            
            // Relaciones usando foreignId()->constrained()
            $table->string('id_usuario');
            $table->foreign('id_usuario')
                ->references('id_usuario')
                ->on('usuarios')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_grado')
                ->constrained('grados', 'id_grado')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_periodo_academico')
                ->constrained('periodos_academicos', 'id_periodo_academico')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            
            // Estado de la asignación
            $table->enum('estado', ['activo', 'inactivo'])->default('activo');
            
            // Campos de auditoría
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asignacion_auxiliares');
    }
};
