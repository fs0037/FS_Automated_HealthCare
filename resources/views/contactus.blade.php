@extends('master')

@section('title', 'Contact Us - Automated Health Care System')

@section('content')
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
@endsection