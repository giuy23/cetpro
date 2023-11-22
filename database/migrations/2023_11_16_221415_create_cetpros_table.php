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
        Schema::create('cetpros', function (Blueprint $table) {
            $table->id();

            $table->string('name_cetpro');
            $table->string('tipo_gestion');
            $table->string('resol_autoriza');
            $table->string('lugar');
            $table->string('distrito');
            $table->string('provincia');
            $table->string('departamento');
            $table->string('correo_inst');
            $table->string('code_modular');
            $table->string('ugel');
            $table->string('resol_programs');
            $table->integer('telefono');
            $table->integer('celular');
            $table->string('direccion');
            $table->string('pag_web') -> nullable();
            $table->string('nivel_formativo');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cetpros');
    }
};
