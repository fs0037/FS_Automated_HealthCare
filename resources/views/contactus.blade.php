<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Contact Us - FS Hospital</title>

    <link rel="shortcut icon" href="{{ asset('assets/images/fav.jpg') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawsom-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />
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
                            <li><a href="{{ route('hospital.contact') }}" style="color:#00a3c8; font-weight:700;">Contact Us</a></li>
                            <li><a href="{{ route('hospital.logins') }}" style="color:#333; font-weight:600;">Logins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="contact-rooo contact-us-single">
        <div class="container" style="padding: 50px 0; font-family: Arial, sans-serif;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h1 style="color: #2c3e50; border-bottom: 3px solid #e74c3c; display: inline-block; padding-bottom: 10px;">
                    {{ $contactData->PageTitle ?? 'Contact Us' }}
                </h1>
            </div>

            <div class="row">
                <div class="col-md-6" style="background: #fff; padding: 30px; border: 1px solid #ddd; border-radius: 10px;">
                    <h3 style="color: #27ae60;">Contact Information</h3>
                    <hr>
                    <p style="font-size: 16px;"><strong>📍 Address:</strong> {{ $contactData->PageDescription ?? 'Hospital Location' }}</p>
                    <p style="font-size: 16px;"><strong>📞 Phone:</strong> {{ $contactData->MobileNumber ?? 'Not Provided' }}</p>
                    <p style="font-size: 16px;"><strong>✉️ Email:</strong> <a href="mailto:{{ $contactData->Email }}">{{ $contactData->Email ?? 'Not Provided' }}</a></p>
                    <p style="font-size: 16px;"><strong>⏰ Opening Time:</strong> {{ $contactData->OpenningTime ?? 'Not Provided' }}</p>
                </div>
                
                <div class="col-md-6" style="padding-left: 30px;">
                    <div style="background: #2c3e50; color: #fff; padding: 30px; border-radius: 10px;">
                        <h4>Emergency Support</h4>
                        <p>Our medical team is available 24/7 for any urgent needs.</p>
                        <h2 style="color: #f1c40f;">Call: {{ $contactData->MobileNumber }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>