@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
    @if(count($courses) > 0)
        @foreach($courses as $course)
            <div class="well">
                <h3><a href="/courses/{{$course->id}}">{{$course->subjectDescription}}</a></h3>
                <medium>Course Description: {{$course->courseDescription}}</medium><br>
                <medium>Written on {{$course->created_at}}</medium>
                <div align="left">
                    <a href="/scheds/create?slotCode={{$course->subjectDescription}}" class="btn btn-default">Add Slot</a>
                    <a href="/files/create?description={{$course->subjectDescription}}" class="btn btn-default">Add Files</a>
                </div>
            </div>
        @endforeach
        {{$courses->links()}}
    @else
        <p>No courses found</p>
    @endif
@endsection