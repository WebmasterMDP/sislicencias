<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use Illuminate\Http\Request;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::orderBy('nombre', 'asc')->get();

        return view('administracion/sector', compact('sectors'));
    }

    public function create()
    {
        try{
        $usuario = auth()->user()->username;
        $datos = new Sector();
        $datos->codSector = request('codSector');
        $datos->nombre = request('nombre');
        $datos->zona = request('zona');
        $datos->usuario = $usuario;
        $datos->save();

        return redirect()->route('sector')->with('sector', 'ok');

        } catch (\Throwable $th) {
            
            return redirect()->route('sector')->with('sector', 'fail');
        }
    }
}
