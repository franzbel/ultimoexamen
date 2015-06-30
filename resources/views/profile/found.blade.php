@extends('layouts.master')

@section('estilo')
    <style>
        span{
            padding: 15px;
        }
    </style>


@endsection

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td colspan="3"><span><img src="{{ ($user->image == null) ? '/uploads/15707.jpg' : $user->image}}" alt="" id="img_icono"></span></td>
                        <td colspan="3"><span>{{$user->name}}</span></td>
                        <td colspan="3"><a class="btn btn-info" href="{{route('show_profile', $user->name)}}"><span>Visitar perfil</span></a></td>
                    </tr>
                @endforeach
                </tbody>

            </table>


        </div>
    </div>
@endsection
