<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckEmail
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $email = $request->email;
        if(filter_var($email,FILTER_VALIDATE_EMAIL)){
            return $next($request);

        }
     else {
        // Email không hợp lệ
        echo "Email không hợp lệ dsadasdasd";
    }

    }
}
