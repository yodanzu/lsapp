@extends('layouts.app')

@section('content')
    <h1>Schedules</h1>
    @if(count($scheds) > 0)
        @foreach($scheds as $sched)
            <div class="well">
                <h3><a href="/scheds/{{$sched->id}}">{{$sched->slot_code}}</a></h3>
                <meduim>Start Date: {{$sched->start_date}}</meduim><br>
                <meduim>End Date: {{$sched->end_date}}</meduim><br>
                <meduim>Written on {{$sched->created_at}}</meduim>
            </div>
        @endforeach
        {{$scheds->links()}}
    @else
        <p>No Schedules found</p>
    @endif
@endsection