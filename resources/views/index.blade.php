<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Automated Health Care System</title>

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
                    <div class="col-lg-2 col-md-3 col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">FS
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
    
    <div class="slider-detail">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @forelse($files as $key => $file)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" 
                            src="{{ asset('assets/images/slider/' . $file->getFilename()) }}" 
                            alt="Slide {{ $key + 1 }}" 
                            style="height: 500px; object-fit: cover;">
                        
                        <div class="carousel-cover"></div>
                        
                        <div class="carousel-caption vdg-cur d-none d-md-block">
                            <h5 class="animated bounceInDown">FS Automated HealthCare</h5>
                        </div>
                    </div>
                @empty
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('assets/images/slider/slider_3.jpg') }}" alt="Default slide">
                    </div>
                @endforelse
            </div>

            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    

    @include('services')


    <section id="about_us" class="about-us" style="padding: 60px 0;">
        <div class="container">
            <div class="row no-margin">
                <div class="col-sm-6 image-bg no-padding"></div>
                <div class="col-sm-6 abut-yoiu">
                    <h2 style="font-size: 36px; font-weight: bold; color: #2c3e50; margin-bottom: 20px;">
                        {{ $aboutData->PageTitle ?? 'About Our Hospital' }}
                    </h2>
                    <p style="font-size: 16px; line-height: 1.6; color: #666; text-align: justify;">
                        @if($aboutData)
                            {{ Str::limit(strip_tags($aboutData->PageDescription), 250, '...') }}
                        @else
                            Default description goes here if no data is found in the database...
                        @endif
                    </p>
                    <div class="about-btn" style="margin-top: 25px;">
                        <a href="{{ route('hospital.about') }}" class="btn btn-info">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    <section id="contact_us" class="contact-us-single">
        <div class="row no-margin">
            <div class="col-sm-12 cop-ck">
                
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST">
                    @csrf
                    <h2>Contact Form</h2>
                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Name :</label></div>
                        <div class="col-sm-8"><input type="text" placeholder="Enter Name" name="fullname" class="form-control input-sm" required ></div>
                    </div>

                    <div class="row cf-ro">
                        <div class="col-sm-3"><label>Email Address :</label></div>
                        <div class="col-sm-8"><input type="email" name="emailid" placeholder="Enter Email Address" class="form-control input-sm" required></div>
                    </div>

                     <div class="row cf-ro">
                        <div class="col-sm-3"><label>Mobile Number:</label></div>
                        <div class="col-sm-8"><input type="text" name="mobileno" placeholder="Enter Mobile Number" class="form-control input-sm" required ></div>
                    </div>

                     <div class="row cf-ro">
                        <div class="col-sm-3"><label>Enter Message:</label></div>
                        <div class="col-sm-8">
                          <textarea rows="3" placeholder="Enter Your Message" class="form-control input-sm" name="description" required></textarea>
                        </div>
                    </div>
                    
                     <div class="row cf-ro">
                        <div class="col-sm-3"><label></label></div>
                        <div class="col-sm-8">
                         <button class="btn btn-success btn-sm" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        @if($contactData)
                            {!! $contactData->PageDescription !!} <br>
                            Phone: {{ $contactData->MobileNumber }} <br>
                            Email: <a href="mailto:{{ $contactData->Email }}" class="">{{ $contactData->Email }}</a><br>
                            Timing: {{ $contactData->OpenningTime }}
                        @endif
                    </address>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('assets/js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>

