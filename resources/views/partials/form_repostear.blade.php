
{!! Form::open(array('route' => 'posts.store', 'method'=>'post')) !!}
    {!! Form::hidden('user_id',  Auth::id()) !!}
    <input type=hidden name=body value="{{$post->body}}">
    <button type="submit"  class="btn btn-info"><span class="glyphicon glyphicon-share-alt"></span></button>
{!! Form::close() !!}

