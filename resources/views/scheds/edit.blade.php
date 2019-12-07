@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
        {!! Form::open(['action' => ['SchedsController@update', $sched->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('slotCode', 'Slot Code')}}
                {{Form::text('slotCode', $sched->slotCode, ['class' => 'form-control', 'placeholder' => 'Slot Code'])}}
            </div>
            <div class="form-group">
                {{Form::label('startDate', 'Start Date')}}
                {{Form::date('startDate', $sched->startDate, ['class' => 'form-control', 'placeholder' => 'Start Date'])}}
            </div>
            <div class="form-group">
                {{Form::label('endDate', 'End Date')}}
                {{Form::date('endDate', $sched->endDate, ['class' => 'form-control', 'placeholder' => 'End Date'])}}
            </div>
            <div class="form-group">
                {{Form::label('roomId', 'Room')}}
                {{Form::text('roomId', $sched->roomId, ['class' => 'form-control', 'placeholder' => 'Room'])}}
            </div>
            <div class="form-group">
                {{Form::label('instructorId', 'Instructor')}}
                {{Form::text('instructorId', $sched->instructorId, ['class' => 'form-control', 'placeholder' => 'Instructor'])}}
            </div>
            {{Form::hidden('_method', 'PUT')}}
            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
@endsection