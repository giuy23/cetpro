<?php

namespace Database\Seeders;

use App\Models\Unidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UnidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Unidad::create([
            'nombre' => 'UD 1. ASociacion',
            'creditos' => '15',
            'horas' => '45',
            'condicion' => 'V',
            'modulo_id' => 1,
        ]);
    }
}
