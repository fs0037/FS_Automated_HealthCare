<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>System Gallery - FS Hospital</title>

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
                            <li><a href="{{ route('hospital.gallery') }}" style="color:#00a3c8; font-weight:700;">Gallery</a></li>
                            <li><a href="{{ route('hospital.contact') }}" style="color:#333; font-weight:600;">Contact Us</a></li>
                            <li><a href="{{ route('hospital.logins') }}" style="color:#333; font-weight:600;">Logins</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="gallery-section">
        <<div id="gallery" class="gallery">    
           <div class="container">
              <div class="inner-title">
                <h2>Our Gallery</h2>
                <p>View Our Gallery</p>
            </div>
              <div class="row">
                @forelse($files as $file)
                    <div class="col-md-3">
                        <div class="filter-button">
                            <img src="{{ asset('assets/images/gallery/' . $file->getFilename()) }}" 
                                alt="Hospital Gallery" 
                                style="width: 100%; height: 200px; object-fit: cover; border-radius: 8px; margin-bottom: 15px;">
                        </div>
                    </div>
                @empty
                    <p>There are currently no images in the gallery.</p>
                @endforelse
            </div>
        </div>
    </section>
</body>
</html>

