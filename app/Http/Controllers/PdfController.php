<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function index($id)
    {     
        $showDatosLicencia = Licencia::where('id', $id)->first();

        
        
        return view('pdf/pdf', compact('showDatosLicencia'));
    }
}
