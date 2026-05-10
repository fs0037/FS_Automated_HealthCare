<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Logins - FS Hospital</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>


<body>
    <header id="menu-jk">
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-12" style="color:#000; font-weight:bold; font-size:24px; margin: 10px 40px;">
                        <a href="{{ url('/') }}" style="text-decoration:none; color:inherit;">FS HOSPITAL</a>
                    </div>
                    <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                        <ul style="list-style:none; display:flex; gap:2px; margin: 5px; justify-content: center;">
                            <li><a href="{{ url('/') }}" style="color:#333; font-weight:600;">Home</a></li>
                            <li><a href="{{ route('hospital.services') }}" style="color:#333; font-weight:600;">Services</a></li>
                            <li><a href="{{ route('hospital.about') }}" style="color:#333; font-weight:600;">About Us</a></li>
                            <li><a href="{{ route('hospital.gallery') }}" style="color:#333; font-weight:600;">Gallery</a></li>
                            <li><a href="{{ route('hospital.contact') }}" style="color:#333; font-weight:600;">Contact Us</a></li>
                            <li><a href="{{ route('hospital.logins') }}" style="color:#00a3c8; font-weight:700;">Logins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

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

</body>
</html>


