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
                                            <th>LICENCIA</th>
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
                                        @foreach ($registro as $registros)
                                        <tr>
                                            <td>{{ $registros->id }}</td>
                                            <td>{{ $registros->periodo }}</td>
                                            <td>{{ $registros->vigencia }}</td>
                                            <td>{{ $registros->natJurid }}</td>
                                            <td>{{ $registros->asunto }}</td>
                                            <td>{{ $registros->expediente }}</td>
                                            <td>{{ $registros->fechaExped }}</td>
                                            <td>{{ $registros->resolucion }}</td>
                                            <td>{{ $registros->apeNombre }}</td>
                                            <td>{{ $registros->ruc }}</td>
                                            <td>{{ $registros->telefono }}</td>
                                            <td>{{ $registros->dni }}</td>
                                            <td>{{ $registros->repLegal }}</td>
                                            <td>{{ $registros->dniRepLegal }}</td>
                                            <td>{{ $registros->dirEstable }}</td>
                                            <td>{{ $registros->numero }}</td>
                                            <td>{{ $registros->int }}</td>
                                            <td>{{ $registros->manzana }}</td>
                                            <td>{{ $registros->lote }}</td>
                                            <td>{{ $registros->cSect }}</td>
                                            <td>{{ $registros->sector }}</td>
                                            <td>{{ $registros->zona }}</td>
                                            <td>{{ $registros->giroEstable }}</td>
                                            <td>{{ $registros->estable }}</td>
                                            <td>{{ $registros->nivelRiesgo }}</td>
                                            <td>{{ $registros->area }}</td>
                                            <td>{{ $registros->observacion }}</td>
                                            <td>{{ $registros->zonificacion }}</td>
                                            <td>{{ $registros->nomComercial }}</td>
                                            <td>{{ $registros->reciboPago }}</td>
                                            <td>{{ $registros->fechaPago }}</td>
                                            <td>{{ $registros->importe }}</td>
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