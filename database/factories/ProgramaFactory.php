<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programa>
 */
class ProgramaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'modulo' => fake()->word(),
            'periodo_clases_inicio' => fake()->date(),
            'periodo_clases_final' => fake()->date(),
            'nivel_formativo' => fake()->word()
        ];
    }
}
