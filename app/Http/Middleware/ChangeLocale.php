<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ChangeLocale
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
        $locale = $request->lang ?? 'pt';

        if(!in_array($locale, ['pt', 'en', 'es'])){
            \abort(404);
        }

        app()->setLocale($locale);

        return $next($request);
    }
}
