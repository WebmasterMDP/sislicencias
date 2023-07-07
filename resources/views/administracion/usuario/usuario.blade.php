@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')

@stop

@section('content')
<br>

<x-adminlte-card title="REGISTRO USUARIO" class="m-2" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ url('agregar/usuario') }}" method="POST" autocomplete="off">
                        @csrf
                        <div class="card-body">
                            <div class="row "> 
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- NOMBRES --}}
                                            <label for="">NOMBRES</label>                                       
                                            <x-adminlte-input type="text" required name="name" id="name" placeholder="Ingrese nombres" label-class="text-lightblue">
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
                                            <x-adminlte-input type="text" required name="lastname" id="lastname" placeholder="Ingrese apellidos" label-class="text-lightblue">
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
                                            <x-adminlte-input type="number" required name="numDocument" id="numDocument" placeholder="Ingrese documento" label-class="text-lightblue">
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
                                            {{-- CORREO --}} 
                                            <label for="">CORREO</label>                                      
                                            <x-adminlte-input type="email" required name="correo" id="correo" placeholder="Ingrese Correo" label-class="text-lightblue">
                                                <x-slot name="prependSlot">
                                                    <div class="input-group-text">
                                                    <i class="fas fa-envelope text-dark"></i>
                                                    </div>
                                                </x-slot>
                                            </x-adminlte-input>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            {{-- ROL --}}
                                            <label for="">ROL</label>  
                                            <x-adminlte-select type="text" required name="rol" id="rol" placeholder="Ingrese rol" label-class="text-lightblue">
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
@stop

@section('js')

@if(session('user') == 'ok')
    <script>
        Swal.fire(
        'Exito!',
        'Se agrego correctamente',
        'success'
        )
    </script>
@endif

@if(session('user') == 'fail')
    <script>
        Swal.fire({
            icon: 'error',
            title:'Oops...',
            text: 'Something went wrong!',
            footer: '<a href="">Why do I have this issue?</a>'
        })  
    </script>
@endif

@if(session('user') == 'miss')
    <script>
        Swal.fire(
            'No ingreso datos validos!',
            'No procedio la solicitud',
            'warning'
        )
    </script>
@endif


<script>
function validar(){
	
	//Almacenamos los valores
	nombre=$('#numDocument').val();
	
   //Comprobamos la longitud de caracteres
	if (nombre.length<8){
		return true;
	}
	else {
		alert('Maximo 8 caracteres');
		return false;
	}

}
</script>


@stop