@extends('layouts.app')
@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        @if($post->cover_image!='noimage.jpg')
                            <img style="max-width:100%; height:50px;" src="storage/cover_images/{{$post->cover_image}}">
                        @endif
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h6>
                            <a href="{{ url('/posts/'.$post->id) }}">
                                {{$post->title}}
                            </a>
                        </h6>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p> No posts found</p>
    @endif
@endsection