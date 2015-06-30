<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {!! Html::style('assets/css/bootstrap.css') !!}
    <title>App Name - @yield('title')</title>
    @yield('estilo')
    <style>
        #img_icono {
            max-width: 45px;
            max-height: 45px;
            border-radius: 5px;
            width: 50px;
            height: 50px;
            margin-left: 15px;
        }
    </style>
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

                           {!! Form::open(array('route' =>'search', 'method'=>'post')) !!}
                           <div style="padding-top: 7px">
                               <div class="form-group" style="float: left; ">
                                   <input type="text" class="form-control" placeholder="Buscar articulo" name="nombre">
                               </div>
                               <button type="submit" class="btn btn-default">Buscar</button>
                           </div>


                           {!! Form::close() !!}


                       </li>

                        <li>
                            @if(Auth::user())
                                <img src="{{ (Auth::user()->image == null) ? '/uploads/15707.jpg' : Auth::user()->image}}" alt="" id="img_icono">
                            @endif

                        </li>
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
    @yield('script')
    {!! Html::script('assets/js/jquery-1.11.3.min.js') !!}
    {!! Html::script('assets/js/bootstrap.min.js') !!}
    {!! Html::script('assets/js/docs.min.js') !!}

</body>
</html>





