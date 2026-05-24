<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin - Login</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>

<body class="login">
    <div class="container">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="logo">
                    <h2>Admin Login</h2>
                </div>

                <div class="box-login">
                    <form class="form-login" method="post" action="{{ route('admin.login.submit') }}">
                        @csrf
                        <fieldset>
                            <legend>Sign in to your account</legend>
                            <p style="color: #666;">Please enter your username and password to log in.</p>
                            
                            @if(session('success'))
                                <div class="alert alert-success" style="border-radius: 10px;">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger" style="border-radius: 10px;">{{ session('error') }}</div>
                            @endif

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-envelope"></i> 
                                    <label for="Email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Admin Email" required>
                                </span>
                            </div>
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <label for="Password">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                                </span>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-primary pull-right" name="submit">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            <a href="{{ url('/') }}">Back to Home Page</a>
                        </fieldset>
                    </form>

                    <div class="copyright" style="color: #888;">
                        &copy; <span class="text-bold text-uppercase"> Automated Health Care System </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="{{ asset('Admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/modernizr/modernizr.js') }}"></script>
    <script src="{{ asset('Admin/vendor/jquery-cookie/jquery.cookie.js') }}"></script>
    <script src="{{ asset('Admin/vendor/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('Admin/vendor/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/main.js') }}"></script>
    <script>
        jQuery(document).ready(function() {
            Main.init();
        });
    </script>
</body>
</html>