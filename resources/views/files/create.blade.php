@extends('layouts.app')

@section('content')
    <h1>Create Reviewers & Manuals</h1>
    {!! Form::open(['action' => 'FilesController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection