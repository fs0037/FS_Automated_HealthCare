@extends('master')

@section('title', 'System Logins - Automated Health Care System')

@section('content')
    <section class="login-section">
        <div class="container">
            <h2 class="system-title">System Logins</h2>
            <div class="title-line"></div>

            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/patient.jpg') }}" alt="Patient">
                        <h5>Patient Login</h5>
                        <p>Access your medical records and appointments.</p>
                        <a href="{{ route('login') }}" class="btn btn-click">Click Here</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/doctor.jpg') }}" alt="Doctor">
                        <h5>Doctors Login</h5>
                        <p>Manage your patients and schedules easily.</p>
                        <a href="#" class="btn btn-click">Click Here</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/nurse.jpg') }}" alt="Nurse">
                        <h5>Nurses Login</h5>
                        <p>View patient care plans and update vital signs.</p>
                        <a href="#" class="btn btn-click">Click Here</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/lab.jpg') }}" alt="Lab Staff">
                        <h5>Lab Staffs Login</h5>
                        <p>Upload test results and manage diagnostics.</p>
                        <a href="#" class="btn btn-click">Click Here</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/staff.jpg') }}" alt="Staff">
                        <h5>Administrative Login</h5>
                        <p>Manage Administrative tasks and daily operations.</p>
                        <a href="#" class="btn btn-click">Click Here</a>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="login-card">
                        <img src="{{ asset('assets/images/admin.jpg') }}" alt="Admin">
                        <h5>Admin Login</h5>
                        <p>Full control over the hospital management system.</p>
                        <a href="#" class="btn btn-click">Click Here</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


