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
    public function annulations()
    {
        $licenciasAnuladas = Licencia::select('*')
                                     ->where(['estado' => '0'])
                                     ->orderBy('id', 'desc')
                                     ->get();
        return view('licencias/anulaciones', compact('licenciasAnuladas'));
    }
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
<<<<<<< HEAD
    {       

        try {
            $datosLicencia = $request->except('_token', 'btnRegistrar');
            $consultaCodigoAnt = Licencia::select('id','codLicencia','periodo')                                            
                                            ->orderBy('id', 'desc')
                                            ->first();
        
            if(empty($consultaCodigoAnt) || empty($consultaCodigoAnt->id) || empty($consultaCodigoAnt->periodo)) {

                $codLicencia = array('codLicencia' => '0001-'.date('Y'),
                                'periodo' => date('Y'));
                $registroLicencia = array_merge($codLicencia, $datosLicencia);            
                
            }else {
                if ($consultaCodigoAnt->periodo != date('Y') ) {

                    $codLicencia = array('codLicencia' => '0001-'.date('Y') ,
                                'periodo' =>  date('Y')); 
                    $registroLicencia = array_merge($codLicencia, $datosLicencia);
                
                }else {
                    /* $codLicencia = array('codLicencia' => '000'.$consultaCodigoAnt->id+(1).'-'.$consultaCodigoAnt->periodo,
                                    'periodo' => date('Y'));*/  
                    /* $generarCodigoLicencia = substr($consultaCodigoAnt->codLicencia, 2) + 1; */
                    $generarCodigoLicencia = substr($consultaCodigoAnt->codLicencia, 0, 4) + 1;
                    $codLicencia = array('codLicencia' => '000'.$generarCodigoLicencia.'-'.$consultaCodigoAnt->periodo,
                                        'periodo' => date('Y'));

                    $registroLicencia = array_merge($codLicencia, $datosLicencia);               
                }           
                
            }
            /* Licencia::insert($registroLicencia); */
            Licencia::create($registroLicencia);
            return redirect('licencias/show')->with('success', 'Licencia registrada correctamente');

        } catch (\Throwable $th) {
            /* return redirect('licencias/show')->with('error', 'Error al registrar la licencia, contácte con la Oficina de Gobierno Digital');  */ 
            return redirect('licencias/show')->with('error', $th->getMessage());          
        }
        
        

        /* return response()->json($registroLicencia);      */   
=======
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
>>>>>>> a7bff08bf7de131ea8fdfc575319e3af44b4094a
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(/* Licencia $licencia */)
    {
<<<<<<< HEAD
        $showRegistros = Licencia::select('*')
                                 ->where(['estado'=>'1'])
                                 ->orderBy('id', 'desc')
                                 ->get();
=======
        $showRegistros = Licencia::orderBy('id', 'desc')->get();
>>>>>>> a7bff08bf7de131ea8fdfc575319e3af44b4094a

        return view('licencias/visualizar', compact('showRegistros'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Licencia $licencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Licencia $licencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id/* Licencia $licencia */)
    {
        
        /* try {
            $eliminarLicencia = Licencia::findOrFail($id);
            $eliminarLicencia->delete();
            return redirect('licencias/show')->with('success', 'Licencia anulada correctamente');
        } catch (\Throwable $th) {
            return redirect('licencias/show')->with('error', 'Error al anular la licencia, contácte con la Oficina de Gobierno Digital'); 
        } */
        try {
            $cancelLicencia = Licencia::findOrFail($id);
            $cancelLicencia->update(['estado' => 0]);
            return redirect('licencias/show')->with('success', 'Licencia anulada correctamente');
        } catch (\Throwable $th) {
            return redirect('licencias/show')->with('error', 'Error al anular la licencia, contácte con la Oficina de Gobierno Digital'); 
        }
        
    } 
    
    /* public function getLicencia($id)
    {
        $licencia = Licencia::select('*')
                            ->where(['id' => $id])
                            ->first();
        return response()->json($licencia);
    } */

    public function fpdfLicencia($id)
    {
        $showDatosLicencia = Licencia::select('*')
                            ->where(['id' => $id])
                            ->first();
        return view('pdf/pdf', compact('showDatosLicencia'));
    }
    
}
