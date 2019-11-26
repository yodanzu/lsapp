@extends('layouts.app')

@section('content')
    <h1>Create Courses</h1>
    {!! Form::open(['action' => 'CoursesController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('course_description', 'Course Description')}}
            {{Form::text('course_description', '', ['class' => 'form-control', 'placeholder' => 'Course Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('subject_description', 'Subject Description')}}
            {{Form::text('subject_description', '', ['class' => 'form-control', 'placeholder' => 'Subject Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('rank_requirements', 'Rank Requirements')}}
            {{Form::text('rank_requirements', '', ['class' => 'form-control', 'placeholder' => 'Rank Requirements'])}}
        </div>
        <div class="form-group">
            {{Form::label('course_fee', 'Course Fee')}}
            {{Form::number('course_fee', '', ['class' => 'form-control', 'placeholder' => 'Course Fee'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection