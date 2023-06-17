<?php

namespace App\Http\Middleware;

use Closure;
use Symfony\Component\HttpFoundation\Response;

class AuthenticationMiddleware
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
        $username = $request->username;
        $password = $request->password;

        if ($username == 'h' && $password == 'h') {
            return $next($request);
        }
        return new Response(view("authentication.login")->with("error", "Invalid Credentials"));
    }
}
