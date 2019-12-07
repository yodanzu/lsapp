@extends('layouts.app')

@section('content')
    <a href="/courses" class="btn btn-default">Go back</a>
    <br><br>
        <p style="font-size:25px">Course Discription: {{$course->courseDescription}}</p>
        <p style="font-size:25px">Course Name: {{$course->subjectDescription}}</p>
        <p style="font-size:25px">Rank Requirements: {{$course->rankRequirements}}</p>
        <p style="font-size:25px">Course Fee: ₱{{$course->courseFee}}</p>
    <hr>
        <a href="">Add Slot</a>
        <medium>Written on {{$course->created_at}}</medium>
    <hr>
    <a href="/scheds/create" class="btn btn-default">Add Slot</a>
    @if(!Auth::guest())
        @if(Auth::user()->id == $course->user_id)
        <a href="/courses/{{$course->id}}/edit" class="btn btn-default">Edit</a>

        {!!Form::open(['action' => ['CoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
        @endif   
    @endif
@endsection