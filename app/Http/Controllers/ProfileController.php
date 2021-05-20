<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
   public function index(){
        return view('profile.index');
   }

   public function update(Request $request){

    $user=Auth::user();
    $user->fname=$request->fname;
    $user->lname=$request->lname;
    $user->village=$request->village;
    $user->phone_number=$request->phone_number;
    $user->id_number=$request->id_number;
    $user->course=$request->course;
    $user->current_institution=$request->current_institution;
    $user->campus=$request->campus;
    $user->admission_number=$request->admission_number;
    $user->year_of_study=$request->year_of_study;

    $user->save();
    return back()->with('success','Details Updated Successfully!');
   }
}
