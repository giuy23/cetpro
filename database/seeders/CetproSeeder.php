<?php

namespace Database\Seeders;

use App\Models\Cetpro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CetproSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cetpro::create([
            'name_cetpro'=>"cetpro",
            'tipo_gestion'=>"inst",
            'resol_autoriza'=>"789qwe789",
            'lugar'=>"junin",
            'distrito'=>"el tambo",
            'provincia'=>"hyo",
            'departamento'=>"junin",
            'correo_inst'=>"cetprosalsatec@gmail.com",
            'code_modular'=>"asd789asd",
            'ugel'=>"hyo",
            'resol_programs'=>"resol2023/02AGA",
            'telefono'=>"951753852",
            'celular'=>"987654321",
            'direccion'=>"Jr. Hvca 165",
            'pag_web'=>"cetprosaltec.com",
            'nivel_formativo'=>"tecnico", 
        ]);
    }
}
