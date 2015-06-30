@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <table class="table">
                @foreach($posts as $post)
                            <tr>
                                <th>Contenido</th>
                                <th>Autor</th>
                            </tr>
                            <tr>
                                <td>{{$post->body}}</td>
                                <td>{{$post->user->name}}</td>
                            </tr>
                @endforeach
            </table>

        </div>
    </div>
@endsection
