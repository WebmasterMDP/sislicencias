@extends('adminlte::page')

@section('title', 'Zonificacion')

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
                                    <a href="#" data-href="" class="btn btn-info" data-toggle="modal" data-target="#addGiro" data-placement="top" title="Agregar Registro">
                                        <span class="fas fa-plus-square">Agregar</span>
                                    </a>
                                <br>
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1">
                                    <thead class="text-center text-nowrap bg-dark ">
                                        <tr>
                                            <th>COD GIRO</th>
                                            <th>GIRO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($giros as $giro)
                                        <tr>
                                            <td>{{ $giro->codGiro }}</td>
                                            <td>{{ $giro->nombre }}</td>
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



<div class="modal fade show" id="addGiro" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">REGISTRAR GIRO</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ url('licencias/giro') }}" method="POST" autocomplete="off">
                @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="row ">
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- CODGIRO --}}
                                            <label for="">COD GIRO</label>
                                            <x-adminlte-input type="text" required name="codGiro" id="codGiro" placeholder="Ingrese Cod. Giro" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- INGRESE GIRO --}}
                                            <label for="">INGRESE GIRO</label>                                       
                                            <x-adminlte-input type="text" required name="nombre" id="nombre" placeholder="Ingrese Giro" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop

@section('css')
@stop

@section('js')

@if(session('giro') == 'ok')
    <script>
        Swal.fire(
        'Exito!',
        'Se agrego correctamente',
        'success'
        )
    </script>
@endif

@if(session('giro') == 'fail')
    <script>
        Swal.fire({
            icon: 'error',
            title:'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
        })  
    </script>
@endif

@stop