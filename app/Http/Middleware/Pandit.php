<?php

namespace App\Http\Middleware;

use App\Models\Pandits;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class Pandit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('PANDIT_ID') && Session::get('PANDIT_ID')!=='') {
            $pandit = Pandits::find(Session::get('PANDIT_ID'));
            View::share('LOGGED_IN_PANDIT',$pandit);
            return $next($request);
        }else{
            return to_route('login');
        }
    }
}
