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
        Schema::create('cursos_programas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cursos_id');
            $table->unsignedBigInteger('programas_id');

            $table->foreign('cursos_id')->references('id')->on('cursos')->onDelete('cascade');
            $table->foreign('programas_id')->references('id')->on('programas')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cursos_programas');
    }
};
