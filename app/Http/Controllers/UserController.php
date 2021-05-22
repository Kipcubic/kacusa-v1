<?php

namespace App\Http\Controllers;

use App\Mail\EmailCredentials;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Access\Gate;

class UserController extends Controller
{
   
    public function index()
    {
        $this->authorize('viewAny',Auth::user());

        $users=User::all();
        return view('users.index',
        [
            'users'=>$users
        ]);
    }

    public function create()
    {

        $this->authorize('view',Auth::user());


        $roles=Role::all();
        return view('users.create',[
            'roles'=>$roles
        ]);
    }


    public function store(Request $request)
    {


        $this->authorize('create',Auth::user());

        $validated = $request->validate([
            'name'=>'required',
            'email' => 'required|unique:users|max:255|email:rfc,dns',
            'role' => 'required',
        ]);

        $password=Str::random(10);

        $user=new User;
        $user->name= $request->name;
        $user->email=$request->email;
        $user->password=Hash::make($password);
        $user->save();

   
        $user->roles()->attach($request->role);

        // Send Email To Clients With Credentials

        return redirect('/user')->with('success','User Added Successully');
    }


    public function show(User $user)
    {
        $this->authorize('view',Auth::user());

        return view('users.show',[
            'user'=>$user
        ]);
    }

    public function edit(User $user)
    {


        $this->authorize('create',Auth::user());


        $roles=Role::all();

        return view('users.edit',[
            'user'=>$user,
            'roles' =>$roles,
            'selectedRole'=>$user->roles->first()->id,
           
            
        ]);
    }

   
    public function update(Request $request,User $user)
    {
        $this->authorize('update',Auth::user());

        $user->update([
            'name'=>$request->name,
            'email'=>$request->email
        ]);

        $user->roles()->sync($request->role);

        return back()->with('success','User Updated!');
    }

    public function destroy(User $user)
    {        $this->authorize('delete',Auth::user());

            $user->delete();
            return redirect('/user')->with('success','User Deleted!');    
    }
}
