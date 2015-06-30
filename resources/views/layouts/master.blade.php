<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('assets/css/bootstrap.css') !!}
    <title>App Name - @yield('title')</title>
    @yield('estilo')
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sistems web</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    @if (!Auth::guest())
                        <li>
                            <a href="{{route('show_profile', Auth::user()->name)}}" class="">{{ Auth::user()->name }}</a>

                        </li>
                        <li>
                            <a href="{{route('show_index')}}" class="">Inicio</a>
                        </li>
                        <li><a href="{{ url('/auth/logout') }}">Terminar sesion</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    {{--SCRIPTS--}}
    {!! Html::script('assets/js/jquery.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/docs.min.js') !!}
</body>
</html>





