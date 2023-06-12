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
                                                            <h3>150</h3>
                                                            <p>New Orders</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-bag"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">More info 
                                                            <i class="fas fa-arrow-circle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-6">

                                                    <div class="small-box bg-success">
                                                        <div class="inner">
                                                            <h3>53<sup style="font-size: 20px">%</sup></h3>
                                                            <p>Bounce Rate</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-stats-bars"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">More info <i
                                                                class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-6">

                                                    <div class="small-box bg-warning">
                                                        <div class="inner">
                                                            <h3>44</h3>
                                                            <p>User Registrations</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-person-add"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">More info <i
                                                                class="fas fa-arrow-circle-right"></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-lg-3 col-6">

                                                    <div class="small-box bg-danger">
                                                        <div class="inner">
                                                            <h3>65</h3>
                                                            <p>Unique Visitors</p>
                                                        </div>
                                                        <div class="icon">
                                                            <i class="ion ion-pie-graph"></i>
                                                        </div>
                                                        <a href="#" class="small-box-footer">More info 
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
</section>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>

<script>
    $(function () {
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
    });
</script>
@stop