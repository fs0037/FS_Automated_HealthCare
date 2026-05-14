<header id="menu-jk">
    <div id="nav-head" class="header-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">
                    FS
                    <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                </div>
                <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ route('hospital.services') }}">Services</a></li>
                        <li><a href="{{ route('hospital.about') }}">About Us</a></li>
                        <li><a href="{{ route('hospital.gallery') }}">Gallery</a></li>
                        <li><a href="{{ route('hospital.contact') }}">Contact Us</a></li>
                        <li><a href="{{ route('hospital.logins') }}">Logins</a></li>
                    </ul>
                </div>
                <div class="col-sm-2 d-none d-lg-block appoint">
                    <a class="btn btn-success" href="{{ url('hms/user-login') }}">Book an Appointment</a>
                </div>
            </div>
        </div>
    </div>
</header>