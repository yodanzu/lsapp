@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
        {!! Form::open(['action' => ['SchedsController@update', $sched->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('slot_code', 'Slot Code')}}
                {{Form::text('slot_code', $sched->slot_code, ['class' => 'form-control', 'placeholder' => 'Slot Code'])}}
            </div>
            <div class="form-group">
                {{Form::label('start_date', 'Start Date')}}
                {{Form::date('start_date', $sched->start_date, ['class' => 'form-control', 'placeholder' => 'Start Date'])}}
            </div>
            <div class="form-group">
                {{Form::label('end_date', 'End Date')}}
                {{Form::date('end_date', $sched->end_date, ['class' => 'form-control', 'placeholder' => 'End Date'])}}
            </div>
            <div class="form-group">
                {{Form::label('room_id', 'Room')}}
                {{Form::text('room_id', $sched->room_id, ['class' => 'form-control', 'placeholder' => 'Room'])}}
            </div>
            <div class="form-group">
                {{Form::label('instructor_id', 'Instructor')}}
                {{Form::text('instructor_id', $sched->instructor_id, ['class' => 'form-control', 'placeholder' => 'Instructor'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection