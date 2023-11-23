<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function programa()
    {
        return $this->belongsTo(Programa::class);
    }

    public function cetpro()
    {
        return $this->belongsTo(Cetpro::class, 'cetpro_id');
    }

}
