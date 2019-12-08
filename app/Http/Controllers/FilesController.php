<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FilesController extends Controller
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
        //$files = File::all();
        //return File::where('description', 'Reviewer 1')->get();

        /* SQL type query 
        $files = DB::select('SELECT * FROM files');*/

        //$files =  File::orderBy('description', 'desc')->take(1)->get();
        //$files =  File::orderBy('description', 'desc')->get();

        $files =  File::orderBy('created_at', 'decs')->paginate(10);
        return view('files.index')->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $description = ($request->input('description') !== null ? $request->input('description') : '');
        return view('files.create')->with('description', $description);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'description' => 'required'
        ]);

        // Create File
        $file = new File;
        $file->description = $request->input('description');
        $file->user_id = auth()-user()->id;
        $file->save();

        return redirect('/files')->with('success', 'Reviewers & Manuals Created'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $file = File::find($id);
        return view('files.show')->with('file', $file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $file = File::find($id);

        // Check for correct user
        if(auth()->user()->id !==$file->user_id){
            return view('/files')->with('error', 'Unauthorized Page');
        }

        return view('files.edit')->with('file', $file);
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
            'description' => 'required'
        ]);

        // Create File
        $file = File::find($id);
        $file->description = $request->input('description');
        $file->save();

        return redirect('/files')->with('success', 'Reviewers & Manuals Updated'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $file = File::find($id);

        // Check for correct user
        if(auth()->user()->id !==$file->user_id){
            return view('/files')->with('error', 'Unauthorized Page');
        }
        
        $file->delete();
        return redirect('/files')->with('success', 'Reviewers & Manuals Removed');
    }
}
