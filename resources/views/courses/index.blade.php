@extends('layouts.app')

@section('content')
    <h1>Courses</h1>
        <div class="well">
            <table border="0" width="100%">
                <tr>
                    <td width="250"><h3>
                        Subject Description
                    </h3></td>
                    <td width="250"><h3>
                        Course Description    
                    </h3></td>
                    <td width="250"><h3>
                        Rank Requirements 
                    </h3></td>
                    <td width="250"><h3>
                        Course Fee    
                    </h3></td>
                @if(count($courses) > 0)
                    @foreach($courses as $course)
                        <tr>
                            <td width="250"><h3>
                                    {{$course->subjectDescription}}
                            </h3></td>
                            <td width="250"><h3>
                                    {{$course->courseDescription}}
                            </h3></td>
                            <td width="250"><h3>
                                    {{$course->rankRequirements}}
                            </h3></td>
                            <td width="250"><h3>
                                      {{$course->courseFee}}
                            </h3></td>
                            @if(!Auth::guest())
                                @if(Auth::user()->id == $course->user_id)
                                    <td width="200">
                                        <a href="/scheds/create?slotCode={{$course->subjectDescription}}" class="btn btn-default">Add Slot</a>
                                        <a href="/files/create?description={{$course->subjectDescription}}" class="btn btn-default">Add Files</a>
                                    </td>
                                @endif
                            @endif
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
@endsection