<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App;
use Config;

class Locale
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
      // App::setLocale(Session::get('locale'));
      // $loc=Session::get('locale');
      return $next($request);
    }
}
