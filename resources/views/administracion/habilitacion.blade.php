@extends('adminlte::page')

@section('title', 'Dashboard')

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
                                @if (session('success'))
                                    <div class="alert alert-success">
                                        <strong>{{ session('success') }}</strong>
                                    </div>
                                @elseif (session('error'))
                                    <div class="alert alert-danger">
                                        <strong>{{ session('error') }}</strong>
                                    </div>
                                @endif
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                    <thead class="text-center text-nowrap bg-dark">
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
                                            <th>ESTADO</th>
                                            <th>ACCIONES</th>

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

                                            @if ($showRegistro->estado == 1)
                                            <td><span class="badge bg-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Anulado</span></td>
                                            @endif
                                            <td> <br>

                                            @if ( $showRegistro->estado == 0 && $showRegistro->print == 1)
                                                <a href="{{ url('licencias/desanular/'.$showRegistro->id) }}" data-href="" class="btn btn-success" data-placement="top" title="Desanular Registro">
                                                    <span class="fas fa-check-circle"></span>
                                                </a>  
                                                <a href="{{ url('licencias/desPrint/'.$showRegistro->id) }}" data-href="" class="btn btn-info" data-placement="top" title="Habilitar Impresion">
                                                    <span class="fas fa-print"></span>
                                                </a>
                                                <button href="#" class="btn btn-secondary" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                    <span class="fas fa-ban"></span>
                                                </button>

                                            @elseif ( $showRegistro->estado == 0 && $showRegistro->print != 1 )
                                                <a href="{{ url('licencias/desanular/'.$showRegistro->id) }}" data-href="" class="btn btn-success" data-placement="top" title="Desanular Registro">
                                                    <span class="fas fa-check-circle"></span>
                                                </a>
                                                <button href="#" class="btn btn-secondary" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                    <span class="fas fa-print"></span>
                                                </button>
                                                <button href="#" class="btn btn-secondary" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                    <span class="fas fa-ban"></span>
                                                </button>
                                            
                                            @elseif ( $showRegistro->estado != 0 && $showRegistro->print == 1 )
                                                <button href="#" class="btn btn-secondary" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                    <span class="fas fa-check-circle"></span>
                                                </button>
                                                <a href="{{ url('licencias/desPrint/'.$showRegistro->id) }}" data-href="" class="btn btn-info" data-placement="top" title="Habilitar Impresion">
                                                    <span class="fas fa-print"></span>
                                                </a>
                                                <a href="{{ url('licencias/anular/'.$showRegistro->id) }}" data-href="" class="btn btn-danger" data-placement="top" title="Desanular Registro">
                                                    <span class="fas fa-ban"></span>
                                                </a>
                                            @endif
                                            </td>
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
    {{-- <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css"> --}}
@stop

@section('js')
@stop