<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;
    protected $table = 'modulos';
    protected $fillable = [
        'nom_modulo',
        'fec_inicio',
        'fec_final',
    ];
}
