<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient\patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class PatientController extends Controller
{
    public function loginSubmit(Request $request)
    {
        $patient = Patient::where('userid', $request->userid)->first();

        if ($patient && Hash::check($request->password, $patient->password)) {
            
            Session::put('patient_id', $patient->id);
            Session::put('patient_name', $patient->name);
            
            return redirect()->route('patient.dashboard')->with('success', 'Successfully Logged In!');
        }

        return back()->with('error', 'Invalid User ID or Password!');
    }


    public function passwordVerify(Request $request)
    {
        $patient = Patient::where('email', $request->email)
                          ->where('userid', $request->userid) 
                          ->first();

        if ($patient) {
            Session::put('reset_userid', $patient->userid);
            return redirect()->route('password.reset.page');
        }

        return back()->with('error', 'User ID or Email does not match our records!');
    }

    public function passwordUpdate(Request $request)
    {
        $request->validate([
            'new_password' => 'required|min:6',
            'confirm_password' => 'required|same:new_password'
        ]);

        $userid = Session::get('reset_userid');
        
        if (!$userid) {
            return redirect()->route('password.recovery')->with('error', 'Session expired. Please verify your account again.');
        }

        $patient = Patient::where('userid', $userid)->first();
        if ($patient) {
            $patient->password = Hash::make($request->new_password);
            $patient->save();
            
            Session::forget('reset_userid'); 
            
            return redirect()->route('login')->with('success', 'Password reset successful! Please login with your new password.');
        }

        return redirect()->route('password.recovery')->with('error', 'Something went wrong!');
    }

    
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'nullable|string',
        ]);

        $generatedUserId = Patient::generatePatientId();

        $password = $request->created_by == 'reception' 
                ? Hash::make($request->email) 
                : Hash::make($request->password);


        Patient::create([
            'userid'   => $generatedUserId,
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'gender'   => $request->gender,
            'age'      => $request->age,
            'address'  => $request->address,
            'password' => $password,
            'role'     => 'patient',
        ]);

        return redirect()->route('login')->with('success', "Successfully Created Account..! Your User ID: $generatedUserId");
    }
}