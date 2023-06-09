<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', /* licencia */
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
    ];
}
