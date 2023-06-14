@extends('adminlte::page')

@section('title', 'Dashboard')

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
                    <form action="{{ url('/rolUpdate/'.$users->id) }}" method="post" autocomplete="off">
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
                                <label>
                                    @foreach ($roles as $rol)
                                    <div class="form-check">
                                        <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" name="" id="" value="{{ $rol->id }}" checked>
                                        {{ $rol->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </label>
                                <!-- <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- LISTADO DE ROLES --}} 
                                            <label for="">LISTADO DE ROLES</label>                                      
                                            <x-adminlte-input type="text" name="roles" id="roles" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-user-lock text-dark"></i>
                                                    </div>
                                                </x-slot>
                                                
                                            </x-adminlte-input>  
                                        </div>
                                    </div>
                                </div> -->
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