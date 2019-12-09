@extends('layouts.app')

@section('content')
    <h1>Reviewers & Manuals</h1>
    @if(count($files) > 0)
        @foreach($files as $file)
            <div class="well">
                <h3>{{$file->description}}</h3>
                <div class="col-md-4 col-sm-4">
                    <img style="width:100%" src="/storage/cover_images/{{$file->file}}">
                </div>
                <medium>Written on {{$file->created_at}}</medium>
            </div>
        @endforeach
        {{$files->links()}}
    @else
        <p>No files found</p>
    @endif
@endsection