@extends('layouts.app')

@section('content')
    <a href="/files" class="btn btn-default">Go back</a>
    <br><br>
        <p style="font-size:25px">File Discription: {{$file->description}}</p>
    <hr>
        <medium>Written on {{$file->created_at}}</medium>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $file->user_id)
        <a href="/files/{{$file->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['FilesController@destroy', $file->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection