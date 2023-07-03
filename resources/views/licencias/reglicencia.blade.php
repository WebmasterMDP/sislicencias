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
                                                        <x-adminlte-select type="text" name="vigencia" id="vigencia" required placeholder="Vigencia" label-class="text-lightblue">
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
                                                        <x-adminlte-select type="text" name="natJurid" id="natJurid" required placeholder="Natural / Juridica" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="text" name="expediente" id="expediente"  placeholder="Expediente" label-class="text-lightblue">
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
                                                        <x-adminlte-select type="text" name="asunto" id="asunto" required placeholder="Asunto" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="date" name="fechaExped" id="fechaExped" required placeholder="Ingrese Fecha" label-class="text-lightblue">
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
                                                        <label for="">APELLIDOS Y NOMBRES / RAZON SOCIAL</label>                                       
                                                        <x-adminlte-input type="text" name="apeNombre" id="apeNombre" required placeholder="Ingrese apellidos y nombres" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="text" name="resolucion" id="resolucion" required placeholder="Resolucion" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="number" name="ruc" id="ruc" required placeholder="Ingrese RUC" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="appendSlot">
                                                                {{-- <div class="input-group-text">
                                                                    <i class="fas fa-search text-dark"></i>
                                                                </div> --}}
                                                                <a href="#" data-href="" class="btn btn-dark" id="getSunatDatos" required name="getSunatDatos" data-target="#getSunatDatos" data-placement="top" title="Cargar Registro">
                                                                    <span class="fas fa-sync"></span>
                                                                </a>
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
                                                        <x-adminlte-input type="number" name="telefono" id="telefono" required placeholder="Ingrese telefono" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="number" name="dni" id="dni" required placeholder="Ingrese DNI" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="text" name="repLegal" id="repLegal" required placeholder="Representante Legal" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="number" name="dniRepLegal" id="dniRepLegal" required placeholder="Representante Legal" label-class="text-lightblue">
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


                                <x-adminlte-card title="LOCAL" class="" theme="dark" icon="fas fa-id-card">
                                    <div class="col-12">                    
                                        <div class="row ">
                                            <div class="col-md-6">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- Direccion del Establecimiento --}}
                                                        <label for="">DIRECCION DEL ESTABLECIMIENTO</label>  
                                                        <x-adminlte-input type="text" name="dirEstable" id="dirEstable" required placeholder="Ingrese dirección" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="text" name="nomComercial" id="nomComercial" required placeholder="Ingrese Nombre" label-class="text-lightblue">
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
                                                        {{-- Nº --}}
                                                        <label for="">Nº</label>
                                                        <x-adminlte-input type="number" name="numero" id="numero" required placeholder="Ingrese Nº" label-class="text-lightblue">
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
                                                        {{-- INT --}}
                                                        <label for="">INT</label>
                                                        <x-adminlte-input type="number" name="int" id="int" required placeholder="Ingrese int" label-class="text-lightblue">
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
                                                        {{-- MZ --}}
                                                        <label for="">MZ</label>
                                                        <x-adminlte-input type="text" name="manzana" id="manzana" required placeholder="Ingrese Mz." label-class="text-lightblue">
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
                                                        {{-- LT. --}}
                                                        <label for="">LT.</label>
                                                        <x-adminlte-input type="number" name="lote" id="lote" required placeholder="Ingrese Lote" label-class="text-lightblue">
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
                                                        {{-- C.SECT. --}}
                                                        <label for="">C.SECT.</label>
                                                        <x-adminlte-input type="text" name="cSect" id="cSect" required placeholder="Ingrese cSect" label-class="text-lightblue">
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
                                                        {{-- SECTOR --}}
                                                        <label for="">SECTOR</label>
                                                        <x-adminlte-select type="text" name="sector" id="sector" required placeholder="Ingrese sector" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            @foreach ($sectors as $sector)
                                                            <option>{{ $sector->codSector }}</option>
                                                            @endforeach
                                                        </x-adminlte-select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- ZONA --}}
                                                        <label for="">ZONA</label>
                                                        <x-adminlte-input type="number" name="zona" id="zona" required placeholder="Ingrese zona" label-class="text-lightblue">
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
                                                        {{-- AREA --}}
                                                        <label for="">AREA</label>  
                                                        <x-adminlte-input name="area" id="area" required placeholder="Ingrese area" label-class="text-lightblue">
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
                                                        {{-- NIVEL DE RIESGO --}}
                                                        <label for="">NIVEL DE RIESGO</label>  
                                                        <x-adminlte-select type="text" name="nivelRiesgo" id="nivelRiesgo" required onchange='cambioOpciones();' placeholder="Ingrese Nivel" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-exclamation-triangle text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                                <option value="-- seleccione --">--  seleccione --</option>
                                                                <option value="NIVEL DE RIEGO BAJO">NIVEL DE RIEGO BAJO</option>
                                                                <option value="NIVEL DE RIEGO MEDIO">NIVEL DE RIEGO MEDIO</option>
                                                                <option value="NIVEL DE RIEGO ALTO">NIVEL DE RIEGO ALTO</option>
                                                                <option value="NIVEL DE RIEGO MUY ALTO">NIVEL DE RIEGO MUY ALTO</option>
                                                        </x-adminlte-select>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- ZONIFICACION --}}
                                                        <label for="">ZONIFICACION</label>  
                                                        <x-adminlte-input type="text" name="zonificacion" id="zonificacion" required placeholder="Zonificacion" label-class="text-lightblue">
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
                                                        {{-- Giro del Establecimiento --}}
                                                        <label for="">GIRO DEL ESTABLECIMIENTO</label>  
                                                        <x-adminlte-select type="text" name="giroEstable" id="giroEstable" required placeholder="Ingrese giro" label-class="text-lightblue">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-id-card text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            {{-- <option>--Seleccione--</option> --}}
                                                            @foreach ($giros as $giro)                                                            
                                                            <option>{{ $giro->nombre }}</option>
                                                            @endforeach
                                                        </x-adminlte-select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        {{-- 2 --}}
                                                        <label for="">ESTABLECIMIENTO</label>                                                          
                                                        <x-adminlte-textarea type="text" name="estable" id="estable" required  placeholder="Ingrese zona" label-class="text-lightblue" readonly="readonly">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-map-pin text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                            <x-slot name="appendSlot">
                                                                <x-adminlte-button label="Limpiar" id="clear" name="clear" icon="fas fa-lg fa-ban text-danger"/>
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
                                                        <x-adminlte-textarea type="text" name="observacion" id="observacion" required placeholder="Ingrese observación" label-class="text-lightblue">
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
                                                        <x-adminlte-input name="reciboPago" id="reciboPago" required placeholder="Ingrese recibo" label-class="text-lightblue">
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
                                                        <x-adminlte-input type="date" name="fechaPago" id="fechaPago" required placeholder="Ingrese fecha" label-class="text-lightblue">
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
                                                        <x-adminlte-input name="importe" id="importe" required placeholder="Ingrese importe" label-class="text-lightblue" readonly="readonly">
                                                            <x-slot name="prependSlot">
                                                                <div class="input-group-text">
                                                                    <i class="fas fa-coins text-dark"></i>
                                                                </div>
                                                            </x-slot>
                                                        </x-adminlte-input>  
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="estado" name="estado" value="1">
                                            <input type="hidden" id="print" name="print" value="0">
                                        </div>       
                                    </div>
                                </x-adminlte-card>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <button class="btn btn-primary" name="btnRegistrar" id="btnRegistrar" type="submit">
                                        <i class="fas fa-check-double"></i>
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
        var nriesgo = {
        //solución, material y tiempo
        "-- seleccione --": ["-- seleccione nivel de riesgo --"],
        "NIVEL DE RIEGO BAJO": ["179.90"],
        "NIVEL DE RIEGO MEDIO": ["200.90"],
        "NIVEL DE RIEGO ALTO": ["345.90"],
        "NIVEL DE RIEGO MUY ALTO": ["679.00"]
        }

        function cambioOpciones(){

        var combo = document.getElementById('nivelRiesgo');
        var opcion = combo.value;
        
        document.getElementById('importe').value = nriesgo[opcion][0];

        }
    </script>
    <script>
        /* $(document).ready(function( */
            /* document.getElementById("estable").disabled = true; */            
            
            $("#giroEstable").on("change", function(){
                var giroEstable = $(this).val();
                var estable = $("#estable").val();
                
                if (estable == ""){
                    // $("#estable").val(giroEstable).appendTo($("#estable"));
                    // $("#estable").prepend(giroEstable);
                    $("#estable").val(giroEstable);
                }else {
                    document.getElementById("estable").value = estable +' - '+ giroEstable;
                    
                }
            });

            $("#clear").on('click', function(){
               
                /* $("#estable").empty(); */
                $("#estable").val(''); 
                $("#giroEstable").val('<?php echo $giro->nombre; ?>').first();            
            });

            $("#getSunatDatos").on("click", function(){
                var ruc = $("#ruc").val();
                var url = "{{ route('getSunatDatos', ':ruc') }}";                
                url = url.replace(':ruc', ruc);
               
                $.ajax({
                    type: "GET",
                    url: url,
                    dataType: "json",
                    success: function (response) {
                        // console.log(response.list.multiRef['cod_dep']['@nil']);

                        var datosNull = response.list.multiRef['cod_dep']['@nil'];

                        if (datosNull) {
                           alert('Datos no encontrados');
                            /* Swal.fire({
                                icon: 'success',
                                title: 'Datos encontrados!',
                                text: 'RUC encontrado!',
                                footer: '<a href>Why do I have this issue?</a>'
                            }) */
                            
                        }else{
                            alert('Datos Encontrados');
                            responseDatosSunat = response.list.multiRef;

                            console.log(responseDatosSunat);
                            console.log(responseDatosSunat["ddp_nombre"]["$"]);

                            $("#repLegal").val(responseDatosSunat["ddp_nombre"]["$"]);
                            /* Swal.fire({
                                icon: 'error',
                                title: 'Oops...',
                                text: 'RUC no encontrado!',
                                footer: '<a href>Why do I have this issue?</a>'
                            })
                            $("#ruc").val('');
                            $("#razonSocial").val('');
                            $("#direccion").val('');
                            $("#estado").val('');
                            $("#estable").val('');
                            $("#giroEstable").val('');
                            $("#repLegal").val(''); */
                            return false;
                        }

                        /* console.log(response.list.multiRef); */
                        
                           
                        /* $("#razonSocial").val(element.razonSocial);
                        $("#direccion").val(element.direccion);
                        $("#estado").val(element.estado);
                        $("#estable").val(element.estable);
                        $("#giroEstable").val(element.giroEstable); */
                        
                       
                    }
                });
            });
    </script>
    @stop