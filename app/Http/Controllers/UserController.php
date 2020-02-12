<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Users::all();  
        return view('crud')->with([
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add');
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
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'contact' => 'required'
        ]);
        
        $users = new Users;
        $users->name = $request->input('name');
        $users->age = $request->input('age');
        $users->email = $request->input('email');
        $users->contact = $request->input('contact');
        $users->save();

        return redirect('/crud')->with('success', request('name').' has been added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = Users::find($id);
        return view('view')->with([
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Users::find($id);
        return view('edit')->with([
            'user' => $user
        ]);
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
            'name' => 'required',
            'age' => 'required',
            'email' => 'required',
            'contact' => 'required'
        ]);

        $users = Users::find($id);
        $users->name = $request->input('name');
        $users->age = $request->input('age');
        $users->email = $request->input('email');
        $users->contact = $request->input('contact');
        $users->save();

        return redirect('/crud')->with('success', 'Record updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = Users::find($id);
        $users->delete();

        return redirect('/crud')->with('success', 'Record deleted.');
    }
}
