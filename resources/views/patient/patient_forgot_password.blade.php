<!DOCTYPE html>
<html lang="en">
<head>
    <title>Patient Password Recovery</title>
    <!-- আপনার আগের CSS লিংকগুলো ঠিক থাকবে -->
    <link rel="stylesheet" href="{{ asset('Patient/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/styles.css') }}">
</head>

<body class="login">
    <div class="row">
        <div class="main-login col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="logo margin-top-30">
                <a href="{{ url('/') }}"><h2> FS | Patient Password Recovery</h2></a>
            </div>

            <div class="box-login">
                <!-- এখানে action পরিবর্তন করা হয়েছে -->
                <form class="form-login" method="post" action="{{ route('password.verify') }}">
                    @csrf 

                    <fieldset>
                        <legend>Patient Password Recovery</legend>
                        <p>Please enter your Contact number and Email to recover your password.<br /></p>

                        @if(session('error'))
                            <span style="color:red; display:block; margin-bottom:10px;">{{ session('error') }}</span>
                        @endif
                        @if(session('success'))
                            <span style="color:green; display:block; margin-bottom:10px;">{{ session('success') }}</span>
                        @endif

                        <div class="form-group form-actions">
                            <span class="input-icon">
                                <input type="text" class="form-control" name="fullname" placeholder="Registred Full Name" required>
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="form-group">
                            <span class="input-icon">
                                <input type="email" class="form-control" name="email" placeholder="Registred Email" required>
                                <i class="fa fa-user"></i> 
                            </span>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn btn-primary pull-right" name="submit">
                                Reset <i class="fa fa-arrow-circle-right"></i>
                            </button>
                        </div>
                        
                        <div class="new-account">
                            Already have an account? 
                            <!-- লগইন পেজে ফেরার লিংক -->
                            <a href="{{ route('login') }}">Log-in</a>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>