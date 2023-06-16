@extends('adminlte::page')

@section('title', 'Dashboard')

<!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> -->

{{-- <!-- <link rel="stylesheet" href="http://localhost/plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="http://localhost/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="http://localhost/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.min.css?v=3.2.0"> --> --}}

<!-- <style>
    table.dataTable thead tr {
        background-color: #73AEF9;
}
</style> -->

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
                                    <thead class="text-center text-nowrap bg-dark">
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
                                        @foreach ($showRegistros as $showRegistro)
                                        <tr>
                                            <td>{{ $showRegistro->id }}</td>
                                            <td>{{ $showRegistro->codLicencia }}</td>
                                            <td>{{ $showRegistro->periodo }}</td>
                                            <td>{{ $showRegistro->vigencia }}</td>
                                            <td>{{ $showRegistro->natJurid }}</td>
                                            <td>{{ $showRegistro->asunto }}</td>
                                            <td>{{ $showRegistro->expediente }}</td>
                                            <td>{{ $showRegistro->fechaExped }}</td>
                                            <td>{{ $showRegistro->resolucion }}</td>
                                            <td>{{ $showRegistro->apeNombre }}</td>
                                            <td>{{ $showRegistro->ruc }}</td>
                                            <td>{{ $showRegistro->telefono }}</td>
                                            <td>{{ $showRegistro->dni }}</td>
                                            <td>{{ $showRegistro->repLegal }}</td>
                                            <td>{{ $showRegistro->dniRepLegal }}</td>
                                            <td>{{ $showRegistro->dirEstable }}</td>
                                            <td>{{ $showRegistro->numero }}</td>
                                            <td>{{ $showRegistro->int }}</td>
                                            <td>{{ $showRegistro->manzana }}</td>
                                            <td>{{ $showRegistro->lote }}</td>
                                            <td>{{ $showRegistro->cSect }}</td>
                                            <td>{{ $showRegistro->sector }}</td>
                                            <td>{{ $showRegistro->zona }}</td>
                                            <td>{{ $showRegistro->giroEstable }}</td>
                                            <td>{{ $showRegistro->estable }}</td>
                                            <td>{{ $showRegistro->nivelRiesgo }}</td>
                                            <td>{{ $showRegistro->area }}</td>
                                            <td>{{ $showRegistro->observacion }}</td>
                                            <td>{{ $showRegistro->zonificacion }}</td>
                                            <td>{{ $showRegistro->nomComercial }}</td>
                                            <td>{{ $showRegistro->reciboPago }}</td>
                                            <td>{{ $showRegistro->fechaPago }}</td>
                                            <td>{{ $showRegistro->importe }}</td>
                                            @if ($showRegistro->estado == 1)
                                            <td><span class="badge bg-success">Activo</span></td>
                                            @else
                                            <td><span class="badge bg-danger">Anulado</span></td>
                                            @endif
                                            <td> <br>
                                                @if ($showRegistro->print == 1 || $showRegistro->estado != 1) 
                                                    {{-- <a href="{{ url('licencias/'.$showRegistro->id) }}" class="btn btn-info" data-toggle="tooltip"  data-placement="top" title="Imprimir">
                                                        <span class="fas fa-print"></span>
                                                    </a> --}}  
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
                                                    <a href="" data-href="{{ url('licencias/fpdf/'.$showRegistro->id) }}[path_file]#toolbar=0" class="btn btn-info btn-print" data-id="{{ $showRegistro->id }}" data-toggle="modal" data-target="#modalLicencia" data-placement="top"  title="Imprimir">
                                                        <span class="fas fa-print"></span>
                                                    </a>
                                                    <a href="" class="btn btn-warning" data-toggle="tooltip" data-placement="top" title="Modificar registro">
                                                        <span class='fas fa-edit'></span>
                                                    </a>                                                                                                
                                                    {{-- @if (/* Route::has('licencias') */$showRegistro->estado == 1) --}}                                                
                                                    <a href="#" data-href="{{ url('licencias/'.$showRegistro->id) }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" data-placement="top" title="Anular registro">
                                                        <span class="fas fa-ban"></span>
                                                    </a>                                                   
                                                @endif
                                                 
                                                                                                
                                                {{-- @endif --}}

                                                {{-- @if ($showRegistro->estado == 1)
                                                <a href="#" data-href="{{ route('licencias.destroy') }}" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" data-placement="top" title="Anular registro">
                                                    <span class="fas fa-ban"></span>
                                                </a>
                                                @else
                                                <a href="#" data-href="{{ route('licencias.destroy') }}" class="btn btn-success" data-toggle="modal" data-target="#confirm-delete" data-placement="top" title="Activar registro">
                                                    <span class="fas fa-check"></span>
                                                </a>
                                                @endif --}}                                                                                                
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

    <!-- Modal -->
    <div class="modal" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Anular Licencia</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Desea anular este registro?</p>
                </div>
                <div class="modal-footer">
                    {{-- <a class="btn btn-light" data-dismiss="modal">Cancelar</a> --}}
                    <a class="btn btn-light" data-dismiss="modal">No</a>
                    <form id="anulaRegistro" name="anulaRegistro"  action="#" method="POST" >   
                        @csrf
                        @method('DELETE') 
                            {{-- <button type="submit" class="btn btn-danger">Si</button> --}}                        
                        <a class="btn btn-danger btn-ok">Si</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <x-adminlte-modal id="modalLicencia" title="Vista Previa de Licencia" size="lg" theme="dark"
    icon="fas fa-eye">
    <div class="modal-body">
        <iframe id="frameLicencia" src="" width="100%" height="700px"></iframe>
    </div>
    
    {{-- <img class="img-fluid" src="" alt=""> --}}
    {{-- <x-slot name="footerSlot">
        <x-adminlte-button class="mr-auto" theme="success" label="Accept"/>
        <x-adminlte-button theme="danger" label="Dismiss" data-dismiss="modal"/>
    </x-slot> --}}
    </x-adminlte-modal>

    
</x-adminlte-card>

@stop

@section('css')
    {{-- <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css"> --}}
@stop

@section('js')
<script>
        
    $('#confirm-delete').on('show.bs.modal', function(e) {
        anulaRegistro.setAttribute('action', $(e.relatedTarget).data('href'));        
           
        $('.btn-ok').on('click', function(e) {
            anulaRegistro.submit();            
        });

       

        // if(confirm == true){
        //     e.preventDefault();
        //     document.getElementById('anulaRegistro').submit();
        //    /*  window.location.href = $(e.relatedTarget).data('href'); */
        // }
        /* $(this).find('#anulaRegistro').attr('href', $(e.relatedTarget).data('href')); */
        // document.getElementById('anulaRegistro').submit()
        /* $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>'); */
    });
   
    $('#confirm-delete').on('hide.bs.modal', function(e) {
        anulaRegistro.setAttribute('action', '');
    });

    $('#modalLicencia').on('show.bs.modal', function(e) {
        $('#frameLicencia').attr('src', $(e.relatedTarget).data('href'));      
        var id = $(e.relatedTarget).data('id');
        
        /* $('.btn btn-info btn-print').attr('disabled', false); */
        console.log(id);

        $.ajax({
            type: "GET",
            url: "{{ url('licencias/print')}}"+"/"+id,
            data: {
                /* "_token": "{{ csrf_token() }}", */
                /* "id": "{{ $showRegistro->id }}", */
                /* "print": "1" */
            },
            success: function(response) {
                
               
                if(response == "ok"){
                    /* window.frames["frameLicencia"].focus(); */
                    
                }else{
                    $('.btn btn-info btn-print').attr('disabled', true);
                }
            }
        });
            /* $('#frameLicencia').attr('src', 'http://localhost/siscertificado/public/licencias/fpdf/1'); */
        
       
           /*  $('#frameLicencia').attr('src', $(e.relatedTarget).data('href')); */
            /* $('#frameLicencia').get(0).contentWindow.print(); abre el print directamente*/
       

    });
    $('#modalLicencia').on('hide.bs.modal', function(e) {
        $('#frameLicencia').attr('src', '');
       
        window.location.href = "{{ url('licencias/show')}}";
    });
</script>
@stop