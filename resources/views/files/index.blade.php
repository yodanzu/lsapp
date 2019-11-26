@extends('layouts.app')

@section('content')
    <h1>Reviewers & Manuals</h1>
    @if(count($files) > 0)
        @foreach($files as $file)
            <div class="well">
                <h3><a href="/files/{{$file->id}}">{{$file->description}}</a></h3>
                <medium>Written on {{$file->created_at}}</medium>
            </div>
        @endforeach
        {{$files->links()}}
    @else
        <p>No files found</p>
    @endif
@endsection