<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Giro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'codGiro',
        'nombre',
        'cod1',
        'cod2',
        'cod3',
        'cod4',
    ];
}
