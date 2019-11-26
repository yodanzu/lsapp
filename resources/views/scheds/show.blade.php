@extends('layouts.app')

@section('content')
    <a href="/scheds" class="btn btn-default">Go Back</a>
    <h1>{{$sched->slot_code}}</h1>
    <div>
        <p style="font-size:30px">Start Date: {{$sched->start_date}}</p>
        <p style="font-size:30px">End Date: {{$sched->end_date}}</p>
        <p style="font-size:30px">Room No: {{$sched->room_id}}</p>
        <p style="font-size:30px">Instructor: {{$sched->instructor_id}}</p>
    </div>
    <hr>
    <medium>Written on {{$sched->created_at}}</medium>
    <hr>
    @if(!Auth::guest())
        @if(Auth::user()->id == $sched->user_id)
        <a href="/scheds/{{$sched->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['SchedsController@destroy', $sched->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif
    @endif
@endsection