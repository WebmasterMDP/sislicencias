@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')
<br>
<x-adminlte-card title="REGISTRO LICENCIA" class="m-2" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('licencias.store')}}" method="POST" autocomplete="off">
                        @csrf
                        <div class="card-body">                                
                            <div class="row "> 
                                <x-adminlte-card title="DATOS" class="" theme="dark" icon="fas fa-id-card">
                                    <div class="col-12">                                       
                                        <div class="row ">
                                            <div class="col-md-5">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label for="">VIGENCIA</label>                                   
                                                        <x-adminlte-select type="text" name="vigencia" id="vigencia" placeholder="Vigencia" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <option>-- selecione --</option>
                                                            <option>INDETERMINADA</option>
                                                            <option>UN (01) AÑO</option>
                                                            <option>DOS (02) AÑOS</option>
                                                            <option>CUATRO (04) AÑOS</option>
                                                            <option>CINCO (05) AÑOS</option>
                                                            <option>CESE (BAJA DE LICENCIA)</option>
                                                            <option>ANULADO</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Natural/Juridica --}} 
                                                        <label for="">NATURAL/JURÍRIDCA</label>                                      
                                                        <x-adminlte-select type="text" name="natJurid" id="natJurid" placeholder="Natural / Juridica" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <option>-- selecione --</option>
                                                            <option>NATURAL</option>
                                                            <option>JURIDICA</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Expediente --}}
                                                        <label for="">EXPEDIENTE</label>                                    
                                                        <x-adminlte-input type="text" name="expediente" id="expediente" placeholder="Expediente" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Asunto --}}
                                                        <label for="">ASUNTO</label>                                     
                                                        <x-adminlte-select type="text" name="asunto" id="asunto" placeholder="Asunto" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <option>-- selecione --</option>
                                                            <option>LICENCIA DE FUNCIONAMIENTO INDETERMINADA</option>
                                                            <option>LICENCIA DE FUNCIONAMIENTO TEMPORAL</option>
                                                            <option>LICENCIA DE FUNCIONAMIENTO MAS AUTORIZACION DE ANUNCIO PUBLICITARIO</option>
                                                            <option>LICENCIA DE CESIONARIO</option>
                                                            <option>LICENCIA PARA MERCADO DE ABASTOS, GALERIAS COMERCIALES Y CENTRO COMERCIALES</option>
                                                            <option>CAMBIO DE DENOMINACION O NOMBRE COMERCIAL DE LA PERSONA JURIDICA</option>
                                                            <option>TRANSFERENCIA DE LICENCIA DE FUNCIONAMIENTO</option>
                                                            <option>CESE DE ACTIVIDADES</option>
                                                            <option>OTROS (ESPECIFICAR)</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Fecha Expediente --}} 
                                                        <label for="">FECHA DE EXPEDIENTE</label>                                      
                                                        <x-adminlte-input type="date" name="fechaExped" id="fechaExped" placeholder="Ingrese Fecha" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-calendar text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Apellidos y Nombres --}}
                                                        <label for="">APELLIDOS Y NOMBRES</label>                                       
                                                        <x-adminlte-input type="text" name="apeNombre" id="apeNombre" placeholder="Ingrese apellidos y nombres" label-class="text-lightblue">
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
                                                        {{-- Resolucion --}} 
                                                        <label for="">RESOLUCIÓN</label>                                      
                                                        <x-adminlte-input type="text" name="resolucion" id="resolucion" placeholder="Resolucion" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- RUC --}} 
                                                        <label for="">RUC</label>                                      
                                                        <x-adminlte-input type="number" name="ruc" id="ruc" placeholder="Ingrese RUC" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Telefono --}}
                                                        <label for="">TELÉFONO</label>  
                                                        <x-adminlte-input type="number" name="telefono" id="telefono" placeholder="Ingrese telefono" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-phone-alt text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- DNI --}}
                                                        <label for="">DNI</label>
                                                        <x-adminlte-input type="number" name="dni" id="dni" placeholder="Ingrese DNI" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Representante legal --}}
                                                        <label for="">REPRESENTANTE LEGAL</label>  
                                                        <x-adminlte-input type="text" name="repLegal" id="repLegal" placeholder="Representante Legal" label-class="text-lightblue">
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
                                                        {{-- DNI Rep Legal --}}
                                                        <label for="">DNI - REP. LEG.</label>  
                                                        <x-adminlte-input type="number" name="dniRepLegal" id="dniRepLegal" placeholder="Representante Legal" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>               
                                </x-adminlte-card>


                                <x-adminlte-card title="LOCAL" class="m-2" theme="dark" icon="fas fa-id-card">
                                    <div class="col-12">                    
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Direccion del Establecimiento --}}
                                                        <label for="">DIRECCION DEL ESTABLECIMIENTO</label>  
                                                        <x-adminlte-input type="text" name="dirEstable" id="dirEstable" placeholder="Ingrese dirección" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-map-pin text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- NOMBRE COMERCIAL --}}
                                                        <label for="">NOMBRE COMERCIAL</label>  
                                                        <x-adminlte-input type="text" name="nomComercial" id="nomComercial" placeholder="Ingrese Nombre" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Nº --}}
                                                        <label for="">Nº</label>
                                                        <x-adminlte-input type="number" name="numero" id="numero" placeholder="Ingrese Nº" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- INT --}}
                                                        <label for="">INT</label>
                                                        <x-adminlte-input type="number" name="int" id="int" placeholder="Ingrese int" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- MZ --}}
                                                        <label for="">MZ</label>
                                                        <x-adminlte-input type="text" name="manzana" id="manzana" placeholder="Ingrese Mz." label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- LT. --}}
                                                        <label for="">LT.</label>
                                                        <x-adminlte-input type="number" name="lote" id="lote" placeholder="Ingrese Lote" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- C.SECT. --}}
                                                        <label for="">C.SECT.</label>
                                                        <x-adminlte-input type="text" name="cSect" id="cSect" placeholder="Ingrese cSect" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- SECTOR --}}
                                                        <label for="">SECTOR</label>
                                                        <x-adminlte-select type="text" name="sector" id="sector" placeholder="Ingrese sector" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            @foreach ($sectors as $sector)
                                                            <option>{{ $sector->nombre }}</option>
                                                            @endforeach
                                                        </x-adminlte-select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- ZONA --}}
                                                        <label for="">ZONA</label>
                                                        <x-adminlte-input type="number" name="zona" id="zona" placeholder="Ingrese zona" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- AREA --}}
                                                        <label for="">AREA</label>  
                                                        <x-adminlte-input name="area" id="area" placeholder="Ingrese area" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Giro del Establecimiento --}}
                                                        <label for="">GIRO DEL ESTABLECIMIENTO</label>  
                                                        <x-adminlte-select type="text" name="giroEstable" id="giroEstable" placeholder="Ingrese giro" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            @foreach ($giros as $giro)
                                                            <option>{{ $giro->nombre }}</option>
                                                            @endforeach
                                                        </x-adminlte-select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- NIVEL DE RIESGO --}}
                                                        <label for="">NIVEL DE RIESGO</label>  
                                                        <x-adminlte-select type="text" name="nivelRiesgo" id="nivelRiesgo" placeholder="Ingrese Nivel" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-exclamation-triangle text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <option>--Seleccione--</option>
                                                            <option>Nivel de Riesgo Bajo</option>
                                                            <option>Nivel de Riesgo Medio</option>
                                                            <option>Nivel de Riesgo Alto</option>
                                                            <option>Nivel de Riesgo Muy alto</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- ZONIFICACION --}}
                                                        <label for="">ZONIFICACION</label>  
                                                        <x-adminlte-input type="text" name="zonificacion" id="zonificacion" placeholder="Zonificacion" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- 2 --}}
                                                        <label for="">ESTABLECIMIENTO</label>  
                                                        <x-adminlte-textarea type="text" name="estable" id="estable" placeholder="Ingrese zona" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-map-pin text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-textarea>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- OBSERVACIONES --}}
                                                        <label for="">OBSERVACIONES</label>  
                                                        <x-adminlte-textarea type="text" name="observacion" id="observacion" placeholder="Ingrese observación" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-comment-dots text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-textarea>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- RECIBO DE PAGO --}}
                                                        <label for="">RECIBO DE PAGO</label>  
                                                        <x-adminlte-input name="reciboPago" id="reciboPago" placeholder="Ingrese recibo" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-receipt text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- FECHA PAGO --}}
                                                        <label for="">FECHA DE PAGO</label>  
                                                        <x-adminlte-input type="date" name="fechaPago" id="fechaPago" placeholder="Ingrese fecha" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-calendar text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- IMPORTE --}}
                                                        <label for="">IMPORTE</label>  
                                                        <x-adminlte-select name="importe" id="importe" placeholder="Ingrese importe" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-coins text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <option>-- selecione --</option>
                                                            <option>179.90</option>
                                                            <option>200.90</option>
                                                            <option>345.90</option>
                                                            <option>679.00</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>       
                                    </div>
                                </x-adminlte-card>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" name="btnRegistrar" id="btnRegistrar" type="submit">
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
    

    @section('js')
    <script>
        /* $(function () {
            $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
            });
        }); */
    </script>
    @stop