<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About Us - FS Hospital</title>

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
                            <li><a href="{{ route('hospital.about') }}" style="color:#00a3c8; font-weight:700;">About Us</a></li>
                            <li><a href="{{ route('hospital.gallery') }}" style="color:#333; font-weight:600;">Gallery</a></li>
                            <li><a href="{{ route('hospital.contact') }}" style="color:#333; font-weight:600;">Contact Us</a></li>
                            <li><a href="{{ route('hospital.logins') }}" style="color:#333; font-weight:600;">Logins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="about-us">
        <div class="container" style="padding: 50px 0; font-family: Arial, sans-serif;">
            <div style="text-align: center; margin-bottom: 40px;">
                <h1 style="color: #2c3e50; border-bottom: 3px solid #27ae60; display: inline-block; padding-bottom: 10px;">
                    {{ $aboutData->PageTitle ?? 'About Our Hospital' }}
                </h1>
            </div>

            <div class="row" style="background: #f9f9f9; padding: 30px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">
                <div class="col-md-12 blockquote">
                    <div style="font-size: 18px; line-height: 1.8; color: #555;">
                        {!! $aboutData->PageDescription ?? 'No description available.' !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>