<?php

namespace App\Http\Controllers;

use App\Models\Zonificacion;
use Illuminate\Http\Request;

class ZonificacionController extends Controller
{

    public function index()
    {
        /* $sectors = Sector::orderBy('nombre', 'asc')->get(); */

        return view('administracion/zonificacion');
    }

    public function create()
    {
        try{ 
            $usuario = auth()->user()->username;
            /* $datos = array($request->except(['_token','_method']),'cod1' => $usuario); */
            $datos = new Zonificacion();
            $datos->nombre = request('nombre');
            $datos->cod1 = $usuario;
            $datos->save();
            /* var_dump($datos); */
    
            return redirect()->route('zonificacion')->with('zonificacion', 'ok');
    
        }catch (\Throwable $th) {
            
            return redirect()->route('zonificacion')->with('zonificacion', 'fail');
        }
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Zonificacion $zonificacion)
    {
        //
    }

    public function edit(Zonificacion $zonificacion)
    {
        //
    }

    public function update(Request $request, Zonificacion $zonificacion)
    {
        //
    }

    public function destroy(Zonificacion $zonificacion)
    {
        //
    }
}
