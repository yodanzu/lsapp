<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use DB;

class CoursesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
     {
         $this->middleware('auth', ['except' => ['index', 'show']]);
     }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses =  Course::orderBy('created_at', 'desc')->paginate(10);
        return view('courses.index')->with('courses', $courses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'courseDescription' => 'required',
            'subjectDescription' => 'required',
            'rankRequirements' => 'required',
            'courseFee' => 'required'
        ]);

        // Create Course
        $course = new Course;
        $course->courseDescription = $request->input('courseDescription');
        $course->subjectDescription = $request->input('subjectDescription');
        $course->rankRequirements = $request->input('rankRequirements');
        $course->courseFee = $request->input('courseFee');
        $course->user_id = auth()->user()->id;
        $course->save();

        return redirect('/courses')->with('success', 'Course Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('course', $course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);

        // Check for correct user
        if(auth()->user()->id !==$course->user_id){
            return view('/courses')->with('error', 'Unauthorized Page');
        }

        return view('courses.edit')->with('course', $course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'courseDescription' => 'required',
            'subjectDescription' => 'required',
            'rankRequirements' => 'required',
            'courseFee' => 'required'
        ]);

        // Create Course
        $course = Course::find($id);
        $course->courseDescription = $request->input('courseDescription');
        $course->subjectDescription = $request->input('subjectDescription');
        $course->rankRequirements = $request->input('rankRequirements');
        $course->courseFee = $request->input('courseFee');
        $course->save();

        return redirect('/courses')->with('success', 'Course Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);

        // Check for correct user
        if(auth()->user()->id !==$course->user_id){
            return view('/courses')->with('error', 'Unauthorized Page');
        }
        
        $course->delete();

        return redirect('/courses')->with('success', 'Course Removed');
    }
}
