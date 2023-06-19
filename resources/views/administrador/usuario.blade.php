@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<br>

<x-adminlte-card title="REGISTRO USUARIO" class="m-2" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="aUsuario" method="POST" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <div class="row "> 
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- NOMBRES --}}
                                            <label for="">NOMBRES</label>                                       
                                            <x-adminlte-input type="text" name="name" id="name" placeholder="Ingrese nombres" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- DOC --}} 
                                            <label for="">DOC. NACIONAL IDENTIDAD</label>                                      
                                            <x-adminlte-input type="text" name="numDocument" id="numDocument" placeholder="Ingrese documento" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-id-card text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- APELLIDOS --}}
                                            <label for="">APELLIDOS</label>
                                            <x-adminlte-input type="text" name="lastname" id="lastname" placeholder="Ingrese apellidos" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- ROL --}}
                                            <label for="">ROL</label>  
                                            <x-adminlte-select type="text" name="rol" id="rol" placeholder="Ingrese rol" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-id-card text-dark"></i>
                                                    </div>
                                                </x-slot>
                                                <option>usuario</option>
                                                <option>admin</option>
                                            </x-adminlte-select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" name="btnBuscar" id="btnBuscar" type="submit">
                                        <i class="fas fa-upload"></i>
                                        Registrar
                                    </button>                                                                       
                                </div>                                       
                            </div>
                        </div>
                    </form>
                    <!-- /.form -->         
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section> 
</x-adminlte-card>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop