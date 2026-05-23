<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Admin\DoctorSpecialization;
use App\Models\Admin\Doctor;


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
        $totalDoctors = \App\Models\Admin\Doctor::count();

        $data = [
            'totalUsers'        => 0,
            'totalDoctors'      => $totalDoctors,
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

    public function doctorSpecialization()
    {
        $specializations = DoctorSpecialization::all();
        return view('admin.doctor-specilization', compact('specializations'));
    }

    public function addSpecialization(Request $request)
    {
        $request->validate(['doctorspecilization' => 'required']);
        DoctorSpecialization::create(['specilization' => $request->doctorspecilization]);
        return back()->with('success', 'Doctor Specialization added successfully !!');
    }

    public function deleteSpecialization($id)
    {
        DoctorSpecialization::find($id)->delete();
        return back()->with('success', 'Data deleted successfully !!');
    }

    public function addDoctor()
    {
        $specializations = DoctorSpecialization::all();
        return view('admin.add-doctor', compact('specializations'));
    }

    public function storeDoctor(Request $request)
    {
        $request->validate([
            'Doctorspecialization' => 'required',
            'docname' => 'required',
            'clinicaddress' => 'required',
            'docfees' => 'required',
            'doccontact' => 'required',
            'docemail' => 'required|email|unique:doctors,docEmail',
        ]);

        $doctorId = Doctor::generateDoctorId(); 
        $defaultPassword = Hash::make($request->docemail);

        Doctor::create([
            'userid'        => $doctorId,
            'specilization' => $request->Doctorspecialization,
            'doctorName'    => $request->docname,
            'address'       => $request->clinicaddress,
            'docFees'       => $request->docfees,
            'contactno'     => $request->doccontact,
            'docEmail'      => $request->docemail,
            'password'      => $defaultPassword,
        ]);

        return redirect()->route('admin.manage.doctors')->with('success', "Doctor Added Successfully! User ID: $doctorId");
    }

    public function manageDoctors()
    {
        $doctors = Doctor::all();
        return view('admin.manage-doctors', compact('doctors'));
    }

    public function deleteDoctor($id)
    {
        Doctor::find($id)->delete();
        return back()->with('success', 'Doctor Data deleted !!');
    }
}