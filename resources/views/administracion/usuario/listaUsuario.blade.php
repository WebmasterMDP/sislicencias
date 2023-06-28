@extends('adminlte::page')

@section('title', 'Dashboard')

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
                                <table id="example2" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1">
                                    <thead class="text-center text-nowrap bg-info ">
                                        <tr>
                                            <th>N°</th>
                                            <th>APELLIDOS</th>
                                            <th>NOMBRES</th>
                                            <th>DOC. NAC. DE IDENTIDAD</th>
                                            <th>CORREO</th>
                                            <th>ACCIONES</th>
                                            <th>ACCIONES</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($user as $users)
                                        <tr>
                                            <td>{{ $users->id }}</td>
                                            <td>{{ $users->lastname }}</td>
                                            <td>{{ $users->name }}</td>
                                            <td>{{ $users->numDocument }}</td>
                                            <td>{{ $users->email }}</td>
                                            <td class="text-center">
                                                <form action="{{ url('/editusuario/'.$users->id) }}">
                                                    <button class="btn btn-warning" title="Editar" name="btnEdit" id="btnEdit" type="submit">
                                                    <i class="fas fa-edit"></i>
                                                    </button>
                                                </form>
                                            </td>
                                            <td class="text-center">
                                                <form method="post" action="{{ url('/destroyusuario/'.$users->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" title="Borrar" name="btnBorrar" id="btnBorrar" onclick="return confirm('¿Estas seguro que quieres borrar?')" type="submit">
                                                    <i class="fas fa-trash"></i>
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
                </div>
            </div>
        </div>
    </div>
</x-adminlte-card>

@stop

@section('css')
    <link rel="stylesheet" href="http://localhost/siscertificado/vendor/almasaeed2010/adminlte/dist/css/adminlte.css">
@stop

@section('js')
@stop