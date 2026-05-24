<!DOCTYPE html>
<html lang="en">
<head>
    <title>Doctor - Login</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

</head>

<body class="login">
    <div class="container">
        <div class="row">
            <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="fs">
                    <h2 class="fs.fs1">
                        <a href="{{ url('/') }}" class="fs.sf">FS | Doctor Login</a>
                    </h2>
                </div>

                <div class="box-login">
                    <form class="form-login" method="post" action="{{ route('doctor.login.submit') }}">
                        @csrf
                        <fieldset>
                            <legend>Sign in to your account</legend>
                            <p style="color: #666;">Please enter your User ID and password to log in.</p>
                            
                            @if(session('success'))
                                <div class="alert alert-success" style="border-radius: 10px;">{{ session('success') }}</div>
                            @endif

                            @if(session('error'))
                                <div class="alert alert-danger" style="border-radius: 10px;">{{ session('error') }}</div>
                            @endif

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-user"></i> 
                                    <label for="exampleInputPassword1">User ID</label>
                                    <input type="text" class="form-control" name="userid" placeholder="(Enter User ID)" required>
                                </span>
                            </div>
                            
                            <div class="form-group form-actions">
                                <span class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control password" name="password" placeholder="Enter Password" required>
                                    
                                </span>
                                <a href="{{ route('doctor.password.recovery') }}" style="float: right; margin-top: 10px; color: #ff4757; font-weight: 600;">
                                    Forgot Password?
                                </a>
                                <div style="clear: both;"></div>
                            </div>
                            
                            <div class="form-actions text-center" style="margin-top: 30px;">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">
                                    Login <i class="fa fa-arrow-circle-right"></i>
                                </button>
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