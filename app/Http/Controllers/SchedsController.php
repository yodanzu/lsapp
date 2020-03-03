<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
    
        $scheds =  Sched::orderBy('created_at', 'desc')->paginate(10);
        return view('scheds.index')->with('scheds', $scheds);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slotCode = ($request->input('slotCode') !== null ? $request->input('slotCode') : '');
        return view('scheds.create')->with('slotCode', $slotCode);
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
            'slotCode' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'roomId' => 'required',
            'instructorId' => 'required'
        ]);

        $input = $request->all();

        $checkSched = DB::table('scheds')->where(function ($query) use ($request) {
            $query->where('startDate', '<=', $request->input('startDate'))
                    ->where('endDate', '>=', $request->input('startDate'));
        })->orWhere(function($query) use ($request) {
            $query->where('startDate', '>=', $request->input('endDate'))
                ->where('endDate', '<=', $request->input('endDate'));
        })->where('roomId', $request->input('roomId'))
                ->where('instructorId', $request->input('instructorId'))
                ->where('slotCode', $request->input('slotCode'))
            ->get();

            // dd($checkSched);

        if ($checkSched->count() > 0) {

            $data = [
                'error' => "Conflict",
                'slotCode'  => $checkSched[0]->slotCode,
                'startDate'  => $checkSched[0]->startDate,
                'endDate'  => $checkSched[0]->endDate,
                'roomId'  => $checkSched[0]->roomId,
                'instructorId'  => $checkSched[0]->instructorId,
            ];

            return redirect('/scheds')->with($data);
        } else {
            // Create Sched
            $sched = new Sched;
            $sched->slotCode = $request->input('slotCode');
            $sched->startDate = $request->input('startDate');
            $sched->endDate = $request->input('endDate');
            $sched->roomId = $request->input('roomId');
            $sched->instructorId = $request->input('instructorId');
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
            'slotCode' => 'required',
            'startDate' => 'required',
            'endDate' => 'required',
            'roomId' => 'required',
            'instructorId' => 'required'
        ]);

        $input = $request->all();

        $checkSched = DB::table('scheds')->where(function ($query) use ($request) {
            $query->where('startDate', '<=', $request->input('startDate'))
                    ->where('endDate', '>=', $request->input('startDate'));
        })->orWhere(function($query) use ($request) {
            $query->where('startDate', '>=', $request->input('endDate'))
                ->where('endDate', '<=', $request->input('endDate'));
        })->where('roomId', $request->input('roomId'))
                ->where('instructorId', $request->input('instructorId'))
                ->where('slotCode', $request->input('slotCode'))
            ->get();

            // dd($checkSched);

        if ($checkSched->count() > 0) {

            $data = [
                'error' => "Conflict",
                'slotCode'  => $checkSched[0]->slotCode,
                'startDate'  => $checkSched[0]->startDate,
                'endDate'  => $checkSched[0]->endDate,
                'roomId'  => $checkSched[0]->roomId,
                'instructorId'  => $checkSched[0]->instructorId,
            ];

            return redirect('/scheds')->with($data);
        } else {
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
