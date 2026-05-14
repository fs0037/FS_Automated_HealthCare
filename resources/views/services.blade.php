@extends('master')

@section('title', 'Services - Automated Health Care System')

@section('content')
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
@endsection