@extends('layout')

@section('content')
<div class="mt-3">
    <div class="row">
        <div class="col-md-10 ml-auto mr-auto">
            <h2 class="display-4 mb-3">Resoluciones</h2>
        </div>
        <table class="table table-striped col-md-11 ml-auto mr-auto mt-3">
            <tbody>
                @foreach($leyes as $leye)
                    @if($leye->categoria == 'resoluciones')
                        <tr>
                            <td><h6 class="description">{{$leye->nombre}}</h6></td>
                            <td class="pull-right">
                                <a class="btn btn-dark" href="{{ route('leyes.show', $leye) }}" role="button">Ver</a>
                                <a class="btn btn-dark" href="{{ '/leyes/'.$leye->ruta}}" role="button">Descargar</a>
                            </td>
                        </tr>
                    @endif    
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('styles')
    <link href="/css/normalize.css" rel="stylesheet">
    <link href="/css/framework.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/responsive.css" rel="stylesheet">
    <link href="/css/lightbox.min.css" rel="stylesheet">

@endpush

@push('scripts')
    {{--<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>--}}
    <script src="/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>
@endpush