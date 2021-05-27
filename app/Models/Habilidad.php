<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;
    protected $table = 'habilidades';
    protected $fillable = [
        'persona_id',
        'nombre',
        'porcentaje',
        'orden'
    ];
    //Hacer la relación (habilidades   >------  personas)
    public function persona()
    {
        return $this->belongsTo(Persona::class);
    }
}
