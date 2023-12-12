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
        Schema::table('unidades', function (Blueprint $table) {
            $table->integer('creditos')->change();
            $table->integer('horas')->change();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('unidades', function (Blueprint $table) {
            $table->string('creditos')->change();
            $table->string('horas')->change();
        });

    }
};
