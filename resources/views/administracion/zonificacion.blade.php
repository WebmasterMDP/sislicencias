@extends('adminlte::page')

@section('title', 'Zonificacion')

@section('content_header')
@stop

@section('content')

<br>
<x-adminlte-card title="ZONIFICACIONES" class="m-2" theme="dark" icon="fas fa-id-card">
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
                                            <th>COD ZONIFICACION</th>
                                            <th>ZONIFICACION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                        </tr>
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

<div class="modal fade show" id="addSector" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">REGISTRAR ZONIFICACION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="{{ url('licencias/zonificacion') }}" method="POST" autocomplete="off">
            @csrf
                <div class="modal-body">
                    <div class="card-body">
                        <div class="row ">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- INGRESE SECTOR --}}
                                        <label for="">ZONA</label>                                       
                                        <x-adminlte-select type="number" name="zona" id="zona" required placeholder="Ingrese zona" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-id-card text-dark"></i>
                                                </div>
                                            </x-slot>
                                            <option value="-">-</option>
                                            <option value="1">1</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </x-adminlte-select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- CODSECTOR --}}
                                        <label for="">COD SECTOR</label>
                                        <x-adminlte-input type="text" required name="codSector" id="codSector" placeholder="Ingrese Cod. Sector" label-class="text-lightblue">
                                            <x-slot name="prependSlot">
                                                <div class="input-group-text">
                                                    <i class="fas fa-user text-dark"></i>
                                                </div>
                                            </x-slot>
                                        </x-adminlte-input>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{-- INGRESE SECTOR --}}
                                        <label for="">INGRESE SECTOR</label>                                       
                                        <x-adminlte-input type="text" required name="nombre" id="nombre" placeholder="Ingrese Zonificacion" label-class="text-lightblue">
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

@if(session('zonificacion') == 'ok')
    <script>
        Swal.fire(
        'Exito!',
        'Se agrego correctamente',
        'success'
        )
    </script>
@endif

@if(session('zonificacion') == 'fail')
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