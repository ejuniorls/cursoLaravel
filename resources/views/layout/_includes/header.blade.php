<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <header>
        <nav class="deep-orange">
            <div class="nav-wrapper container deep-orange">
                <a href="#!" class="brand-logo">Curso Laravel</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
                </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            <li><a href="{{route('admin.cursos')}}">Cursos</a></li>
        </ul>
    </header>