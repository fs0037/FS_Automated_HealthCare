@extends('master')

@section('title', 'Home - Automated Health Care System')

@section('content')
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
    
    <section id="services" class="key-features-department">
        <div class="container">
            <div class="inner-title text-center">
                <h2>Our Key Features</h2>
                <p>Take a look at some of our key features</p>
            </div>

            <div class="row">
                
                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="fas fa-heartbeat"></i>
                            <h5>Cardiology</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="fas fa-ribbon"></i>
                            <h5>Orthopaedic</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="fab fa-monero"></i>
                            <h5>Neurologist</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="fas fa-capsules"></i>
                            <h5>Pharma Pipeline</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="fas fa-prescription-bottle-alt"></i>
                            <h5>Pharma Team</h5>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a href="{{ url('/#lab_test') }}" class="service-link">
                        <div class="single-key">
                            <i class="far fa-thumbs-up"></i>
                            <h5>High Quality treatments</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

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
@endsection

