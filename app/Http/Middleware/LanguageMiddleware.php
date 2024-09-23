<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;

class LanguageMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        $lang = $request->get('lang', session('lang', 'id'));
        session(['lang' => $lang]);

        // Buat instance GoogleTranslate dengan bahasa target
        $tr = new GoogleTranslate($lang);

        // Simpan instance ke dalam view
        view()->share('translate', $tr);
        view()->share('defaultLang', 'id'); // Simpan bahasa default

        return $next($request);
    }
}
