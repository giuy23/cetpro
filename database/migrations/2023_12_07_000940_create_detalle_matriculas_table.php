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
        Schema::create('detalle_matriculas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("programa_id");
            $table->unsignedBigInteger("modulo_id");
            $table->unsignedBigInteger("unidad_id");
            $table->unsignedBigInteger("competencia_id");
            $table->unsignedBigInteger("capacidad_id");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_matriculas');
    }
};
