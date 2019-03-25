@extends ('layouts.app')
@section('content')
        <a href="/lsapp/public/posts" class="btn btn-default">Back</a>
        <h3>{{$post->title}}</h3>
        @if($post->cover_image!='noimage.jpg')
                <img style="max-width:100%;" src="../storage/cover_images/{{$post->cover_image}}">
        @endif
        <br>
        <br>
        <div>
                {!!$post->body!!}
        </div>
        <hr>
        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
        <hr>
        @if(!Auth::guest())
                @if(Auth::user()->id == $post->user_id)
                        <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-default">
                                Edit
                        </a>
                        {!!Form::open(['action' =>['PostsController@destroy',$post->id], 'method' => 'POST', 'class' => 'pull-right']) !!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close() !!}
                @endif
        @endif
@endsection