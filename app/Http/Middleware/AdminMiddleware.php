<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Admin;
// use Auth;
use Session;


class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // if(session('user.usertype') =='admin')
        // {
        //     return view('admin.dashbord');
        // }else{
        //     return redirect('/admin_panel')->with('status','You are not Allowed to Admin Dashboard');
        // }

        return $next($request);
    }
}
