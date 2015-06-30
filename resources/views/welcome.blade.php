@extends('layouts.master')
@section('title', 'Proyecto final')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                {{--INICIAR SECION--}}
                <h3>Iniciar sesion</h3>
                {!! Form::open(array('url' => 'auth/login', 'method'=>'post')) !!}
                    {!! Form::label('email', 'Correo Electronico', array('class'=>'awesomw')) !!}
                    {!! Form::text('email') !!} <br/>

                    {!! Form::label('password', 'Contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password') !!} <br/>

                    {!! Form::checkbox('remember') !!} Recuerdame <br/>

                    {!! Form::submit('Iniciar') !!} <br/>
                {!! Form::close() !!}


                <h3>Registro</h3>
                {!! Form::open(array('url' => 'auth/register', 'method'=>'post')) !!}
                    {!! Form::label('name', 'Nombre', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::text('name') !!} <br/>

                    {!! Form::label('email', 'Correo Electronico', array('class'=>'awesomw')) !!}
                    {!! Form::text('email') !!} <br/>


                    {!! Form::label('password', 'Contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password') !!} <br/>

                    {!! Form::label('password_confirmation', 'Confirmar contraseña', array('class'=>'awesomw')) !!} <br/>
                    {!! Form::password('password_confirmation') !!} <br/>


                    {!! Form::submit('Registrarse'); !!}
                {!! Form::close() !!}


            </div>
        </div>
    </div>
@endsection
