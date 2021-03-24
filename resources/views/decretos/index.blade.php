@extends('layout')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <h2 class="display-4 mb-3">Leyes, Decretos y Otros</h2>
        </div>
        <table class="table table-striped col-md-8 ml-auto mr-auto mt-3">
            <tbody>
              <tr>
                <td><h5 class="description">Ley N° 1152</h5></td>
                <td class="pull-right">
                    <a class="btn btn-dark" href="/decretos/ley1152" role="button">Ver</a>
                    <a class="btn btn-dark" href="https://sedespotosi.com/decretos/Ley%20N°%201152.pdf" role="button">Descargar</a></td>
              </tr>
              <!-- <tr>
                <td><h5 class="description">Nombre del archivo</h5></td>
                <td class="pull-right">
                    <a class="btn btn-dark" href="#" role="button">Ver</a>
                    <a class="btn btn-dark" href="#" role="button">Descargar</a></td>
              </tr> 
              <tr>
                <td><h5 class="">Nombre del archivo</h5></td>
                <td class="pull-right">
                    <a class="btn btn-dark" href="#" role="button">Ver</a>
                    <a class="btn btn-dark" href="#" role="button">Descargar</a></td>
              </tr> -->
            </tbody>
        </table>
    </div>
</div>
    
@endsection