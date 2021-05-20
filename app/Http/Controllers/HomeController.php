<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }
    public function index()
    {
        return view('home.index',[
            'events'=>Events::all()
        ]);     
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
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
