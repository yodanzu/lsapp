@extends('layouts.app')

@section('content')
    <h1>Schedules</h1>
    @if(count($scheds) > 0)
        @if(Session::get('slotCode'))
        <div class="alert alert-danger">
            {{Session::get('slotCode')}}
        </div>
        @endif
        @if(Session::get('startDate'))
        <div class="alert alert-danger">
            {{Session::get('startDate')}}
        </div>
        @endif
        @if(Session::get('endDate'))
        <div class="alert alert-danger">
            {{Session::get('endDate')}}
        </div>
        @endif
        @if(Session::get('roomId'))
        <div class="alert alert-danger">
            {{Session::get('roomId')}}
        </div>
        @endif
        @if(Session::get('instructorId'))
        <div class="alert alert-danger">
            {{Session::get('instructorId')}}
        </div>
        @endif
            @foreach($scheds as $sched)
                <div class="well">
                    <h3><a href="/scheds/{{$sched->id}}">{{$sched->slotCode}}</a></h3>
                    <meduim>Start Date: {{$sched->startDate}}</meduim><br>
                    <meduim>End Date: {{$sched->endDate}}</meduim><br>
                    <meduim>Room Id: {{$sched->roomId}}</meduim><br>
                    <meduim>Instructor Id: {{$sched->instructorId}}</meduim><br>
                    <meduim>Written on {{$sched->created_at}}</meduim>
                </div>
            @endforeach
            {{$scheds->links()}}
    @else
        <p>No Schedules found</p>
    @endif
@endsection