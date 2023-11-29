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

            $table->string('ape_pater');
            $table->string('ape_mater');
            $table->string('full_name');
            $table->string('sexo');
            $table->date('f_nacimiento');
            $table->string('DNI', 8);
            $table->string('correo');
            $table->string('facebook') -> nullable();
            $table->integer('tel_fijo') -> nullable();
            $table->integer('cel_propio');
            $table->string('pais');
            $table->string('lu_nacimi') -> nullable();
            $table->string('ditri_nacimi');
            $table->string('provi_nacimi');
            $table->string('regi_nacimi');
            $table->string('ditri_actual');
            $table->string('provi_actual');
            $table->string('regi_actual');
            $table->string('direc_actual');
            $table->string('refe_direc') -> nullable();
            $table->string('aa_nn_emer');
            $table->string('parent_emer');
            $table->integer('cel_emer');
            $table->string('religion') -> nullable();
            $table->string('puesto_work') -> nullable();
            $table->string('est_civil') -> nullable();
            $table->integer('nro_carga_fam') -> nullable();
            $table->string('net_en_casa');
            $table->string('operador_cel') -> nullable();
            $table->string('equipo_tec') -> nullable();
            $table->string('discapacidad') -> nullable();
            $table->string('lengua_mater') -> nullable();
            $table->text('expects') -> nullable();
            $table->integer('anio_academi');
            $table->string('code_inscrip');

            // Clave foránea a la tabla "programas"
            $table->unsignedBigInteger('programa_estudio_id');
            $table->foreign('programa_estudio_id')->references('id')->on('programas')->onDelete('cascade');

            // Clave foránea a la tabla "cetpro"
            $table->unsignedBigInteger('cetpro_id');
            $table->foreign('cetpro_id')->references('id')->on('cetpros')->onDelete('cascade');

            // Clave foránea a la tabla "marketing"
            $table->unsignedBigInteger('marketing_id');
            $table->foreign('marketing_id')->references('id')->on('marketings')->onDelete('cascade');

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
