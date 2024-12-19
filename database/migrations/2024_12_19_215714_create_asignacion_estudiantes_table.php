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
        Schema::create('asignacion_estudiantes', function (Blueprint $table) {
            $table->id('id_asignacion_estudiante');
            // Relaciones usando foreignId()->constrained()
            $table->string('id_estudiante');
            $table->foreign('id_estudiante')
                ->references('id_estudiante')
                ->on('estudiantes')
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
        Schema::dropIfExists('asignacion_estudiantes');
    }
};
