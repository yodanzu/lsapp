@extends('layouts.app')

@section('content')
    <h1>Edit Files</h1>
    {!! Form::open(['action' => ['FilesController@update', $file->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $file->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        <div class="form-group">
            {{Form::file('file')}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection