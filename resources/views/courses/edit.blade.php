@extends('layouts.app')

@section('content')
    <h1>Edit Courses</h1>
    {!! Form::open(['action' => ['CoursesController@update', $course->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('courseDescription', 'Course Description')}}
            {{Form::text('courseDescription', $course->courseDescription, ['class' => 'form-control', 'placeholder' => 'Course Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('subjectDescription', 'Subject Description')}}
            {{Form::text('subjectDescription', $course->subjectDescription, ['class' => 'form-control', 'placeholder' => 'Subject Description'])}}
        </div>
        <div class="form-group">
            {{Form::label('rankRequirements', 'Rank Requirements')}}
            {{Form::text('rankRequirements', $course->rankRequirements, ['class' => 'form-control', 'placeholder' => 'Rank Requirements'])}}
        </div>
        <div class="form-group">
            {{Form::label('courseFee', 'Course Fee')}}
            {{Form::number('courseFee', $course->courseFee, ['class' => 'form-control', 'placeholder' => 'Course Fee'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection