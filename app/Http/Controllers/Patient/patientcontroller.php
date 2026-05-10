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
                          ->where('full_name', $request->fullname)
                          ->first();

        if ($patient) {
            return back()->with('success', 'Account found! (Password reset process will be here)');
        }

        return back()->with('error', 'Name or Email does not match our records!');
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

        // ২. ডাটাবেসে ডেটা সেভ করা
        Patient::create([
            'userid'   => $generatedUserId,
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'gender'   => $request->gender,
            'dob'      => $request->dob,
            'address'  => $request->address,
            'password' => $password,
            'role'     => 'patient',
        ]);

        return redirect()->route('login')->with('success', "Successfully Created Account..! Your User ID: $generatedUserId");
    }
}