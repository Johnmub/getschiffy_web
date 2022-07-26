<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocaleValid
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $locale = $request->locale;
        $path = $request->path();

        if(!in_array($locale, ['en', 'es', 'zh', 'hi', 'tl'])) { 
            if(strpos($path, '/nfts'))     
                return redirect('en/nfts');

            return redirect('en/');
        }

        App::setLocale($locale);

        return $next($request);
    }
}
