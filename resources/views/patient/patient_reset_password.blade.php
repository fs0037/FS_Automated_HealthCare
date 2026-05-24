<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Password</title>
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
</head>

<body class="forgot-password">
    <div class="container">
        <div class="row">
            <div class="main-forgot-password col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <div class="logo">
                    <a href="{{ url('/') }}" style="text-decoration: none;"><h2> FS | Set New Password</h2></a>
                </div>

                <div class="box-forgot-password">
                    <form class="form-login" method="post" action="{{ route('password.update') }}">
                        @csrf 
                        <fieldset>
                            <legend>Create New Password</legend>
                            <p style="color: #666;">Account verified! Please enter your new password below.</p>

                            @if ($errors->any())
                                <div class="alert alert-danger" style="border-radius: 10px;">
                                    <ul style="margin-bottom: 0;">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" name="new_password" placeholder="Enter New Password (Min 6 characters)" required>
                                </span>
                            </div>

                            <div class="form-group">
                                <span class="input-icon">
                                    <i class="fa fa-lock"></i>
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password" required>
                                </span>
                            </div>

                            <div class="form-actions text-center" style="margin-top: 25px;">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">
                                    Update Password <i class="fa fa-save"></i>
                                </button>
                            </div>

                            <div class="new-account">
                                Remembered your password? 
                                <a href="{{ route('login') }}">
                                    Log-in
                                </a>
                            </div>
                        </fieldset>
                    </form>

                    <div class="copyright">
                        &copy; <span class="text-bold text-uppercase"> Automated Health Care System </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>