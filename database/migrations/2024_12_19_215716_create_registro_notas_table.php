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
        Schema::create('registro_notas', function (Blueprint $table) {
            // Clave primaria
            $table->id('id_nota');
            
            // Relaciones
            $table->string('id_estudiante');
            $table->foreign('id_estudiante')
                ->references('id_estudiante')
                ->on('estudiantes')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_periodo_academico')
                ->constrained('periodos_academicos', 'id_periodo_academico')
                ->onUpdate('cascade')
                ->onDelete('restrict');
                
            $table->foreignId('id_asignacion_docente')
                ->constrained('asignacion_docentes', 'id_asignacion_docente')
                ->onUpdate('cascade')
                ->onDelete('restrict');
            
            // Notas por unidad
            for($i = 1; $i <= 9; $i++) {
                $table->decimal("unidad{$i}", 3, 1)
                    ->default(0.0)
                    ->comment("Nota de la unidad {$i}");
            }
            
            // Promedios calculados
            $table->decimal('trimestre1', 3, 1)
                ->storedAs('(unidad1 + unidad2 + unidad3) / 3')
                ->comment('Promedio del primer trimestre');
                
            $table->decimal('trimestre2', 3, 1)
                ->storedAs('(unidad4 + unidad5 + unidad6) / 3')
                ->comment('Promedio del segundo trimestre');
                
            $table->decimal('trimestre3', 3, 1)
                ->storedAs('(unidad7 + unidad8 + unidad9) / 3')
                ->comment('Promedio del tercer trimestre');
                
            $table->decimal('nota_final', 3, 1)
                ->storedAs('(trimestre1 + trimestre2 + trimestre3) / 3')
                ->comment('Promedio final del curso');
            
            // Estado del registro
            $table->enum('estado', ['activo', 'inactivo'])
                ->default('activo')
                ->comment('Estado del registro de notas');
            
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
        Schema::dropIfExists('registro_notas');
    }
};
