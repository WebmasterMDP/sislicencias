<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use App\Models\Seguimiento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Registro;
use App\Models\Sector;
use App\Models\Giro;
use Illuminate\Support\Facades\Auth;

class LicenciaController extends Controller
{
    public function index()
    {
        $sectors = Sector::orderBy('nombre', 'asc')->get();
        $giros = Giro::orderBy('nombre', 'asc')->get();
        
        return view('licencias/reglicencia', compact('sectors','giros'));
    }

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

    public function store(Request $request)
    {       
        $validate = Validator::make($request->all(), [
            'vigencia' => 'required',
            'natJurid' => 'required',
            'expediente' => 'required|min:5',
            'asunto' => 'required',
            'fechaExped' => 'required',
            'apeNombre' => 'required',
            'resolucion' => 'required',
            'ruc' => 'required|min:11|max:11',
            'telefono' => 'required|min:7',
            'dni' => 'required|min:8',
            'repLegal' => 'required',
            'dniRepLegal' => 'required|min:8',
            'dirEstable' => 'required',
            'nomComercial' => 'required',
            'cSect' => 'required',
            'sector' => 'required',
            'zona' => 'required',
            'area' => 'required',
            'nivelRiesgo' => 'required',
            'zonificacion' => 'required',
            'giroEstable' => 'required',
            'estable' => 'required',
            'observacion' => 'required',
            'reciboPago' => 'required',
            'fechaPago' => 'required',
            'importe' => 'required',
        ],[
            'required' => 'Ingrese datos solicitados',
            'expediente.min' => 'Ingrese 5 caracteres como mínimo',
            'telefono.min' => 'Ingrese 7 caracateres como mínimo',
            'ruc.min' => 'Ingrese 11 carateres como mínimo',
            'dni.min' => 'Ingrese 8 carateres como mínimo',
            'dniRepLegal.min' => 'Ingrese 8 carateres como mínimo',
            'ruc.max' => 'Ingrese 11 carateres como maximo',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput()->with('licencia', 'miss');
        }else{  

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
                return redirect('licencias/show')->with('licencia', 'ok');
    
            } catch (\Throwable $th) {
                /* return redirect('licencias/show')->with('error', 'Error al registrar la licencia, contácte con la Oficina de Gobierno Digital');  */ 
                return redirect('licencias/show')->with('error', $th->getMessage());
                /* return redirect('licencias/show')->with('licencia', 'error'); */
            }
        }
        /* return response()->json($registroLicencia);      */   
    }

    public function show(/* Licencia $licencia */)
    {
        $showRegistros = Licencia::select('*')
                                 ->where(['estado'=>'1'])
                                 ->orderBy('id', 'desc')
                                 ->get();

        return view('licencias/visualizar', compact('showRegistros'));
    }

    public function edit($id)
    {
        $licencia = Licencia::where('id',$id)->first();
        $sectors = Sector::orderBy('nombre', 'asc')->get();
        $giros = Giro::orderBy('nombre', 'asc')->get();
        return view('licencias/editar', compact('licencia', 'giros', 'sectors'));
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(),
        [
            'vigencia' => 'required',
            'natJurid' => 'required',
            'expediente' => 'required|min:5',
            'asunto' => 'required',
            'fechaExped' => 'required',
            'apeNombre' => 'required',
            'resolucion' => 'required',
            'ruc' => 'required|min:11|max:11',
            'telefono' => 'required|min:9',
            'dni' => 'required',
            'repLegal' => 'required',
            'dniRepLegal' => 'required',
            'dirEstable' => 'required',
            'nomComercial' => 'required',
            'cSect' => 'required',
            'sector' => 'required',
            'zona' => 'required',
            'area' => 'required',
            'nivelRiesgo' => 'required',
            'zonificacion' => 'required',
            'giroEstable' => 'required',
            'estable' => 'required',
            'observacion' => 'required',
            'reciboPago' => 'required',
            'fechaPago' => 'required',
            'importe' => 'required',
        ],[
            'required' => 'Ingrese datos solicitados',
            'expediente.min' => 'Ingrese 5 caracteres como mínimo',
        ]);

        if($validate->fails()){
            return back()->withErrors($validate->errors())->withInput();

        }else{

            $datosLicencia = $request->except(['_token','_method','btnRegistrar']);
            Licencia::where('id',$id)->update($datosLicencia);
            /* var_dump($datosLicencia); */
            return redirect('licencias/visualizar');

        }
    }

    public function destroy(){   
        
        $id = request('id');
        $usuario = auth()->user()->username;

        $seguimiento = new Seguimiento();
        $seguimiento->licencia_id = $id;
        $seguimiento->estado = request('estado');
        $seguimiento->print = request('print');
        $seguimiento->observacion = request('razon');
        $seguimiento->usuario = $usuario;
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
                            ->orderBy('id', 'desc')
                            ->get();

        return view('administracion/habilitacion', compact('showRegistros'));
    }

    public function desAnulacion($id)
    {
        $razon = request('razon');
        if($razon == null){
            return redirect()->route('habilitaciones')->with('reason', 'miss');
        }else{
            try{ 
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

                return redirect()->route('habilitaciones')->with('desanular', 'ok');

            } catch (\Throwable $th) {
                return redirect()->route('habilitaciones')->with('error', 'fail');
            }
        }
    }

    public function anulacion($id)
    {
        $razon = request('razon');
        if($razon == null){
            return redirect()->route('habilitaciones')->with('reason', 'miss');
        }else{
            try{
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
                
                return redirect()->route('habilitaciones')->with('anular', 'ok');

                } catch (\Throwable $th) {

                return redirect()->route('habilitaciones')->with('error', 'fail');
            }
        }
        
    }

    public function desAnulacionPrint($id)
    {
        $razon = request('razon');
        if($razon == null){
            return redirect()->route('habilitaciones')->with('reason', 'miss');
        }else{
            try{
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

                return redirect()->route('habilitaciones')->with('print', 'ok');
    
            }catch (\Throwable $th) {
                return redirect()->route('habilitaciones')->with('error', 'fail');
            }
        }
    }
    public function getSunatDatos($ruc){
        $url = 'https://ws3.pide.gob.pe/Rest/Sunat/DatosPrincipales?';

        $response = file_get_contents($url.'numruc='.$ruc.'&out=json'); 
        $data = json_decode($response, true);   
        return response()->json($data);

        /* $data = json_decode($res->getBody(), true);
        return response()->json($data); */
    }

    public function getSector($zona){
        $response = Sector::where(['zona' => $zona])
                    ->get();

        return $response;
    }
}
