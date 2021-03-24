@extends('layout')
@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <h2 class="display-4 mb-3">Resoluciones</h2>
        </div>
        <table class="table table-striped col-md-8 ml-auto mr-auto mt-3">
            <tbody>
              <tr>
                <td><h5 class="description">Resolucion Ministerial Nro132 y Reglamento</h5></td>
                <td class="pull-right">
                    <a class="btn btn-dark" href="/resoluciones/rm132" role="button">Ver</a>
                    <a class="btn btn-dark" href="https://sedespotosi.com/resoluciones/Resolucion%20Ministerial%20Nro132%20y%20Reglamento.pdf" role="button">Descargar</a></td>
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