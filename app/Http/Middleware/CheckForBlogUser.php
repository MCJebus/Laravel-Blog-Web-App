<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\BlogUser;

class CheckForBlogUser
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
        return $next($request);
    }
}
