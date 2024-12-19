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
        Schema::create('registro_asistencias', function (Blueprint $table) {
            // Clave primaria
            $table->id('id_asistencia');
            
            // Relaciones usando foreignId() y constrained()
            $table->foreignId('id_asignacion_auxiliar')
                ->constrained('asignacion_auxiliares', 'id_asignacion_auxiliar')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->string('id_estudiante');
            $table->foreign('id_estudiante')
                ->references('id_estudiante')
                ->on('estudiantes')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_estado_asistencia')
                ->constrained('estado_asistencias', 'id_estado_asistencia')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_periodo_academico')
                ->constrained('periodos_academicos', 'id_periodo_academico')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            
            // Campos de fecha y estado
            $table->date('fecha')->default(now());
            
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
        Schema::dropIfExists('registro_asistencias');
    }
};
