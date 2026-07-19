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

            <div class="maps-container wow fadeInUp mb-5" style="padding: 50px 0;">
                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
                            var setting = {"query":"Department of CSE, Varendra University, Rajshahi, Bangladesh","width":1200,"height":400,"satellite":false,"zoom":12,"placeId":"ChIJ1fzMr7bv-zkRasn_OLtrZTk","cid":"39656bbb38ffc96a","coords":[24.3686, 88.6250],"lang":"en","queryString":"Department of CSE, Varendra University, Rajshahi, Bangladesh","centerCoord":[24.3686,88.6250],"id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"1328831"};
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=1328831';
                            s.async = true;
                            s.onload = function (e) {
                                window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();</script><a href="https://1map.com/map-embed">1 Map</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection