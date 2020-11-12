<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'dispositivo_id',
        'usuario_id',
        'piezas_id',
        'cantidad',
        'precio',
    ];
}
