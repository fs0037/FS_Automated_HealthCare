<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        if(Session::has('admin_id')){
            return redirect()->route('admin.dashboard');
        }
        return view('admin.admin_login');
    }

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

    public function logout()
    {
        Session::forget('admin_id');
        Session::forget('admin_username');
        return redirect()->route('admin.login')->with('success', 'Logged out!');
    }
}