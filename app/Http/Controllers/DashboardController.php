<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use App\Models\Contact;
use App\Models\EmailActivity;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function __invoke(Request $request)
    {
        $users=User::all();
        return view('dashboard',[
            'users'=>$users,
            'recentusers'=>$users->sortByDesc('email_verified_at')->take(10),
            'usersToday'=>User::whereDate('created_at',today())->count(),
            'usersThisMonth'=>User::whereMonth('created_at', Carbon::now()->month)->count(),
        ]);
    }
}
