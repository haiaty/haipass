<?php
/**
 * Created by PhpStorm.
 * User: haiaty
 * Date: 09/08/17
 * Time: 1.16
 */

namespace App\Http\Middleware;


use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class SetLocale
{

    public function handle(Request $request, Closure $next)
    {

        $locale = $request->segment(1);


        if($this->isALocale($locale)){
            App::setLocale($locale);
        }else {

            App::setLocale('en');
        }


        return $next($request);
    }

    private function isALocale($locale)
    {
        $availableLocales = [
            'it',
            'en'
        ];

        return in_array($locale, $availableLocales);
    }
}