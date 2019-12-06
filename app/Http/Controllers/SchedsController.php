<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Eloquent;
use App\Sched;
use DB;


class SchedsController extends Controller
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
        //$scheds = Sched::all();
        //return Sched::where('slot_code', 'STCW Courses')->get();

        /* SQL type query 
        $scheds = DB::select('SELECT * FROM schedes');*/

        //$scheds =  Sched::orderBy('slot_code', 'desc')->take(1)->get();
        //$scheds =  Sched::orderBy('slot_code', 'desc')->get();

        $scheds =  Sched::orderBy('created_at', 'decs')->paginate(10);
        return view('scheds.index')->with('scheds', $scheds);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('scheds.create');
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
            'slot_code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'room_id' => 'required',
            'instructor_id' => 'required'
        ]);

        // dd($request->input('start_date'));

        // Sched::enableQueryLog();

        // $slot_code = $request->input('slot_code');
        // $start_date = $request->input('start_date');
        // $end_date = $request->input('end_date');
        // $room_id = $request->input('room_id');
        // $instructor_id = $request->input('instructor_id');

        $input = $request->all();

        $checkSched = Sched::where(function ($query) use ($request) {
            $query->whereBetween('start_date', [$request->input('start_date'), $request->input('end_date')]); 
        })->orWhere(function($query) use ($request) {
            $query->whereBetween('end_date', [$request->input('start_date'), $request->input('end_date')]);
        })->where('room_id', [$request->input('end_date')])
            ->where('instructor_id', [$request->input('instructor_id')])
            ->where('slot_code', [$request->input('instructor_id')])
            ->get();
            //  dd($checkSched);

        // $checkSched = Sched::whereBetween('start_date', [$request->input('start_date'), $request->input('end_date')]);

            // dd(Sched::getQueryLog());

        if ($checkSched->count() > 0) {
            //echo $checkSched->getSlotCode();
            // $checkSched->pluck('start_date', 'end_date', 'end_date', 'instructor_id', 'slot_code')->toArray();
            echo "<pre>";
            foreach ($checkSched as $key => $value) {
                var_dump($value);
            }
            echo "</pre>";
            exit;
            
            return redirect('/scheds')->with('error', 'Conflict');
        } else {
            // Create Sched
            $sched = new Sched;
            $sched->slot_code = $request->input('slot_code');
            $sched->start_date = $request->input('start_date');
            $sched->end_date = $request->input('end_date');
            $sched->room_id = $request->input('room_id');
            $sched->instructor_id = $request->input('instructor_id');
            $sched->user_id = auth()->user()->id;
            $sched->save();

            return redirect('/scheds')->with('success', 'Schedule Created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sched = Sched::find($id);
        return view('scheds.show')->with('sched', $sched);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sched = Sched::find($id);

        // Check for correct user
        if(auth()->user()->id !==$sched->user_id){
            return view('/scheds')->with('error', 'Unauthorized Page');
        }

        return view('scheds.edit')->with('sched', $sched);
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
            'slot_code' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'room_id' => 'required',
            'instructor_id' => 'required',
        ]);

        // Create Sched
        $sched = Sched::find($id);
        $sched->slot_code = $request->input('slot_code');
        $sched->start_date = $request->input('start_date');
        $sched->end_date = $request->input('end_date');
        $sched->room_id = $request->input('room_id');
        $sched->instructor_id = $request->input('instructor_id');
        $sched->save();

        return redirect('/scheds')->with('success', 'Schedule Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sched = Sched::find($id);

        // Check for correct user
        if(auth()->user()->id !==$sched->user_id){
            return view('/scheds')->with('error', 'Unauthorized Page');
        }
        
        $sched->delete();
        return redirect('/scheds')->with('success', 'Schedule Removed');
    }
}
