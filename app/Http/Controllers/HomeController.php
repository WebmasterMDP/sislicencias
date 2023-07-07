<?php

namespace App\Http\Controllers;
use App\Models\Licencia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dispo  = Licencia::where('estado', 1);
        $anul     = Licencia::where('estado', 0);
        $impri   = Licencia::where('print', 1);
        $noImpri = Licencia::where('print', 0);

        $countDisponibles  = $dispo->count();
        $countAnulados     = $anul->count();
        $countImprimidos   = $impri->count();
        $countNoImprimidos = $noImpri->count();

        $disponibles  = $dispo->get();
        $anulados     = $anul->get();
        $imprimidos   = $impri->get();
        $noImprimidos = $noImpri->get();

        return view('home', compact('disponibles', 'anulados', 'imprimidos', 'noImprimidos', 'countAnulados', 
                                    'countDisponibles', 'countImprimidos', 'countNoImprimidos'));
    }

    public function reg_usuario()
    {
        return view('reglicencia');
    }
}
