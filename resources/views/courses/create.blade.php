@extends('layouts.app')

@section('content')
    <h1>Create Courses</h1>
    {!! Form::open(['action' => 'CoursesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('courseDescription', 'Course Description')}}
            {{Form::text('courseDescription', '', ['class' => 'form-control', 'placeholder' => 'Course Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('subjectDescription', 'Subject Description')}}
            {{Form::text('subjectDescription', '', ['class' => 'form-control', 'placeholder' => 'Subject Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('rankRequirements', 'Rank Requirements')}}
            {{Form::text('rankRequirements', '', ['class' => 'form-control', 'placeholder' => 'Rank Requirements'])}}
        </div>
        <div class="form-group">
            {{Form::label('courseFee', 'Course Fee')}}
            {{Form::number('courseFee', '', ['class' => 'form-control', 'placeholder' => 'Course Fee'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection