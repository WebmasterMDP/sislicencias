@extends('adminlte::page')

@section('title', 'Modificaciones')

@section('content_header')
@stop

@section('content')

<br>
<x-adminlte-card title="MODIFICACIONES" class="m-2" theme="dark" icon="fas fa-id-card">
    <div class="col-12">                                         
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <a href="#" data-href="" class="btn btn-info" data-toggle="modal" data-target="#addSector" data-placement="top" title="Agregar Sector">
                                    <span class="fas fa-plus-square">Agregar</span>
                                </a>
                                <br>
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1">
                                    <thead class="text-center text-nowrap bg-dark ">
                                        <tr>
                                            <th>ID</th>
                                            <th>COD LICENCIA</th>
                                            <th>ESTADO</th>
                                            <th>PRINT</th>
                                            <th>OBSERVACION</th>
                                            <th>USUARIO</th>
                                            <th>FECHA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($datos as $dato)
                                        <tr>
                                            <td>{{ $dato->id }}</td>
                                            <td>{{ $dato->licencia_id }}</td>
                                            @if( $dato->estado == 1)
                                            <td><span class="badge bg-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Anulado</span></td>
                                            @endif
                                            @if( $dato->print == 1)
                                            <td><span class="badge bg-secondary">Impreso</span></td>
                                            @else
                                            <td><span class="badge bg-info">No Impreso</span></td>
                                            @endif
                                            <td>{{ $dato->observacion }}</td>
                                            <td>{{ $dato->usuario }}</td>
                                            <td>{{ $dato->created_at }}</td>
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