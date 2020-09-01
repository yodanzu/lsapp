<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Crypt;
use App\Http\Requests\User\UserStoreFormRequest;
use App\Http\Requests\User\UserUpdateFormRequest;

class UserModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function index()
    {
        $data = User::all();
        return view('profiling.admin.user.index',compact('data'));
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



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreFormRequest $request)
    {
        
        $data = $request->getData();
        $data['password'] = bcrypt('sample');
        /**dd($data);**/
        $user = User::create($data);
        return redirect()->back ()->with('success_message', 'Succesfully Added User Information');

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
        $url = Crypt::decrypt($id);

        $data = User::findOrFail($url);
        return view('profiling.admin.user.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateFormRequest $request, $id)
    {
        $url = Crypt::decrypt($id);
        $data = $request->getData();
        $user = User::findOrFail($url);
        $user->password = bycrypt('sample');
        $user->update($data);

        return back()->with('success_message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
