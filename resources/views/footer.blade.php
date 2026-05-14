<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 map-img">
                <h2>Contact Us</h2>
                <address class="md-margin-bottom-40">
                    @if(isset($contactData) && $contactData)
                        {!! $contactData->PageDescription !!} <br>
                        Phone: {{ $contactData->MobileNumber }} <br>
                        Email: <a href="mailto:{{ $contactData->Email }}">{{ $contactData->Email }}</a><br>
                        Timing: {{ $contactData->OpenningTime }}
                    @else
                        FS Hospital <br>
                        Phone: +880 123 456 789 <br>
                        Email: info@fshospital.com <br>
                        Timing: 24/7
                    @endif
                </address>
            </div>
        </div>
    </div>
</footer>