<?php

namespace App\Http\Controllers;

use App\Models\Giro;
use Illuminate\Http\Request;
use Laravel\Ui\Presets\React;

class GiroController extends Controller
{

    public function index()
    {
        $giros = Giro::orderBy('id', 'asc')->get();
        return view('administracion/giro', compact('giros'));
    }

    public function create()
    {
        try{ 
        $usuario = auth()->user()->username;
        $datos = new Giro();
        $datos->codGiro = request('codGiro');
        $datos->nombre = request('nombre');
        $datos->cod1 = $usuario;
        $datos->save();
        /* var_dump($datos); */

        return redirect()->route('giro')->with('giro', 'ok');

        } catch (\Throwable $th) {
            
            return redirect()->route('giro')->with('giro', 'fail');
        }
    }
}
