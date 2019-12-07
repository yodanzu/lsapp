@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    @if(count($courses) > 0)
        @foreach($courses as $course)
            <div class="well">
                <h3><a href="/courses/{{$course->id}}">{{$course->subjectDescription}}</a></h3>
                <medium>Course Description: {{$course->courseDescription}}</medium><br>
                <medium>Written on {{$course->created_at}}</medium>
                <a href="/scheds/create?slotCode={{$course->subjectDescription}}" class="pull-right">Add Slot</a>
            </div>
        @endforeach
        {{$courses->links()}}
    @else
        <p>No courses found</p>
    @endif
@endsection