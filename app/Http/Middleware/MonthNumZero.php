<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MonthNumZero
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
        if($request->num==0){
            return redirect('month/1');
        }
        return $next($request);
    }
}
