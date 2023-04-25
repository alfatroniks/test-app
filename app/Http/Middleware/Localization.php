<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;
use Symfony\Component\HttpFoundation\Response;

class Localization
{
    public static function getLocale() : null|string
    {
        $mailLanguage = config('app.fallback_locale');
        $languages = config('app.available_locales');

        $uri = Request::path();
        $segmentsURI = explode('/',$uri);

        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], $languages)) {

            if ($segmentsURI[0] != $mailLanguage) return $segmentsURI[0];
        }
        return null;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        $locale = self::getLocale();

        if ($locale)
            App::setLocale($locale);
        else
            App::setLocale(config('app.fallback_locale'));

        return $next($request);
    }
}
