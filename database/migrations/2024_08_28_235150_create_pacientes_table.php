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
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id(); 
            $table->string('nombre'); 
            $table->string('apellido_paterno'); 
            $table->string('apellido_materno'); 
            $table->date('fecha_nacimiento'); 
            $table->string('genero'); 
            $table->string('direccion'); 
            $table->string('telefono'); 
            $table->string('email'); 
            $table->string('tipo_sangre');
            $table->text('alergias'); 
            $table->date('fecha_ingreso'); 
            $table->string('medico_asignado'); 
            $table->integer('estado');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pacientes');
    }
};
