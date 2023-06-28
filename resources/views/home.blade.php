@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

<h1>Tabla de Registros</h1>
@stop

@section('content')
<!-- <p>Welcome to this beautiful admin panel.</p> -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                            <div class="row">
                                <div class="col-sm-12">                        
                                    <section class="content">
                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-lg-3 col-6">
                                                    <div class="small-box bg-info">
                                                        <div class="inner">
                                                            <h3>{{ $countNoImprimidos }}</h3>
                                                            <p>No Imprimidos</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-bag"></i>
                                                        </div>
                                                        <!-- <a href="#modal2" data-toggle="modal" type="button" class="btn btn-block btn-outline-dark btn-lg" > -->
                                                        <a href="#mdNoImprimidos" data-toggle="modal" class="small-box-footer">More info 
                                                            <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-6">
                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>{{ $countDisponibles }}</h3>
                                                            <p>Activos</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-stats-bars"></i>
                                                        </div>
                                                        <a href="#mdDisponibles" data-toggle="modal" class="small-box-footer">More info <i
                                                                class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>
                                                
                                                <div class="col-lg-3 col-6">

                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>{{ $countImprimidos }}</h3>
                                                            <p>Imprimidos</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-person-add"></i>
                                                        </div>
                                                        <a href="#mdImprimidos" data-toggle="modal" class="small-box-footer">More info <i
                                                                class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>

                                                <!-- {!! QrCode::size(250)->generate('www.google.com'); !!} -->

                                                <div class="col-lg-3 col-6">

                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>{{ $countAnulados }}</h3>
                                                            <p>Anulados</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-pie-graph"></i>
                                                        </div>
                                                        <a href="#mdAnulados" data-toggle="modal" class="small-box-footer">More info 
                                                            <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade show" id="mdNoImprimidos" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead class="text-center text-nowrap bg-info ">
                            <tr>
                                <th>ID</th>
                                <th>Codigo Licencia</th>
                                <th>Periodo</th>
                                <th>Asunto</th>
                                <th>Apellidos y Nombres</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($noImprimidos as $noImprimido)
                            <tr>
                                <td>{{ $noImprimido->id }}</td>
                                <td>{{ $noImprimido->codLicencia }}</td>
                                <td>{{ $noImprimido->periodo }}</td>
                                <td>{{ $noImprimido->asunto }}</td>
                                <td>{{ $noImprimido->apeNombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="mdDisponibles" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead class="text-center text-nowrap bg-info ">
                            <tr>
                                <th>Codigo Licencia</th>
                                <th>Periodo</th>
                                <th>Asunto</th>
                                <th>Apellidos y Nombres</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($disponibles as $disponible)
                            <tr>
                                <td>{{ $disponible->codLicencia }}</td>
                                <td>{{ $disponible->periodo }}</td>
                                <td>{{ $disponible->asunto }}</td>
                                <td>{{ $disponible->apeNombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="mdImprimidos" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead class="text-center text-nowrap bg-info ">
                            <tr>
                                <th>Codigo Licencia</th>
                                <th>Periodo</th>
                                <th>Asunto</th>
                                <th>Apellidos y Nombres</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($imprimidos as $imprimido)
                            <tr>
                                <td>{{ $imprimido->codLicencia }}</td>
                                <td>{{ $imprimido->periodo }}</td>
                                <td>{{ $imprimido->asunto }}</td>
                                <td>{{ $imprimido->apeNombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade show" id="mdAnulados" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Large Modal</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                        <thead class="text-center text-nowrap bg-info ">
                            <tr>
                                <th>Codigo Licencia</th>
                                <th>Periodo</th>
                                <th>Asunto</th>
                                <th>Apellidos y Nombres</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($anulados as $anulado)
                            <tr>
                                <td>{{ $anulado->codLicencia }}</td>
                                <td>{{ $anulado->periodo }}</td>
                                <td>{{ $anulado->asunto }}</td>
                                <td>{{ $anulado->apeNombre }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>

<script>
    table = $('#example').DataTable( {
    retrieve: true,
    paging: true
    } );
</script>

<script>
    table = $('#example3').DataTable( {
    retrieve: true,
    paging: true
    } );
</script>

<script>
    table = $('#example4').DataTable( {
    retrieve: true,
    paging: true
    } );
</script>
@stop