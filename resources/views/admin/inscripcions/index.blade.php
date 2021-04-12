@extends('admin.layout')

@section('header')
    <h1>
        Inscritos
        <small>listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Incritos</li>
    </ol>
@endsection

@section('content')

    <form class="container" action="{{ route('admin.inscripcions.search') }}">
        <div class="row">
            <div class="col-md-4">
                <p class="display-4">Buscar Usuario</p>
                <input 
                    type="search"
                    name="buscar"
                    class="form-control"
                    placeholder="Buscar usuario"
                    >
            </div>
        </div>
    </form>

    <div class="box-body">
        <table id="inscritos-table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Nombre</th>
                <th>C.I.</th>
                <th>Teléfono</th>
                <th>Domicilio</th>
                <th>Profesión</th>
                <th>Convocatoria</th>
                <th>Cargo al que postula</th>
                <th>Habilitado</th>
            </tr>
            </thead>
            <tbody>
                @foreach($inscripcions as $inscripcion)
                    <tr>
                        <td>{{ $inscripcion->nombre }}</td>
                        <td>{{ $inscripcion->ci }}</td>
                        <td>{{ $inscripcion->telefono }}</td>
                        <td>{{ $inscripcion->domicilio }}</td>
                        <td>{{ $inscripcion->profesion }}</td>
                        <td>{{ $inscripcion->convocatoria }}</td>
                        <td>{{ $inscripcion->cargo }}</td>
                        <td> 
                            <estado-inscripcion></estado-inscripcion>             
                        </td>
                        {{-- <td>
                            <a href="{{ route('admin.leyes.edit', $leye) }}"
                            class="btn btn-info btn-xs"><i class="fa fa-pencil"></i>
                            </a>
                            <form method="POST"
                                action="{{ route('admin.leyes.destroy', $leye) }}"
                                style="display: inline;">
                                {{ csrf_field() }} {{ method_field('DELETE') }}
                                <button class="btn btn-danger btn-xs"
                                    onclick="return confirm('Estas seguro de querer eliminar esta publicación')"><i class="fa fa-times"></i>
                                </button>
                            </form>

                        </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
@endpush

@push('scripts')
<!-- DataTables -->
<script src="/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script>
    $(function () {
        $('#inscritos-table').DataTable({
            'paging'      : true,
            'lengthChange': false,
            'searching'   : false,
            'ordering'    : true,
            'info'        : true,
            'autoWidth'   : false
        })
    })
</script>

@endpush