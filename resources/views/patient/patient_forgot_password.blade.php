<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Password Recovery</title>
    <link rel="stylesheet" href="{{ asset('Patient/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/style.css') }}">
</head>

<body class="forgot-password">
    <div class="container">
        <div class="row">
            <div class="main-forgot-password col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="logo">
                    <a href="{{ url('/') }}" style="text-decoration: none;"><h2> FS | Password Recovery</h2></a>
                </div>

                <div class="box-forgot-password">
                    <form class="form-login" method="post" action="{{ route('password.verify') }}">
                        @csrf 
                        <fieldset>
                            <legend>Find Your Account</legend>
                            <p style="color: #666;">Please enter your User ID and Email to reset your password.</p>

                            @if(session('error'))
                                <div class="alert alert-danger" style="border-radius: 10px;">{{ session('error') }}</div>
                            @endif

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-id-badge"></i>
                                    <label for="userid">User ID</label>
                                    <input type="text" class="form-control" name="userid" placeholder="Registered User ID (e.g. SF001)" required>
                                </span>
                            </div>

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-envelope"></i>
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Registered Email" required>
                                </span>
                            </div>

                            <div class="form-actions text-center" style="margin-top: 25px;">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">
                                    Verify Account <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>
                            
                            <div class="new-account">
                                Remember your password? 
                                <a href="{{ route('login') }}">Log-in here</a>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>