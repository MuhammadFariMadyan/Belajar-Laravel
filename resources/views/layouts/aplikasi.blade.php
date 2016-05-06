<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="belajar laravel 5">
    <meta name="author" content="rizki mufrizal">

    <title>Belajar Laravel 5 @yield('title')</title>

    <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <link href="{{ asset('stylesheet/header.css') }}" type="text/css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<!-- Fixed navbar -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('') }}">Belajar Laravel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{ url('') }}">Home</a></li>
                <li><a href="{{ url('Mahasiswa') }}">Data Mahasiswa</a></li>
                <li><a href="{{ url('Buku') }}">Data Buku</a></li>
                <li><a href="{{ url('Peminjaman') }}">Data Peminjaman</a></li>
                <li><a href="{{ url('About') }}">About</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>

        </div>
    </div>
</nav>

<div class="container">

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif

    @yield('content')

</div>

<script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}" type="application/javascript"></script>
<script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}" type="application/javascript"></script>

</body>
</html>