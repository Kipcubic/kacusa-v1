<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserRole
{
   
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_member){
            return redirect('/home');
        }
        return $next($request);
    }
}
