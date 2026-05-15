<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PatientMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('patient_id')) {
            return redirect()->route('login')->with('error', 'Please login to access this page.');
        }

        return $next($request);
    }
}
