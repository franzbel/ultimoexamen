
{!! Form::open(array('route' =>'comments.store', 'method'=>'post')) !!}

    {!! Form::hidden('post_id', $post->id) !!}

        {!! Form::textarea('body',null, ['class'=>'form-control']) !!}

    <button type="submit"  class="btn btn-info">Guardar</button>

{!! Form::close() !!}
