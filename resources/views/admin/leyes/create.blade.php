@extends('admin.layout')

@section('header')
    <h1>
        Leyes, Decretos y Otros
        <small>crear</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Leyes</li>
    </ol>
@endsection

@section('content')

    <form method="post" action="{{ route('admin.leyes.store') }}" enctype="multipart/form-data" novalidate>
        {{ csrf_field() }}
        <div class="col-md-10">
            <div class="box box-primary">
                <div class="box-body">
                    <div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
                        <label for="nombre">Nombre del pdf</label>
                        <input type="text" name="nombre" id="nombre" class="form-control"
                               value="{{ old('nombre') }}"
                               placeholder="Ingresa aqui el nombre de la ley, decreto y otros">
                        {!! $errors->first('nombre', '<span class="help-block">:message</span>') !!}

                    </div>

                    <div class="form-group {{ $errors->has('categoria') ? 'has-error' : '' }}">
                        <label for="categoria">Seleciona una categoria</label>
                        {{-- <input type="text" name="categoria" id="categoria" class="form-control"
                               value="{{ old('categoria') }}"
                               placeholder="Ingresa aqui el nombre de la ley, decreto y otros"> --}}
                               <br>
                        <select name="categoria" id="categoria">
                            <option value="leyes">Leyes, decretos y Otros</option>
                            <option value="resoluciones">Resoluciones</option>
                        </select>
                        {!! $errors->first('categoria', '<span class="help-block">:message</span>') !!}

                    </div>

                    <div class="form-group {{ $errors->has('pdf') ? 'has-error' : '' }}">
                        <label for="pdf">Seleciona un archivo PDF</label>
                        <input type="file" name="pdf" id="pdf" class="form-control"
                               value="{{ old('pdf') }}">
                        {!! $errors->first('pdf', '<span class="help-block">:message</span>') !!}

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Guardar PDF
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>

@endsection