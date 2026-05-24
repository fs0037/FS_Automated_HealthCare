<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Patient Panel | FS Hospital')</title>
    
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Patient/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/themify-icons/themify-icons.min.css') }}">
    <link href="{{ asset('Patient/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Patient/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/themes/theme-1.css') }}" id="skin_color" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="app">      
        @include('patient.includes.sidebar')
        
        <div class="app-content">
            @include('patient.includes.header')
            
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    @yield('content')
                </div>
            </div>
        </div>
        
        @include('patient.includes.footer')
        @include('patient.includes.setting')
    </div>

    <script src="{{ asset('Patient/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('Patient/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('Patient/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/autosize/autosize.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/selectFx/classie.js') }}"></script>
    <script src="{{ asset('Patient/vendor/selectFx/selectFx.js') }}"></script>
    <script src="{{ asset('Patient/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('Patient/assets/js/main.js') }}"></script>
    <script src="{{ asset('Patient/assets/js/form-elements.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const fontSizeSelector = document.getElementById('dynamic-font-size');
            fontSizeSelector.addEventListener('change', function() {
                document.body.style.fontSize = this.value;
                
                let elements = document.querySelectorAll('p, span, div, a, label');
                elements.forEach(el => {
                    el.style.fontSize = this.value;
                });
            });

            const textColorSelector = document.getElementById('dynamic-text-color');
            textColorSelector.addEventListener('change', function() {
                document.body.style.color = this.value;
                
                let elements = document.querySelectorAll('h1, h2, h3, h4, h5, h6, p, span, label, td, th');
                elements.forEach(el => {
                    el.style.color = this.value;
                });
            });
        });
    </script>
</body>
</html>