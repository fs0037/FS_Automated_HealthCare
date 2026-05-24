<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Doctor | Dashboard')</title>
    
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Doctor/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Doctor/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Doctor/vendor/themify-icons/themify-icons.min.css') }}">
    <link href="{{ asset('Doctor/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Doctor/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('Doctor/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Doctor/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('Doctor/assets/css/themes/theme-1.css') }}" id="skin_color" />
</head>
<body>
    <div id="app">      
        @include('doctor.includes.sidebar')
        <div class="app-content">
            @include('doctor.includes.header')
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('doctor.includes.footer')
        @include('doctor.includes.setting')
    </div>

    <script src="{{ asset('Doctor/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/autosize/autosize.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/selectFx/classie.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/selectFx/selectFx.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('Doctor/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('Doctor/assets/js/main.js') }}"></script>
    <script src="{{ asset('Doctor/assets/js/form-elements.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });
    </script>
</body>
</html>