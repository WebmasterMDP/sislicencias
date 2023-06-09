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
        'cod1',
        'cod2',
        'cod3',
        'cod4',
        'cod5',
        'cod6',
        'cod7',
        'cod8',
        'cod9',
    ];

    /* public function lista_sector()
    {
        $sector = DB::table('sectores')
                    ->get();

    } */
}
