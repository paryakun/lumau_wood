<?php

namespace App\Http\Middleware;

use Closure;
use Toastr;

class Demo
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
        if ($request->isMethod('POST')) {
           Toastr::error("Demo Version ! Change Not Possible"); 
           return redirect()->back();
        }
        return $next($request);
    }
}
