@extends('master')

@section('title', 'About Us - Automated Health Care System')

@section('content')
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
@endsection