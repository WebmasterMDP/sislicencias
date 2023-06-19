<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Sector;
use App\Models\Giro;

class LicenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sectors = Sector::orderBy('nombre', 'asc')->get();
        $giros = Giro::orderBy('nombre', 'asc')->get();
        
        return view('licencias/reglicencia', compact('sectors','giros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosLicencia = $request->except('_token', 'btnRegistrar');
        try {                    

            $consultaCodigoAnt = Licencia::select('id','periodo')
                                            /* ->where('periodo', date('Y')) */
                                            ->orderBy('id', 'desc')
                                            ->first();

            $codLicencia = array('codLicencia' => '000'.$consultaCodigoAnt->id+(1).'-'.$consultaCodigoAnt->periodo,
                                'periodo' => date('Y'));
            

            $registroLicencia = array_merge($codLicencia, $datosLicencia);
            Licencia::insert($registroLicencia);
            
            return response()->json($registroLicencia);
        } catch (\Throwable $th) {
            $codLicencia = array('codLicencia' => '0001-'.date('Y'),
                             'periodo' => date('Y'));        

            $registroLicencia = array_merge($codLicencia, $datosLicencia);
            Licencia::insert($registroLicencia);
        }
        


        /* $codLicencia = array('codLicencia' => '0001-'.date('Y'),
                             'periodo' => date('Y'));        

            $registroLicencia = array_merge($codLicencia, $datosLicencia);
            Licencia::insert($registroLicencia); */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(/* Licencia $licencia */)
    {
        $showRegistros = Licencia::orderBy('id', 'desc')->get();

        return view('licencias/visualizar', compact('showRegistros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $licencia = Licencia::where('id',$id)->first();
        $sectors = Sector::orderBy('nombre', 'asc')->get();
        $giros = Giro::orderBy('nombre', 'asc')->get();
        return view('licencias/editar', compact('licencia', 'giros', 'sectors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosLicencia = $request->except(['_token','_method','btnRegistrar']);
        Licencia::where('id',$id)->update($datosLicencia);
        /* var_dump($datosLicencia); */
        return redirect('licencias/visualizar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licencia $licencia)
    {
        //
    }
}
