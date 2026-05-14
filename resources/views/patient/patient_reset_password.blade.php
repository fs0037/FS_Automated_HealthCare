<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create New Password</title>
    <link rel="stylesheet" href="{{ asset('Patient/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/assets/css/style.css') }}">
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
                                    <input type="password" class="form-control" name="new_password" placeholder="New Password (Min 6 characters)" required>
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>

                            <div class="form-group">
                                <span class="input-icon">
                                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm New Password" required>
                                    <i class="fa fa-check-circle"></i> 
                                </span>
                            </div>

                            <div class="form-actions text-center" style="margin-top: 25px;">
                                <button type="submit" class="btn btn-primary btn-block" name="submit">
                                    Update Password <i class="fa fa-save"></i>
                                </button>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>