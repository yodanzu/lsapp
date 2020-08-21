<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourseModel as Course;
use App\Http\Requests\Course\StoreCourseFormRequest;
use Crypt;

class CourseModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::all();
        return view('profiling.course.index',compact('data'));
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



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\ResponseCourse
     */
    public function store(StoreCourseFormRequest $request)
    {

        $data = $request->getData();

        Course::create($data);

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
    public function edit($id)
    {
        $url = Crypt::decrypt($id);

        $data = Course::findOrFail($url);
        return view('profiling.course.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CourseModel  $courseModel
     * @return \Illuminate\Http\Response
     */
    public function update(StoreCourseFormRequest $request)
    {
        $data = $request->getData();
        $data->update();

        return back();
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
