@extends('admin.layout')

@section('header')
    <h1>
        Pop up
        <small>editar</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Pop up</li>
    </ol>
@endsection

@section('content')
    <form method="post" action="{{ route('admin.modals.update', $modal) }}" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }} {{ method_field('PUT') }}
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                        <label for="nombre">Nombre la imagen</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                               value="{{ old('nombre', $modal->nombre) }}"
                               placeholder="Ingresa aqui el nombre de la ley, decreto y otros">
                        {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}

                    </div>

                    <div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
                        <label for="imagen">Imagen actual</label> <br>
                        <img src="{{ '/storage/'.$modal->ruta }}" width="200">
                    </div>

                    <div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
                        <label for="imagen">Seleciona una imagen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control">
                        {!! $errors->first('imagen', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Actualizar Imagen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection