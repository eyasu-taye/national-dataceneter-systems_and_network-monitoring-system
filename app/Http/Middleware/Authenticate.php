<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\dbcontroller;
use App\logedin_user;
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
    public function handle(Request $request, $id, $id1, Closure $next)
    {

 
        $user = DB::select('select * from users where `email`=? && `remember_token`=?', [$id, $id1]);
        if (count($user)) {
            return $next($request);
        }else{
         return redirect('/');
          }
                       
    }
}

