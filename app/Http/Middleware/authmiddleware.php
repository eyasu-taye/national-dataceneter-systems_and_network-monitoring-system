<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\systemcotroller;
use App\user;
use DB;

class authmiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // return dd($request->id1."---". $request->id2);
        $user = DB::select('select * from users where `email`=? && `remember_token`=?', [$request->id1, $request->id2]);
        if (count($user)) {
            return $next($request);
        }else{
         return redirect('/');
          }
                       
    }
}

