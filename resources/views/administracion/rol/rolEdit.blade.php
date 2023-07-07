@extends('adminlte::page')

@section('title', 'Rol')

@section('content_header')
    <h1>Asignar Roles</h1>
@stop

@section('content')
<br>
<x-adminlte-card title="ACTUALIZACIÓN DE USUARIO" class="m-2" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('/rolupdate/'.$users->id) }}" method="post" autocomplete="off">
                        @csrf
                        <div class="card-body">                                
                            <div class="row "> 
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- NOMBRES --}}
                                            <label for="">NOMBRES</label>                                       
                                            <x-adminlte-input type="text" name="name" id="name" disabled value="{{$users->name}}" placeholder="Ingrese nombres" label-class="text-lightblue">
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
                                            {{-- APELLIDOS --}}
                                            <label for="">APELLIDOS</label>                                       
                                            <x-adminlte-input type="text" name="lastname" id="lastname" disabled value="{{$users->lastname}}" placeholder="Ingrese nombres" label-class="text-lightblue">
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
                                            <x-adminlte-input type="text" name="numDocument" id="numDocument" disabled value="{{$users->numDocument}}" placeholder="Ingrese documento" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-id-card text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                </div>
                                @foreach ($roles as $rol)
                                <div class="col-md-1">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- VNC --}} 
                                            <label for="">{{ $rol->name }}</label>
                                            <x-adminlte-input type="checkbox" name="rol" id="rol" value="{{ $rol->id }}" placeholder="Ingrese IP" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                </x-slot>
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" type="submit">
                                        <i class="fas fa-upload"></i>
                                        Actualizar
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

@stop