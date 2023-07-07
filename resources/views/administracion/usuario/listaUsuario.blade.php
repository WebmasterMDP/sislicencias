@extends('adminlte::page')

@section('title', 'Usuario')

@section('content_header')
@stop

@section('content')
<br>
<x-adminlte-card title="USUARIOS" class="m-2" theme="dark" icon="fas fa-id-card">
    <div class="col-12">                                         
        <div class="row">
            <div class="col-12">
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <table id="" class="table table-bordered table-striped dataTable dtr-inline collapsed" aria-describedby="example1">
                                    <thead class="text-center text-nowrap bg-dark ">
                                        <tr>
                                            <th>N°</th>
                                            <th>APELLIDOS</th>
                                            <th>NOMBRES</th>
                                            <th>DOC. NAC. DE IDENTIDAD</th>
                                            <th>CORREO</th>
                                            <th>MODIFICAR</th>
                                            <th>ELIMINAR</th>
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
                                                <form class="formDelete" method="post" action="{{ url('/destroyusuario/'.$users->id) }}">
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-danger" title="Borrar" name="btnBorrar" id="btnBorrar" type="submit">
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

<script>
$('.formDelete').submit(function(e){
    e.preventDefault();

        
    const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success m-2',
        cancelButton: 'btn btn-danger m-2'
    },
    buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
    title: '¿Estas seguro?',
    text: "Se anulará definitavemnte",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Si, anular',
    cancelButtonText: 'No, cancelar',
    reverseButtons: true
    }).then((result) => {
    if (result.isConfirmed) {
        this.submit();
    } else if (
        
        result.dismiss === Swal.DismissReason.cancel
    ) {
        swalWithBootstrapButtons.fire(
        'Cancelado',
        'El usuario sigue activo',
        'error'
        )
    }
    })
})
</script>

@if(session('user') == 'ok')
    <script>
        Swal.fire(
        'Eliminado!',
        'El usuario se elimino.',
        'success'
        )
    </script>
@endif

@if(session('user') == 'update')
    <script>
        Swal.fire(
        'Actualizado!',
        'El usuario se actualizo correctamente.',
        'success'
        )
    </script>
@endif

@if(session('user') == 'fail')
    <script>
        Swal.fire({
            icon: 'error',
            title:'Oops...',
            text: 'Fallo el proceso',
        })  
    </script>
@endif

@stop