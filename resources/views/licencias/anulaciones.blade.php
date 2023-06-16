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
                                    <thead class="text-center text-nowrap bg-secondary">
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
                                        @foreach ($licenciasAnuladas as $licenciaAnulada)
                                        <tr>
                                            <td>{{ $licenciaAnulada->id }}</td>
                                            <td>{{ $licenciaAnulada->codLicencia }}</td>
                                            <td>{{ $licenciaAnulada->periodo }}</td>
                                            <td>{{ $licenciaAnulada->vigencia }}</td>
                                            <td>{{ $licenciaAnulada->natJurid }}</td>
                                            <td>{{ $licenciaAnulada->asunto }}</td>
                                            <td>{{ $licenciaAnulada->expediente }}</td>
                                            <td>{{ $licenciaAnulada->fechaExped }}</td>
                                            <td>{{ $licenciaAnulada->resolucion }}</td>
                                            <td>{{ $licenciaAnulada->apeNombre }}</td>
                                            <td>{{ $licenciaAnulada->ruc }}</td>
                                            <td>{{ $licenciaAnulada->telefono }}</td>
                                            <td>{{ $licenciaAnulada->dni }}</td>
                                            <td>{{ $licenciaAnulada->repLegal }}</td>
                                            <td>{{ $licenciaAnulada->dniRepLegal }}</td>
                                            <td>{{ $licenciaAnulada->dirEstable }}</td>
                                            <td>{{ $licenciaAnulada->numero }}</td>
                                            <td>{{ $licenciaAnulada->int }}</td>
                                            <td>{{ $licenciaAnulada->manzana }}</td>
                                            <td>{{ $licenciaAnulada->lote }}</td>
                                            <td>{{ $licenciaAnulada->cSect }}</td>
                                            <td>{{ $licenciaAnulada->sector }}</td>
                                            <td>{{ $licenciaAnulada->zona }}</td>
                                            <td>{{ $licenciaAnulada->giroEstable }}</td>
                                            <td>{{ $licenciaAnulada->estable }}</td>
                                            <td>{{ $licenciaAnulada->nivelRiesgo }}</td>
                                            <td>{{ $licenciaAnulada->area }}</td>
                                            <td>{{ $licenciaAnulada->observacion }}</td>
                                            <td>{{ $licenciaAnulada->zonificacion }}</td>
                                            <td>{{ $licenciaAnulada->nomComercial }}</td>
                                            <td>{{ $licenciaAnulada->reciboPago }}</td>
                                            <td>{{ $licenciaAnulada->fechaPago }}</td>
                                            <td>{{ $licenciaAnulada->importe }}</td>
                                            @if ($licenciaAnulada->estado == 1)
                                            <td><span class="badge bg-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Anulado</span></td>
                                            @endif
                                            <td> <br>
                                                @if ($licenciaAnulada->print == 1 || $licenciaAnulada->estado != 1) 
                                                    
                                                    <button href="#" class="btn btn-secondary" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                        <span class="fas fa-print"></span>
                                                    </button>
                                                    <button href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Modificar registro">
                                                        <span class='fas fa-edit'></span>
                                                    </button>                        
                                                    <button href="#" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Anular registro">
                                                        <span class="fas fa-ban"></span> 
                                                    </button>                                           
                                                @else
                                                    <a href="" class="btn btn-info" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                        <span class="fas fa-print"></span>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Modificar registro">
                                                        <span class='fas fa-edit'></span>
                                                    </a>                                                                                                
                                                                                                 
                                                    <a href="#" data-href="{{ url('licencias/'.$licenciaAnulada->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" data-placement="top" title="Anular registro">
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
   
@stop

@section('js')

@stop