<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (auth('seller')->check()) {
            if(auth('seller')->user()->status == 'approved'){
                return $next($request);    
            }else {
               return redirect()->route('nonSeller');
            }
            
        }
        auth()->guard('seller')->logout();
        return redirect()->route('seller.auth.login');
    }
}
