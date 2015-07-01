@extends('layouts.master')
@section('title', 'Proyecto final')
@section('estilo')
    <style>
        body{
            background-image: url('/rino.jpg');
            background-size: cover;
            background-repeat: repeat;
        }
        .contenedor{
            background-color: #122b40;
            width: auto;
            opacity: 0.9;
            padding-left: 50px;
            padding-right: 50px;
            padding-bottom: 20px;
            border-radius: 15px;
            float: right;
            color: #985f0d;
        }
        input{
            color: #000000;

        }
    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row">

                <div class="contenedor">
                    {{--INICIAR SECION--}}
                    <h3>Iniciar sesion</h3>
                    {!! Form::open(array('url' => 'auth/login', 'method'=>'post')) !!} <br/>
                    {!! Form::label('email', 'Correo Electronico', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::text('email') !!} <br/>

                    {!! Form::label('password', 'Contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password') !!} <br/>

                    {!! Form::checkbox('remember') !!} Recuerdame <br/>

                    {!! Form::submit('Iniciar', array('class'=>"btn btn-info")) !!} <br/>
                    {!! Form::close() !!}


                    <h3>Registro</h3>
                    {!! Form::open(array('url' => 'auth/register', 'method'=>'post')) !!} <br/>
                    {!! Form::label('name', 'Nombre', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::text('name') !!} <br/>

                    {!! Form::label('email', 'Correo Electronico', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::text('email') !!} <br/>


                    {!! Form::label('password', 'Contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password') !!} <br/>

                    {!! Form::label('password_confirmation', 'Confirmar contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password_confirmation') !!} <br/>

                    {!! Form::label('country', 'Seleccione su pais') !!} <br/>
                    {!! Form::select('country', array('0' => 'Bolivia', '1' => 'Colombia', '2' => 'Argentina'), '1') !!}
                    <br/>


                    {!! Form::submit('Registrarse', array('class'=>"btn btn-info")) !!} <br/>
                    {!! Form::close() !!}

                </div>

        </div>
    </div>
@endsection
