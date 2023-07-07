<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Sector extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'codSector',
        'nombre',
        'zona',
        'usuario',
    ];

    /* public function lista_sector()
    {
        $sector = DB::table('sectores')
                    ->get();

    } */
}
