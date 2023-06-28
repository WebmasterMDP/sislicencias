<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Sector;
use App\Models\Giro;
use Illuminate\Support\Facades\Auth;

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(/* Licencia $licencia */)
    {
        $showRegistros = Licencia::select('*')
                                 ->where(['estado'=>'1'])
                                 ->orderBy('id', 'desc')
                                 ->get();

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
    public function destroy($id/* Licencia $licencia */)
    {
        $seguimiento = new Seguimiento();
        $seguimiento->licencia_id = $id;
        $seguimiento->estado = request('estado');
        $seguimiento->print = request('print');
        $seguimiento->observacion = request('razon');
        $seguimiento->save();
        try {

            $cancelLicencia = Licencia::findOrFail($id);
            $cancelLicencia->update(['estado' => 0]);
            /* var_dump($seguimiento); */

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
    
    public function anulacionPrint($id)
    {
        /* $anulacionPrint =  */Licencia::where(['id' => $id])
                                       ->update(['print' => '1']);
        
        return "ok"; /* $anulacionPrint; *//* view('pdf/anulacion', compact('showDatosLicencia')); */
    }

    public function habilitacion()
    {
        $showRegistros = Licencia::select('*')
                            ->where(['estado' => '0'])
                            ->orWhere(['print' => '1'])
                            ->orderBy('id', 'desc')
                            ->get();

        return view('administracion/habilitacion', compact('showRegistros'));
    }

    public function desAnulacion($id)
    {
        if(request('razon')==null){

            return redirect('listahabilitacion')->with('success','Ingrese el motivo por el cual desea desanular');
            
        }else{
            
        Licencia::where(['id' => $id])
                ->update(['estado' => '1']);

            $usuario = auth()->user()->username;

            $seguimiento = new Seguimiento();
            $seguimiento->licencia_id = $id;
            $seguimiento->estado = '1';
            $seguimiento->print = request('print');
            $seguimiento->observacion = request('razon');
            $seguimiento->usuario = $usuario;

            $seguimiento->save();

        return redirect('listahabilitacion');
        }
    }

    public function anulacion($id)
    {
        Licencia::where(['id' => $id])
                ->update(['estado' => '0']);

            $usuario = auth()->user()->username;

            $seguimiento = new Seguimiento();
            $seguimiento->licencia_id = $id;
            $seguimiento->estado = '0';
            $seguimiento->print = request('print');
            $seguimiento->observacion = request('razon');
            $seguimiento->usuario = $usuario;
            
            $seguimiento->save();
                            
        return redirect('listahabilitacion');
    }

    public function desAnulacionPrint($id)
    {
        Licencia::where(['id' => $id])
                ->update(['print' => '0']);

            $usuario = auth()->user()->username;

            $seguimiento = new Seguimiento();
            $seguimiento->licencia_id = $id;
            $seguimiento->estado = request('estado');
            $seguimiento->print = '0';
            $seguimiento->observacion = request('razon');
            $seguimiento->usuario = $usuario;

            $seguimiento->save();

        return redirect('listahabilitacion');
    }
    public function getSunatDatos($ruc){
        $url = 'https://ws3.pide.gob.pe/Rest/Sunat/DatosPrincipales?';

        $response = file_get_contents($url.'numruc='.$ruc.'&out=json'); 
        $data = json_decode($response, true);
        return response()->json($data);

        /* $data = json_decode($res->getBody(), true);
        return response()->json($data); */
    }
    
}
