<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'codLicencia',
        'periodo',
        'vigencia',
        'natJurid',
        'expediente',
        'asunto',
        'fechaExped',
        'apeNombre',
        'resolucion',
        'ruc',
        'telefono',
        'dni',
        'repLegal',
        'dniRepLegal',
        'dirEstable',
        'nomComercial',
        'numero',
        'int',
        'manzana',
        'lote',
        'cSect',
        'sector',
        'zona',
        'area',
        'giroEstable',
        'nivelRiesgo',
        'zonificacion',
        'estable',
        'observacion',
        'reciboPago',
        'fechaPago',
        'importe',
        'print',
        'estado',
    ];
}
