@extends('admin.layout')

@section('header')
    <h1>
        Pop Up
        <small>crear</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Pop Up</li>
    </ol>
@endsection

@section('content')

    <form method="post" action="{{ route('admin.modals.store') }}" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                        <label for="nombre">Nombre de la imagen</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                               value="{{ old('nombre') }}"
                               placeholder="Ingresa aquí el nombre de la imagen">
                        {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group {{ $errors->has('imagen') ? 'has-error' : '' }}">
                        <label for="imagen">Selecciona una imagen</label>
                        <input type="file" name="imagen" id="imagen" class="form-control"
                               value="{{ old('imagen') }}">
                        {!! $errors->first('imagen', '<span class="help-block">:message</span>') !!}
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Guardar imagen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection