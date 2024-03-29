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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('matricula', 12);
            $table->string('nombre', 80);
            $table->date('fechaNacimiento');
            $table->string('telefono', 22);
            $table->string('correo', 50)->nullable(); // nullable Puede ser opcionl el llenado
            $table->unsignedBigInteger('carrera_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
