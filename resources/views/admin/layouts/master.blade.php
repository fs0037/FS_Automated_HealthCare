<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'Admin | Dashboard')</title>
    
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('Admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/vendor/themify-icons/themify-icons.min.css') }}">
    <link href="{{ asset('Admin/vendor/animate.css/animate.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/switchery/switchery.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/select2/select2.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css') }}" rel="stylesheet" media="screen">
    <link href="{{ asset('Admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/plugins.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/themes/theme-1.css') }}" id="skin_color" />
</head>
<body>
    <div id="app">      
        @include('admin.includes.sidebar')
        <div class="app-content">
            @include('admin.includes.header')
            <div class="main-content">
                <div class="wrap-content container" id="container">
                    @yield('content')
                </div>
            </div>
        </div>
        @include('admin.includes.footer')
        @include('admin.includes.setting')
    </div>

    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/autosize/autosize.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/selectFx/classie.js') }}"></script>
    <script src="{{ asset('Admin/vendor/selectFx/selectFx.js') }}"></script>
    <script src="{{ asset('Admin/vendor/select2/select2.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/form-elements.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
            FormElements.init();
        });
    </script>
</body>
</html>