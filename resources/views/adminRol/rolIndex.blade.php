@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    

@stop

@section('content')
<br>
<x-adminlte-card title="LISTA DE USUARIOS" class="m-4" theme="dark" icon="fas fa-id-card">
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">                        
                                <section class="content">
                                    <div class="container-fluid">
                                        <br>
                                        <div class="row" style="text-align:center">
                                            
                                            <div class="col-md-6 px-5" style="text-align:center">
                                                <a style="text-align: center; vertical-align: middle;" data-toggle="modal" type="button" class="btn btn-block btn-outline-dark btn-lg" href="#modal2">
                                                    <span class="badge bg-purple"></span>
                                                    <i class="fas fa-user-secret fa-5x"></i> Administradores
                                                </a>
                                                <!-- <button type="button" toggle="modal2" style="width: 300px; height: 300px;" class="btn btn-block btn-outline-success btn-lg">
                                                    <span class="badge bg-purple"></span>
                                                    <i class="fas fa-user-secret fa-8x"></i> Administradores
                                                </button> -->
                                            </div>
                                            <div class="col-md-6 px-5">
                                                <a style=" text-align: center; vertical-align: middle;" data-toggle="modal" type="button" class="btn btn-block btn-outline-secondary btn-lg" href="#modal1">
                                                    <span class="badge bg-purple"></span>
                                                    <i class="fas fa-users fa-5x"></i> Usuarios Inciales
                                                </a>
                                            </div>

                                            <div class="col-md-12 p-5">
                                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                                                    <thead class="text-center text-nowrap bg-info ">
                                                        <tr>
                                                            <th>NOMBRES</th>
                                                            <th>CORREO</th>
                                                            <th>ASIGNAR ROL</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($alls as $all)
                                                        <tr>
                                                            <td>{{ $all->name }}</td>
                                                            <td>{{ $all->email }}</td>
                                                            <td class="text-center">
                                                                <form action="{{ url('/rolEdit/'.$all->id) }}">
                                                                    <button class="btn btn-warning" title="Editar" name="btnEdit" id="btnEdit" type="submit">
                                                                    <i class="fas fa-edit"></i>
                                                                    </button>
                                                                </form>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </section>
</x-adminlte-card>

<!-- <a href="#victorModal" role="button" class="btn btn-large btn-primary" data-toggle="modal">Abrir ventana modal</a> -->
  
<!-- Modal / Ventana / Overlay en HTML -->
<div id="modal1" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de usuarios básicos</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                    <thead class="text-center text-nowrap bg-info ">
                        <tr>
                            <th>NOMBRES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

<div id="modal2" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Lista de administradores</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1_info">
                    <thead class="text-center text-nowrap bg-info ">
                        <tr>
                            <th>NOMBRES</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admins as $admin)
                        <tr>
                            <td>{{ $admin->name }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-danger">Eliminar</button>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

    <script>
        document.getElementById("btn").addEventListener("click", function() {
            document.getElementById("victorModal").style.display="show";
        });
    </script>
@stop