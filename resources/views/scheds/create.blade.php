@extends('layouts.app')

@section('content')
<h1>Create Post</h1>
    {!! Form::open(['action' => 'SchedsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('slotCode', 'Slot Code')}}
            {{Form::number('slotCode', '', ['class' => 'form-control', 'placeholder' => 'Slot Code'])}}
        </div>
        <div class="form-group">
            {{Form::label('startDate', 'Start Date')}}
            {{Form::date('startDate', '', ['class' => 'form-control', 'placeholder' => 'Start Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('endDate', 'End 0Date')}}
            {{Form::date('endDate', '', ['class' => 'form-control', 'placeholder' => 'End Date'])}}
        </div>
        <div class="form-group">
            {{Form::label('roomId', 'Room')}}
            {{Form::text('roomId', '', ['class' => 'form-control', 'placeholder' => 'Room'])}}
        </div>
        <div class="form-group">
            {{Form::label('instructorId', 'Instructor')}}
            {{Form::text('instructorId', '', ['class' => 'form-control', 'placeholder' => 'Instructor'])}}
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection