@extends('layout')
@section('meta-title', "Noticias")
@section('meta-description', "Sector donde se publicaran todas las noticias del SEDES POTOSÍ")
@section('noticia')

    <div id="blog" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    @foreach($posts as $pos)
                        <div class="blog-post">
                            @if($pos->photos->count() === 1)
                            <a href="noticia/{{ $pos->url }}" class="post-img">
                                <img class="img-fluid" src="{{ url($pos->photos->first()->url) }}" alt="">
                            </a>
                            @elseif($pos->photos->count() > 1)
                                <a href="noticia/{{ $pos->url }}" class="post-img">
                                    <img class="img-fluid" src="{{ url($pos->photos->first()->url) }}" alt="">
                                </a>
                            @elseif($pos->iframe)
                                <div class="embed-responsive embed-responsive-16by9">
                                    {!! $pos->iframe !!}
                                </div>
                            @endif
                            <div class="content">
                                <h2>
                                    <a href="noticia/{{ $pos->url }}">{{ $pos->title }}</a>
                                </h2>
                                <ul class="post-meta">
                                    <li>{{ $pos->published_at->format('M/d/Y') }}</li>
                                    @foreach($pos->tags as $tag)
                                        <li><a href="{{ route('tags.show', $tag) }}">#{{ $tag->name }}</a></li>
                                    @endforeach
                                        <li><a href="{{ route('categories.show', $pos->category) }}">{{ $pos->category->name }}</a></li>
                                </ul>
                                <p>{{ $pos->excerpt }}</p>
                                <a href="noticia/{{ $pos->url }}" class="btn btn-common read-more">Leer más <i class="lni-chevron-right"></i></a>
                            </div>
                        </div>
                    @endforeach
                        {{ $posts->links() }}
                </div>
                <div class="col-lg-4 col-md-12 col-xs-12">
                    <div class="sidebar right">
                        {{--                        <div class="widget">--}}
                        {{--                            <h3 class="sidebar-title">Buscar Noticia</h3>--}}
                        {{--                            <div class="search-blog-input">--}}
                        {{--                                <div class="input">--}}
                        {{--                                    <input class="form-control" type="text" placeholder="Escriba y presione Enter. " value="">--}}
                        {{--                                    <i class="lni-search"></i>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                            <div class="clearfix"></div>--}}
                        {{--                        </div>--}}
                        <div class="widget">
                            <h3 class="sidebar-title">Últimas Noticias</h3>
                            <ul class="widget-tabs">
                                @foreach($post as $po)

                                    <li>
                                        <div class="widget-content">
                                            @if($po->photos->count() === 1)
                                                <div class="widget-thumb">
                                                    <a href="noticia/{{ $po->url }}"><img src="{{ url($po->photos->first()->url) }}" alt=""></a>
                                                </div>

                                            @elseif($po->photos->count() > 1)
                                                <div class="widget-thumb">
                                                    <a href="noticia/{{ $po->url }}"><img src="{{ url($po->photos->first()->url) }}" alt=""></a>
                                                </div>
                                            @endif
                                            <div class="widget-text">
                                                <h5><a href="noticia/{{ $po->url }}">{{ $po->title }}</a></h5>
                                                <span>{{ $po->published_at->format('M/d/Y') }}</span>
                                            </div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>


                    </div>
                </div>
            </div>
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