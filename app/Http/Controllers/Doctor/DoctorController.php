<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Doctor;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class DoctorController extends Controller
{
    public function login()
    {
        return view('doctor.doctor_login');
    }

    public function loginSubmit(Request $request)
    {
        $request->validate([
            'userid'   => 'required',
            'password' => 'required'
        ]);

        $doctor = Doctor::where('userid', $request->userid)->first();

        if ($doctor && Hash::check($request->password, $doctor->password)) {
            Session::put('doctor_id', $doctor->id);
            Session::put('doctor_name', $doctor->doctorName);
            Session::put('doctor_userid', $doctor->userid);
            
            return redirect()->route('doctor.dashboard')->with('success', 'Welcome to Doctor Panel!');
        }

        return back()->with('error', 'Invalid User ID or Password!');
    }
 
    public function forgotPassword()
    {
        return view('doctor.doctor_forgot_password');
    }

    public function forgotPasswordSubmit(Request $request)
    {
        $request->validate([
            'userid'    => 'required',
            'contactno' => 'required'
        ]);

        $doctor = Doctor::where('userid', $request->userid)
                        ->where('contactno', $request->contactno)
                        ->first();

        if ($doctor) {
            Session::put('reset_doctor_userid', $doctor->userid);
            return redirect()->route('doctor.password.reset.page');
        }

        return back()->with('error', 'User ID or Contact Number does not match our records!');
    }

    public function resetPassword()
    {
        if(!Session::has('reset_doctor_userid')){
            return redirect()->route('doctor.password.recovery')->with('error', 'Please verify your account first.');
        }
        return view('doctor.doctor_reset_password');
    }

    public function resetPasswordSubmit(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6',
            'password_again' => 'required|same:password'
        ]);

        $userid = Session::get('reset_doctor_userid');
        
        if (!$userid) {
            return redirect()->route('doctor.password.recovery')->with('error', 'Session expired. Please verify your account again.');
        }

        $doctor = Doctor::where('userid', $userid)->first();
        
        if ($doctor) {
            $doctor->password = Hash::make($request->password);
            $doctor->save();
            
            Session::forget('reset_doctor_userid'); 
            
            return redirect()->route('doctor.login')->with('success', 'Password reset successfully! Please login with your new password.');
        }

        return redirect()->route('doctor.password.recovery')->with('error', 'Something went wrong!');
    }

    public function dashboard()
    {
        return view('doctor.dashboard');
    }

    public function logout()
    {
        Session::forget('doctor_id');
        Session::forget('doctor_name');
        Session::forget('doctor_userid');
        
        return redirect()->route('doctor.login')->with('success', 'You have successfully logged out!');
    }



}

