@extends('layouts.master')



@section('content')
    <div class="container">
        <div class="row">
            <table>
                @foreach($users as $user)
                    <tr>
                        <td"><img src="{{ ($user->image == null) ? '/uploads/15707.jpg' : $user->image}}" alt="" id="img_icono"></td>
                        <td>{{$user->name}}</td>
                        <td><a href="{{route('show_profile', $user->name)}}">Visitar perfil</a></td>
                    </tr>
                @endforeach
            </table>


        </div>
    </div>
@endsection
