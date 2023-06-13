@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->

{{-- <!-- <link rel="stylesheet" href="http://localhost/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="http://localhost/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css?v=3.2.0"> --> --}}

<!-- <style>
    table.dataTable thead tr {
        background-color: #73AEF9;
}
</style> -->

@section('content_header')

@stop

@section('content')
<br>
<x-adminlte-card title="LOCAL" class="m-2" theme="dark" icon="fas fa-id-card">
    <div class="col-12">                                         
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                    <thead class="text-center text-nowrap bg-info ">
                                        <tr>
                                            <th>N°</th>
                                            <th>COD. LICENCIA</th>
                                            <th>PERIODO</th>
                                            <th>VIGENCIA</th>
                                            <th>NATURAL / JURIDICA</th>
                                            <th>ASUNTO</th>
                                            <th>EXPEDIENTE</th>
                                            <th>FECHA EXPEDIENTE</th>
                                            <th>RESOLUCIÓN</th>
                                            <th>APELLIDOS Y NOMBRES / RAZON SOCIAL</th>
                                            <th>R.U.C.</th>
                                            <th>TELEFONO</th>
                                            <th>DNI</th>
                                            <th>REPRESENTANTE LEGAL</th>
                                            <th>DNI REPRESENTANTE</th>
                                            <th>DIRECCIÓN DEL ESTABLECIMIENTO</th>
                                            <th>Nº</th>
                                            <th>INT</th>
                                            <th>MZ</th>
                                            <th>LT.</th>
                                            <th>C. SECT.</th>
                                            <th>SECTOR</th>
                                            <th>ZONA</th>
                                            <th>GIRO DEL ESTABLECIMIENTO</th>
                                            <th>ESTABLECIMIENTO</th>
                                            <th>NIVEL DE RIESGO</th>
                                            <th>AREA</th>
                                            <th>OBSERVACIONES</th>
                                            <th>ZONIFICACION</th>
                                            <th>NOMBRE COMERCIAL</th>
                                            <th>RECIBO DE PAGO</th>
                                            <th>FECHA DE PAGO</th>
                                            <th>IMPORTE</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($showRegistros as $showRegistro)
                                        <tr>
                                            <td>{{ $showRegistro->id }}</td>
                                            <td>{{ $showRegistro->codLicencia }}</td>
                                            <td>{{ $showRegistro->periodo }}</td>
                                            <td>{{ $showRegistro->vigencia }}</td>
                                            <td>{{ $showRegistro->natJurid }}</td>
                                            <td>{{ $showRegistro->asunto }}</td>
                                            <td>{{ $showRegistro->expediente }}</td>
                                            <td>{{ $showRegistro->fechaExped }}</td>
                                            <td>{{ $showRegistro->resolucion }}</td>
                                            <td>{{ $showRegistro->apeNombre }}</td>
                                            <td>{{ $showRegistro->ruc }}</td>
                                            <td>{{ $showRegistro->telefono }}</td>
                                            <td>{{ $showRegistro->dni }}</td>
                                            <td>{{ $showRegistro->repLegal }}</td>
                                            <td>{{ $showRegistro->dniRepLegal }}</td>
                                            <td>{{ $showRegistro->dirEstable }}</td>
                                            <td>{{ $showRegistro->numero }}</td>
                                            <td>{{ $showRegistro->int }}</td>
                                            <td>{{ $showRegistro->manzana }}</td>
                                            <td>{{ $showRegistro->lote }}</td>
                                            <td>{{ $showRegistro->cSect }}</td>
                                            <td>{{ $showRegistro->sector }}</td>
                                            <td>{{ $showRegistro->zona }}</td>
                                            <td>{{ $showRegistro->giroEstable }}</td>
                                            <td>{{ $showRegistro->estable }}</td>
                                            <td>{{ $showRegistro->nivelRiesgo }}</td>
                                            <td>{{ $showRegistro->area }}</td>
                                            <td>{{ $showRegistro->observacion }}</td>
                                            <td>{{ $showRegistro->zonificacion }}</td>
                                            <td>{{ $showRegistro->nomComercial }}</td>
                                            <td>{{ $showRegistro->reciboPago }}</td>
                                            <td>{{ $showRegistro->fechaPago }}</td>
                                            <td>{{ $showRegistro->importe }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-adminlte-card>

@stop

@section('css')
    <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css">
@stop

@section('js')
@stop