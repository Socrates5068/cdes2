@extends('layout')

@section('content')
    <div class="col-12">
        <div class="center-block">
            <iframe style="center" width="1300" height="800" src="{{ '/storage/'.$leye->ruta }}" frameborder="0"></iframe>
            {{-- <iframe style="center" width="1300" height="800" src="https://docs.google.com/viewer?url=https://sedespotosi.com/PDF/requisitos_sssro.pdf&embedded=true"  frameborder="0"></iframe> --}}
        </div>
    </div>
@endsection

@push('styles')
<link href="/css/normalize.css" rel="stylesheet">
<link href="/css/framework.css" rel="stylesheet">
<link href="/css/style.css" rel="stylesheet">
<link href="/css/responsive.css" rel="stylesheet">
{{--<link href="/css/lightbox.min.css" rel="stylesheet">--}}

@endpush

@push('scripts')
    {{--<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>--}}
    {{--<script src="/js/lightbox-plus-jquery.min.js" type="text/javascript"></script>--}}
@endpush