@extends('admin.layout')

@section('header')
    <h1>
        Leyes, Decretos y Otros
        <small>listado</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Leyes</li>
    </ol>
@endsection

@section('content')
    <div class="box-body">
        <table id="posts-table" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($leyes as $leye)
                    <tr>
                        <td>{{ $leye->id }}</td>
                        <td>{{ $leye->nombre }}</td>
                        <td>{{ $leye->categoria }}</td>
                        <td>
                            <a href="{{ route('leyes.show', $leye) }}"
                            target="_blank"
                            class="btn btn-default btn-xs"><i class="fa fa-eye"></i>
                            </a>
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

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection