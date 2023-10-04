<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ChekcRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles): Response
    {
        $user = auth()->user();

        if (!Auth::check()) {
            return redirect('login');
        } else {
            if ($user->role->nama != $roles) {
                return back()->withErrors('Role Tidak Sesuai');
            } else {
                return $next($request);
            }
        }
    }
}
