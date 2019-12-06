@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
    {!! Form::open(['action'=>'/courses/{{$course->id}}', 'method' => 'POST']) !!}
    {!! Form::open(['action' => 'SchedsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('slot_code', 'Slot Code')}}
            {{Form::number('slot_code', '', ['class' => 'form-control', 'placeholder' => 'Slot Code'])}}
        </div>
        <div class="form-group">
            {{Form::label('start_date', 'Start Date')}}
            {{Form::date('start_date', '', ['class' => 'form-control', 'placeholder' => 'Start Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('end_date', 'End 0Date')}}
            {{Form::date('end_date', '', ['class' => 'form-control', 'placeholder' => 'End Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('room_id', 'Room')}}
            {{Form::text('room_id', '', ['class' => 'form-control', 'placeholder' => 'Room'])}}
        </div>
        <div class="form-group">
            {{Form::label('instructor_id', 'Instructor')}}
            {{Form::text('instructor_id', '', ['class' => 'form-control', 'placeholder' => 'Instructor'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection