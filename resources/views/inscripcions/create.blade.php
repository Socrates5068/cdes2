@extends('layout')

@section('scripts')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">

<script language="JavaScript">
    function pregunta(){
        if (confirm('¿Está seguro de que los datos son correctos?')){
           document.inscritos.submit()
        }
    }
</script>
@endsection

@section('denuncias')
    @if(session()->has('flash'))   
        <div class="alert alert-success">{{ session('flash') }}</div>
    @endif
    <div class="container">
        <div class="py-5 text-center">
            <p class="h2">FORMULARIO DE INSCRIPCIÓN
            </p>
        </div>

        <div class="py-1">
            <form name="inscritos" method="POST" action="{{ route('inscripcions.store')}}" enctype="multipart/form-data" novalidate>
                @csrf
                
                <div>
                    <p class="h3">Datos del postulante</p>
                </div>
                <div class="form-group">
                    <div class="container">
                        <div class="row">
                            <div class="col"><strong>Nombre Completo</strong>
                                <input type="text" id="nombre" 
                                class="form-control @error('nombre') isinvalid @enderror" 
                                placeholder="ej. Juan Perez" name="nombre" value="{{ old('nombre') }}">

                                @error('nombre')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col"><strong>C.I.</strong>
                                <input type="text" class="form-control @error('ci') isinvalid @enderror" 
                                id="ci" 
                                placeholder="ej. 8547963" name="ci" value="{{ old('ci') }}">

                                @error('ci')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="w-100"></div>
                            <div class="col"><strong>Domicilio</strong>
                                <input type="text" class="form-control @error('domicilio') isinvalid @enderror" 
                                id="domicilio" 
                                placeholder="ej. Calle o Av. Nro. XX" name="domicilio" value="{{ old('domicilio') }}">

                                @error('domicilio')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col"><strong>Teléfono</strong>
                                <input type="text" class="form-control @error('telefono') isinvalid @enderror" 
                                id="telefono" name="telefono" 
                                placeholder="ej. 778899XX" value="{{ old('telefono') }}">

                                @error('telefono')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    
                    <div class="container">
                        <strong><label for="profesion">Profesión u Ocupación</label></strong>
                        <input class="form-control @error('profesion') is-invalid @enderror" 
                        id="profesion" rows="5" 
                        type="text"
                        name="profesion"
                        value="{{ old('profesion') }}"
                        placeholder="ej. Médico, Enfermera, Técnico, etc.">
    
                        @error('profesion')
                        <span class="invalid-feedback d-block" role="alert">
                            <strong>{{$message}}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <strong><label for="convocatoria">Convocatoria</label></strong>
                                <select class="form-select form-select-md mb-3 @error('convocatoria') is-invalid @enderror" aria-label=".form-select-lg example" 
                                    name="convocatoria" id="">
                                    <option value="">Selecciona tipo de convocatoria</option>
                                    <option value="1">Value 1</option>
                                    <option value="3">Value 2</option>
                                    <option value="2">Value 3</option>
                                </select>

                                @error('convocatoria')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col">
                                <strong><label for="cargo">Cargo al que postula</label></strong>
                                <select class="form-select form-select-md mb-3 @error('cargo') is-invalid @enderror" aria-label=".form-select-lg example" 
                                    name="cargo" id="">
                                    <option value="">Seleccionar el cargo al que postula</option>
                                    <option value="1">Value 1</option>
                                    <option value="3">Value 2</option>
                                    <option value="2">Value 3</option>
                                </select>

                                @error('cargo')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{$message}}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>          
                </div>

                <div class="form-group">
                    <input type=button onclick="pregunta()" value="Enviar" class="btn btn-secondary btn-lg btn-block" />
                    {{-- <button type="submit" onclick="pregunta()" class="btn btn-secondary btn-lg btn-block">Enviar</button> --}}
                </div>
            </form>
        </div>
        
    </div>
@endsection
