@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <a href="/posts/create" class="btn btn-primary">Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{{$post->title}}</td>
                                    <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                    {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no posts</p>
                    @endif
                </div>
                <div class="panel-body">
                    <a href="/courses/create" class="btn btn-primary">Create Course</a>
                    <h3>Your Courses</h3>
                    @if(count($courses) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{$course->subjectDescription}}</td>
                                    <td><a href="/courses/{{$course->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['CoursesController@destroy', $course->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no courses</p>
                    @endif
                </div>
                <div class="panel-body">
                    <a href="/scheds/create" class="btn btn-primary">Create Schedule</a>
                    <h3>Your Schedules</h3>
                    @if(count($scheds) > 0)
                        <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @foreach($scheds as $sched)
                                <tr>
                                    <td>{{$sched->slotCode}}</td>
                                    <td><a href="/scheds/{{$sched->id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                        {!!Form::open(['action' => ['SchedsController@destroy', $sched->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p>You have no schedule</p>
                    @endif
                </div>
                <div class="panel-body">
                        <a href="/files/create" class="btn btn-primary">Create Reviewers & Manuals</a>
                        <h3>Your Reviewers & Manuals</h3>
                        @if(count($files) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <td>Title</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                @foreach($files as $file)
                                    <tr>
                                        <td>{{$file->description}}</td>
                                        <td><a href="/files/{{$file->id}}/edit" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['FilesController@destroy', $file->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                                {{Form::hidden('_method', 'DELETE')}}
                                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You have no reviewers and manuals</p>
                        @endif
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
    