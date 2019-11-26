@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-default">Go Back</a>
    <br><br>
        <p style="font-size:30px">{{$post->title}}</p>
        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div>
        <h3>{!!$post->body!!}</h3>
    </div>
    <hr>
        <medium>Written on {{$post->created_at}} by {{$post->user->name}}</medium>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            
            {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'Post', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection