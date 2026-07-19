<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient\patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class patientcontroller extends Controller
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

    public function editProfile()
    {
        $patient = Patient::find(Session::get('patient_id'));
        return view('patient.edit-profile', compact('patient'));
    }

    public function updateProfile(Request $request)
    {
        $patient = Patient::find(Session::get('patient_id'));
        $patient->name = $request->name;
        $patient->address = $request->address;
        $patient->phone = $request->phone;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->email = $request->email;
        $patient->save();

        Session::put('patient_name', $patient->name);

        return back()->with('success', 'Your Profile Updated Successfully!');
    }

    public function changePassword()
    {
        return view('patient.change-password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'cpass'  => 'required',
            'npass'  => 'required|min:6',
            'cfpass' => 'required|same:npass'
        ]);

        $patient = Patient::find(Session::get('patient_id'));

        if (Hash::check($request->cpass, $patient->password)) {
            $patient->password = Hash::make($request->npass);
            $patient->save();
            
            return back()->with('success', 'Password Changed Successfully !!');
        } 
        else {
            return back()->with('error', 'Old Password does not match !!');
        }
    }

    public function logout()
    {
        Session::forget('patient_id');
        Session::forget('patient_name');
        
        return redirect()->route('login')->with('success', 'You have successfully logged out!');
    }

    public function bookAppointment()
    {
        return view('patient.book_appointment');
    }

    public function bookAppointmentSubmit(Request $request)
    {
        \App\Models\Appointment::create([
            'doctorId' => $request->doctor,
            'userId' => Session::get('patient_id'),
            'doctorSpecialization' => $request->Doctorspecialization,
            'appointmentDate' => $request->appdate,
            'appointmentTime' => $request->apptime,
        ]);

        return back()->with('success', 'Appointment booked successfully!');
    }

    public function getDoctors($specialization) 
    {
        $doctors = \App\Models\Admin\Doctor::where('specilization', $specialization)->get();
        return response()->json($doctors);
    }

    public function getSlots(Request $request)
    {
        $doctorId = $request->doctor_id;
        $date = $request->date;
        $startTime = "15:00"; // দুপুর ৩টা
        $gap = 30; // ৩০ মিনিট গ্যাপ
        $slots = [];

        // ১০টি স্লট জেনারেট করা হচ্ছে (৩টা থেকে ৭:৩০ পর্যন্ত)
        for ($i = 0; $i < 10; $i++) {
            $time = date('H:i', strtotime("+$i * $gap minutes", strtotime($startTime)));
            
            // চেক করা হচ্ছে এই সময়ে আগে কোনো অ্যাপয়েন্টমেন্ট আছে কি না
            $exists = \App\Models\Appointment::where('doctorId', $doctorId)
                        ->where('appointmentDate', $date)
                        ->where('appointmentTime', $time)
                        ->exists();
            
            if (!$exists) {
                $slots[] = $time;
            }
        }
        return response()->json($slots);
    }
}