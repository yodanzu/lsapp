<?php

namespace App\Http\Controllers;

use App\Models\CourseModel;
use Illuminate\Http\Request;

class CourseModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiling.course.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiling.course.create');
    }


    public function validateCourse(Request $request)
    {
        $rules = [
            'course_code' => 'required|unique:course,course_code',
            'course_description' => 'required|unique:course,course_description'
        ];

        $messages= [
            'course_code.required' => 'This field is required!!',
            'course_description.required' => 'This field is required!!',
            'course_code.unique' => 'This '.$request->course_code.' is already exists please changed..!',
            'course_description.unique' => 'This '.$request->course_description.' is already exists please changed..!'
        ];

        return $this->validate($request, $rules, $messages);

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\ResponseCourse
     */
    public function store(Request $request)
    {
        $this->validateCourse($request);
        $data = $request->only([
            'course_code',
            'course_description'
        ]);

        CourseModel::create($data);

        return redirect()->back()->with('success_message', 'Successfully Added Course Information');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CourseModel  $courseModel
     * @return \Illuminate\Http\Response
     */
    public function show(CourseModel $courseModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CourseModel  $courseModel
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseModel $courseModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseModel  $courseModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseModel $courseModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CourseModel  $courseModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseModel $courseModel)
    {
        //
    }
}
