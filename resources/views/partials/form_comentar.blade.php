
{!! Form::open(array('route' =>'comments.store', 'method'=>'post')) !!}

    {!! Form::hidden('post_id', $post->id) !!}

    {!! Form::textarea('body',null, ['class'=>'form-control','maxlength'=>130, 'rows'=>"2", 'cols'=>"50"]) !!}

    <button type="submit"  class="btn btn-info comentario"><span class="glyphicon glyphicon-comment"></span>34</button>

{!! Form::close() !!}
