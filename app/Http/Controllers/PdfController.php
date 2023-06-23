<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class PdfController extends Controller
{
    public function index($id)
    {     
        $showDatosLicencia = Licencia::where('id', $id)->first();
        
        return view('pdf/pdf', compact('showDatosLicencia'));
    }

    public function show()
    {      
        return view('pdf/qr');
    }
}
