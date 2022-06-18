<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Den Doelder</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
          integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog=="
          crossorigin="anonymous"/>

    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">

    @yield('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-light colour-purple">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="secondLiHeader"><h1 class="headerCenter">@yield('header')</h1></li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    {{--    Removed, but code saved if we need it later--}}
    {{--    <!-- Main Footer -->--}}
    {{--    <footer class="main-footer bg-blue">--}}
    {{--        <div class="float-right d-none d-sm-block">--}}
    {{--            <b>Version</b> 3.0.5--}}
    {{--        </div>--}}
    {{--        <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights--}}
    {{--        reserved.--}}
    {{--    </footer>--}}
</div>

<script src="{{ mix('js/app.js') }}" defer></script>

@yield('custom_js')

@yield('third_party_scripts')

@stack('page_scripts')
</body>
</html>
