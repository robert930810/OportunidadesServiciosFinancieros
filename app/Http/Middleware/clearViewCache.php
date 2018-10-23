<?php

namespace App\Http\Middleware;

use Closure;

class clearViewCache
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
        if (env('APP_DEBUG') || env('APP_ENV') === 'local') 
            Artisan::call('view:clear');
        
        return $next($request);
    }
}
