<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    protected $fillable = [
        'nombre',
        'fecha_inicio',
        'fecha_entrega',
        'anticipo',
        'estado',
        'soluciones',
        'reparaciones',
        'total',
        'marca',
        'color',
        'no_serie',
        'observaciones',
        'cliente_id',
        'tipo_id',
        'empleado_id',
    ];
}
