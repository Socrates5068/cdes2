<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/ico" href="{{ asset('images/icono.ico') }}">
    <title>{{ config('app.name') }} | Admin</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/adminlte/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="/adminlte/bower_components/Ionicons/css/ionicons.min.css">

    @stack('styles')
    <!-- Theme style -->
    <link rel="stylesheet" href="/adminlte/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect. -->
    <link rel="stylesheet" href="/adminlte/css/skins/skin-red.min.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-red sidebar-mini">
<div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <!-- <a href="/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <!-- <img src="/adminlte/img/minilogo.png" width="50px">
            <!--{{--<img src="assets/img/minilogo.png" width="50px" alt="Logo Sedes Potosi">--}}-->
            <!--<span class="logo-mini"><b>SEDES</b></span>-->
            <!-- logo for regular state and mobile devices -->
            <!-- <span class="logo-lg">SEDES Potos??</span>-->
        <!-- </a>-->
        
        <a href="{{ route('pages.index') }}" class="logo" target="_blank">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <img class="logo-mini" src="/adminlte/img/minilogo.png" width="50px">
            <!-- logo for regular state and mobile devices -->
            <!--<span class="logo-lg"><b>SEDES </b>Potos??</span>-->
            <img src="/adminlte/img/logodash.svg" height="50px">
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">


                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                            <img src="/adminlte/img/user2-160x160.jpg" class="user-image" alt="User Image">
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{{ auth()->user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                <p>
                                    {{ auth()->user()->name }}
                                    {{--- {{ auth()->user()->roles->first()->name }}--}}
                                    <small>Miembro desde {{ auth()->user()->created_at->format('d/M/Y') }}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <form method="POST" action="{{ route('logout') }}">
                                    {{ csrf_field() }}
                                    <button class="btn btn-default btn-flat btn-block">Cerrar Sesion</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar user panel (optional) -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="/adminlte/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ auth()->user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>

            <!-- search form (Optional) -->
            {{--<form action="#" method="get" class="sidebar-form">--}}
                {{--<div class="input-group">--}}
                    {{--<input type="text" name="q" class="form-control" placeholder="Search...">--}}
                    {{--<span class="input-group-btn">--}}
              {{--<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>--}}
              {{--</button>--}}
            {{--</span>--}}
                {{--</div>--}}
            {{--</form>--}}
            <!-- /.search form -->

            <!-- Sidebar Menu -->
            @include('admin.partials.nav')
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            @yield('header')
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            @if(session()->has('flash'))
                <div class="alert alert-success">{{ session('flash') }}</div>
            @endif
            @yield('content')

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
            SEDES
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 <a href="#">Sedes Potos??</a>.</strong>
    </footer>


    <!-- Add the sidebar's background. This div must be placed
    immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/adminlte/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

@unless(request()->is('admin/posts/*'))
    @include('admin.posts.create')
@endunless

@stack('scripts')
<!-- AdminLTE App -->
<script src="/adminlte/js/adminlte.min.js"></script>



</body>
</html>