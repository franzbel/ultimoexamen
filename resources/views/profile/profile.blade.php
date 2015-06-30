

@extends('layouts.master')
@section('title', 'Proyecto final')
@section('estilo')
    <style>
        table{
            width: 100%;
        }
        .boton{
            float: left;
            padding: 5px;
        }

    </style>
@endsection
@section('content')

    <div class="container">
        <div class="row">

                <div class="jumbotron">
                    <h3>Foto</h3>
                    <h3>Nombre: {{$user->name}}</h3>
                    <h3>Siguiendo: 12</h3>
                    <h3>Seguidores: 35</h3>
                    <h3>Publicaciones: 25</h3>


                    @if($user->id != Auth::id())
                        @include('partials.form_seguir')
                    @endif
                </div>
                <div class="form_publicar">
                    {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
                        {!! Form::hidden('user_id',  Auth::id()) !!}
                        {!! Form::textarea('body',null, ['class'=>'form-control', 'maxlength'=>140, 'rows'=>2]) !!}
                        <button type="submit" class="btn btn-primary" >Postear</button>
                    {!! Form::close() !!}
                </div>
                <div>
                    <table class="table-bordered">
                        <tbody>

                        @foreach($posts as $post)

                                    <tr>
                                        <td rowspan="2" colspan="1">Foto</td>
                                        <td colspan="5">Nombre</td>
                                    </tr>
                                    <tr>
                                        <td colspan="5">Fecha</td>
                                    </tr>
                                    <tr>
                                        <td colspan="6">{{$post->body}}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="1" class="boton">
                                            <a class="btn btn-info" href="#" role="button">
                                                <span class="glyphicon glyphicon-comment"></span> 12
                                            </a>
                                        </td>
                                        <td colspan="1" class="boton">
                                            <a class="btn btn-info" href="#" role="button">
                                                <span class="glyphicon glyphicon-share-alt"></span>34
                                            </a>
                                        </td>
                                        <td colspan="1" class="boton">
                                            <a class="btn btn-info" href="#" role="button">
                                                <span class="glyphicon glyphicon-hand-right"></span>7
                                            </a>
                                        </td>
                                        <td colspan="1" class="boton">
                                            <a class="btn btn-info" href="#" role="button">
                                                <span class="glyphicon glyphicon-thumbs-down"></span>23
                                            </a>
                                        </td>

                                    </tr>

                        @endforeach
                        </tbody>
                    </table>
                </div>

        </div>
    </div>
@endsection


