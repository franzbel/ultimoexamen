@extends('layouts.master')
@section('title', 'Proyecto final')
@section('estilo')
    <style>
        table{
            width: 100%;
        }
        .boton{
            float: left;
            padding: 0px 5px 0px 0px;

        }
        .form_comentar{
            display: none;
        }
        .form_review{
            display: none;
        }
        #separador{
            width: 100%;
            background-color: #1b6d85;
            border-radius: 5px;
            padding: 1px;
        }

    </style>
@endsection


@section('content')
    <div class="container">
        <div class="row">
                <div class="jumbotron">
                    <h4>SABIAS QUE LA PALABRA MAS USADA EN LOS POSTS ES: - {{$mas_frecuentes}}</h4>
                </div>
                <div class="form_publicar">
                    {!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
                        {!! Form::hidden('user_id',  Auth::id()) !!}
                        {!! Form::textarea('body',null, ['class'=>'form-control', 'maxlength'=>140, 'rows'=>2]) !!}
                        <button type="submit"  class="btn btn-primary">Postear</button>
                    {!! Form::close() !!}
                </div>
            <div>
                <table class="table">
                    <tbody>

                    @foreach($user->idols as $idolo)
                        @foreach($user->find($idolo->idol_id)->posts as $post)
                            <tr>
                                <td colspan="6"  id="separador"></td>
                            </tr>
                            <tr>
                                <td rowspan="2" colspan="1"><img src="{{ ($post->user->image == null) ? '/uploads/15707.jpg' : $post->user->image}}" alt="" id="img_icono"></td>
                                <td colspan="5">{{$post->user->name}}</td>
                            </tr>
                            <tr>
                                <td colspan="5">{{$post->created_at}}</td>
                            </tr>
                            <tr>
                                <td colspan="6">{{$post->body}}</td>
                            </tr>
                            <tr>
                                <td colspan="1" class="boton">

                                    @include('partials.form_repostear')
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
                                <td colspan="3"></td>

                            </tr>
                            <tr>
                                <td colspan="6" class="boton">Comentar
                                    @include('partials.form_comentar')
                                </td>
                            </tr>

                        @endforeach

                    @endforeach



                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection


@section('script')
    <script>

        function mostrarForm(){

            var formulario = document.getElementsByClassName('comentario');

            for (var i=0; i<formulario.length; i++){
                formulario.item(i).addEventListener("click", MouseClick);
            }

            function MouseClick(e){
                e.target..setAttribute('type','textarea');
            }

        }

        function cargarFunciones(){

            mostrarForm();
        }

        window.onload = cargarFunciones;
    </script>
@endsection