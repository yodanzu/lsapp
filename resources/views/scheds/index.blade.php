@extends('layouts.app')

@section('content')
    @if(count($scheds) > 0)
        @if(Session::get('slotCode'))
        <div class="alert alert-danger">
            <p>Slot Code:</p>
            {{Session::get('slotCode')}}
            <p>Start Date:</p>
            {{Session::get('startDate')}}
            <p>End Date:</p>
            {{Session::get('endDate')}}
            <p>Room Id:</p>
            {{Session::get('roomId')}}
            <p>Instructor Id:</p>
            {{Session::get('instructorId')}}
        </div>
        @endif
        <h1>Schedules</h1>
        <div class="well">
                <table border="0" width="100%">
                    <tr>
                        <td width="250"><h3>
                            Slot Code
                        </h3></td>
                        <td width="250"><h3>
                            Start Date
                        </h3></td>
                        <td width="250"><h3>
                            End Date
                        </h3></td>
                        <td width="250"><h3>
                            Room Id
                        </h3></td>
                        <td width="250"><h3>
                            Instructor Id
                        </h3></td>
                    </tr>
                    @foreach($scheds as $sched)
                        <tr>
                            <td><h3>
                                <a href="/scheds/{{$sched->id}}">{{$sched->slotCode}}</a>
                            </h3></td>
                            <td><h3>
                                {{$sched->startDate}}
                            </h3></td>
                            <td><h3>
                                {{$sched->endDate}}
                            </h3></td>
                            <td><h3>
                                {{$sched->roomId}}
                            </h3></td>
                            <td><h3>
                                {{$sched->instructorId}}
                            </h3></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        {{$scheds->links()}}
    @else
        <p>No Schedules found</p>
    @endif
@endsection