<?php

namespace App\Http\Controllers;

use App\Models\Seguimiento;
use Illuminate\Http\Request;

class SeguimientoController extends Controller
{

    public function index()
    {
        $datos = Seguimiento::orderBy('id', 'asc')->get();

        return view('administracion/seguimiento', compact('datos'));
    }

}
