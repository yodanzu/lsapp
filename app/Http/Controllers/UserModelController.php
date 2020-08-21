<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profiling.admin.user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('profiling.admin.user.create');
    }

     public function validatUser(Request $request)
    {
        $rules = [
            'employeeId' => 'required|unique:user,employeeId',
            'fullName' => 'required|unique:user,fullName',
            'birthDate' => 'required|unique:user,birthDate',
            'address' => 'required|unique:user,address',
            'phoneNumber' => 'required|unique:user,phoneNumber',
            'userType' => 'required|unique:user,userType',
            'email' => 'required|unique:user,email',
            'password' => 'required|unique:user,password'
        ];

        $messages= [
            'employeeId' => 'This field is required!!',
            'fullName.required' => 'This field is required!!',
            'birthDate' => 'This field is required!!',
            'address.required' => 'This field is required!!',
            'phoneNumber.required' => 'This field is required!!',
            'userType.required' => 'This field is required!!',
            'email.required' => 'This field is required!!',
            'password.required' => 'This field is required!!',
            'employeeId.unique' => 'This '.$request->employeeId.' is already exists please changed..!',
            'fullName.unique' => 'This '.$request->fullName.' is already exists please changed..!'
            'birthDate.unique' => 'This '.$request->birthDate.' is already exists please changed..!',
            'address.unique' => 'This '.$request->address.' is already exists please changed..!'
            'phoneNumber.unique' => 'This '.$request->phoneNumber.' is already exists please changed..!',
            'userType.unique' => 'This '.$request->userType.' is already exists please changed..!'
            'email.unique' => 'This '.$request->email.' is already exists please changed..!',
            'password.unique' => 'This '.$request->password.' is already exists please changed..!'
        ];

        return $this->validate($request, $rules, $messages);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateUser($request);
        $data = $request->only([
            'employeeId',
            'fullName',
            'birthDate',
            'address',
            'phoneNumber',
            'userType',
            'email',
            'password'
        ]);

        UserModel::create($data);

        return redirect()->back()->with('success_message', 'Successfully Added User Information');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
