<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use App\Models\User;
class LeadershipController extends Controller
{
  
    public function index()
    {
        return view('leadership.index',[
            'users'=>User::has('roles')->get()
        ]);
    }

   
    public function create()
    {
        return view('leadership.create',[
            'users'=>User::all(),
            'roles'=>Role::all()
        ]);
    }

    
    public function store(Request $request)
    {
        User::find($request->user)->roles()->attach($request->role);
        return back()->with('success','Added successfully!');
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }
}
