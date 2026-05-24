<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor - Password Recovery</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />

</head>

<body class="forgot-password">
    <div class="container">
        <div class="row">
            <div class="main-forgot-password col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="fs">
                    <h2 class="fs.fs1">
                        <a href="{{ url('/') }}" class="fs.sf">FS | Password Recovery</a>
                    </h2>
                </div>

                <div class="box-forgot-password">
                    <form class="form-login" method="post" action="{{ route('doctor.password.verify') }}">
                        @csrf
                        <fieldset>
                            <legend>Find Your Account</legend>
                            <p style="color: #666;">Please enter your User ID and Contact Number to verify your account.</p>
 
                            @if(session('error'))
                                <div class="alert alert-danger" style="border-radius: 10px;">{{ session('error') }}</div>
                            @endif

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <label for="userid">User ID</label>
                                    <input type="text" class="form-control" name="userid" placeholder="Registered User ID (e.g. DOC-1001)" required>
                                </span>
                            </div>

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-phone"></i>
                                    <label for="contactno">Phone Number</label>
                                    <input type="text" class="form-control" name="contactno" placeholder="Registered Phone Number" required>
                                </span>
                            </div>

                            <div class="form-actions text-center" style="margin-top: 25px;">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">
                                    Verify Account <i class="fa fa-arrow-circle-right"></i>
                                </button>
                            </div>

                            <div class="new-account">
                                Remember your password? 
                                <a href="{{ route('doctor.login') }}">
                                    Log-in here
                                </a>
                            </div>
                        </fieldset>
                    </form>

                    <div class="copyright" style="color: #888;">
                        &copy; <span class="text-bold text-uppercase"> Automated Health Care System </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>