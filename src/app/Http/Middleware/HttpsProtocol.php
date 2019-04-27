<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class HttpsProtocol {

    public function handle($request, Closure $next)
    {
        if (!$request->secure()) {
            if( env('APP_ENV') == 'production' )
                return redirect()->secure($request->getRequestUri());
        }

        return $next($request);
    }
}