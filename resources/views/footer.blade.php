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

    <div class="copy" style="background-color: #222; padding: 15px 0; margin-top: 30px;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-6" style="color: #ccc; font-size: 14px;">
                    &copy; {{ date('Y') }} FS Hospital. All Rights Reserved.
                </div>
                <div class="col-md-6 col-sm-6 text-right">
                    <span class="go-top" id="go-to-top-btn" title="Go to top" style="
                        cursor: pointer; 
                        background: #00a8df; 
                        color: #fff; 
                        padding: 10px 15px; 
                        border-radius: 5px; 
                        font-weight: bold;
                        display: inline-block;
                        transition: all 0.3s ease;
                    ">
                        <i class="fas fa-angle-up"></i> Go Top
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var goTopBtn = document.getElementById("go-to-top-btn");

        // বাটনে ক্লিক করলে স্মুথলি একদম উপরে চলে যাবে
        goTopBtn.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });

        // বাটনটিতে হোভার ইফেক্ট দেওয়ার জন্য
        goTopBtn.addEventListener("mouseover", function() {
            this.style.backgroundColor = "#007b9e"; // হোভার করলে একটু গাঢ় নীল হবে
        });
        
        goTopBtn.addEventListener("mouseout", function() {
            this.style.backgroundColor = "#00a8df"; // হোভার সরালে আগের রঙ ফিরে আসবে
        });
    });
</script>
