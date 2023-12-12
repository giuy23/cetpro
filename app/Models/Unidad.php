<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    use HasFactory;
    protected $table = 'unidades';
    protected $fillable = [
        'nombre',
        'creditos',
        'horas',
        'condicion',
        'modulo_id',
    ];

    protected $cast = [
        'horas' => 'integer',
        'creditos' => 'integer'
    ];

    public function modulo()
    {
        return $this->belongsTo(Modulo::class);
    }
}
