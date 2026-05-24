<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DoctorMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('doctor_id')) {
            return redirect()->route('doctor.login')->with('error', 'Please login first to access the Doctor Dashboard.');
        }
        return $next($request);
    }
}
