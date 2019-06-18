<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol
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
        

        

        if (!$request->secure() && env('APP_ENV') === 'production') {

            URL::forceSchema('https');
            return $next($request); 
        }
            return redirect('/home');

            
        }
}
