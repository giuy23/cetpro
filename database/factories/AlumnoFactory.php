<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cetpro_id' => 1,
            'programa_estudio_id' => rand(1, 10),
            'marketing_id' => rand(1, 10),

            'ape_pater' => fake()->word(),
            'ape_mater' => fake()->word(),
            'full_name' => fake()->words(4,true),
            'sexo' => fake()->word(),
            'f_nacimiento' => fake()->date(),
            'DNI' => fake()->numberBetween(10000000,99999999),
            'correo' => fake()->unique()->safeEmail(),
            'facebook' => fake()->words(2,true),
            'tel_fijo' =>fake()->numberBetween(1000000000,9999999999),
            'cel_propio' =>fake()->numberBetween(100000000,999999999),
            'pais' => fake()->word(),
            'lu_nacimi' => fake()->words(4,true),
            'ditri_nacimi' => fake()->words(4,true),
            'provi_nacimi' => fake()->words(4,true),
            'regi_nacimi' => fake()->words(4,true),
            'ditri_actual' => fake()->words(4,true),
            'provi_actual' => fake()->words(4,true),
            'regi_actual' => fake()->words(4,true),
            'direc_actual' => fake()->words(4,true),
            'refe_direc' => fake()->words(10,true),
            'aa_nn_emer' => fake()->words(4,true),
            'parent_emer' => fake()->words(10,true),
            'cel_emer' => fake()->numberBetween(100000000,999999999),
            'religion' => fake()->words(4,true),
            'puesto_work' => fake()->words(4,true),
            'est_civil' => fake()->words(4,true),
            'nro_carga_fam' =>fake()->numberBetween(1,30),
            'net_en_casa' => fake()->word(),
            'operador_cel' => fake()->word(),
            'equipo_tec' => fake()->word(),
            'discapacidad' => fake()->words(4,true),
            'lengua_mater' => fake()->words(4,true),
            'expects' => fake()->paragraph(),
            'anio_academi' =>fake()->numberBetween(2021,2023),
            'code_inscrip' => fake()->words(4,true),

        ];
    }
}
