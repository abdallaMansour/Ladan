<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLangAr
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // $path = base_path('.env');

        // if (file_exists($path)) {
        //     file_put_contents($path, str_replace(
        //         'APP_LOCALE=en',
        //         'APP_LOCALE=ar',
        //         file_get_contents($path)
        //     ));
        // }
        // App::setlocale('ar');
        return $next($request);
    }
}
