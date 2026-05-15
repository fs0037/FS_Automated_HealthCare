<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required'
        ]);

        $admin = admin::where('email', $request->email)->first();

        if ($admin && Hash::check($request->password, $admin->password)) {
            Session::put('admin_id', $admin->id);
            Session::put('admin_username', $admin->username);
            
            return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
        }

        return back()->with('error', 'Invalid Email or Password!');
    }

    public function dashboard()
    {
        $data = [
            'totalUsers'        => 0,
            'totalDoctors'      => 0,
            'totalAppointments' => 0,
            'totalPatients'     => 0,
            'newQueries'        => 0,
        ];

        return view('admin.dashboard', $data);
    }

    public function logout()
    {
        Session::forget('admin_id');
        Session::forget('admin_username');
        return redirect()->route('admin.login')->with('success', 'Logged out!');
    }
}