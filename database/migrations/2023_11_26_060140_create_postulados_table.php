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
        Schema::create('postulados', function (Blueprint $table) {
            $table->id();
            $table->string('direccion')->nullable();
            $table->string('imagen_perfil')->nullable();
            $table->string('imagen_documento')->nullable();
            $table->string('username')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('di_tipo')->nullable();
            $table->date('nacimiento')->nullable();
            $table->string('sexo')->nullable();
            $table->string('genero')->nullable();
            $table->string('telefono')->nullable();
            $table->string('paisRecidencia')->nullable();
            $table->string('di')->nullable();
            $table->string('user')->nullable();
            $table->string('aprobacion')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postulados');
    }
};
