<!DOCTYPE html>
<html lang="en">
<head>
    <title>FS | User Registration</title>
    <link rel="stylesheet" href="{{ asset('Patient/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Patient/vendor/fontawesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('Patient/assets/css/style.css') }}" />   
</head>

<body class="register">
    <div class="container">
        <div class="row">
            <div class="main-register col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
                <div class="logo">
                    <a href="{{ url('/') }}" style="text-decoration: none;"><h2>FS | Patient Registration</h2></a>
                </div>
                
                <div class="box-register">
                    <form name="registration" id="registration" action="{{ route('patient.register.submit') }}" method="post" onSubmit="return valid();">
                        @csrf 

                        <fieldset>
                            <legend>Sign Up Form</legend>
                            <p style="color: #666; margin-bottom: 20px;">Enter your personal and account details below:</p>

                            @csrf
                            <input type="hidden" name="created_by" value="{{ request()->get('ref') == 'reception' ? 'reception' : 'self' }}">


                            <div class="row">
                                <div class="col-md-6">
                                    <h5 style="color: #1dc8cd; font-weight: bold; margin-bottom: 15px;">Personal Details</h5>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Enter Full Name" value="{{ old('name') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Address</label>
                                        <input type="text" class="form-control" name="address" placeholder="Address" value="{{ old('address') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Phone Number</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Age</label>
                                        <input type="number" class="form-control" name="age" placeholder="Enter Age" value="{{ old('age') }}" required>
                                    </div>
                                    <div class="form-group" style="padding-left: 10px;">
                                        <label class="block" style="font-weight: bold; color: #555;">Gender:</label>
                                        <div class="clip-radio radio-primary" style="margin-top: 5px;">
                                            <input type="radio" id="rg-female" name="gender" value="female" {{ old('gender') == 'female' ? 'checked' : '' }} required>
                                            <label for="rg-female">Female</label>
                                            
                                            <input type="radio" id="rg-male" name="gender" value="male" {{ old('gender') == 'male' ? 'checked' : '' }} required>
                                            <label for="rg-male">Male</label>

                                            <input type="radio" id="rg-other" name="gender" value="other" {{ old('gender') == 'other' ? 'checked' : '' }} required>
                                            <label for="rg-other">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5 style="color: #1dc8cd; font-weight: bold; margin-bottom: 15px;">Account Details</h5>
                                    <div class="form-group">
                                        <span class="input-icon">
                                            <i class="fa fa-envelope"></i>
                                            <label for="exampleInputPassword1">Email Address</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" value="{{ old('email') }}" required>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <span class="input-icon">
                                            <i class="fa fa-lock"></i> 
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <span class="input-icon">
                                            <i class="fa fa-lock"></i>
                                            <label for="exampleInputPassword1">Confirm Password</label>
                                            <input type="password" class="form-control" id="password_again" name="password_again" placeholder="Confirm Password" required>
                                        </span>
                                    </div>
                                    <div class="form-group" style="padding-left: 10px;">
                                        <div class="checkbox clip-check check-primary">
                                            <input type="checkbox" id="agree" value="agree" checked="true" readonly="true">
                                            <label for="agree" style="color: #555;">I agree to the Terms & Conditions</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-actions" style="margin-top: 20px; border-top: 1px solid #eee; padding-top: 20px;">
                                <p>
                                    Already have an account?
                                    <a href="{{ route('login') }}">Log-in here</a>
                                </p>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary" id="submit" name="submit">
                                        Create Account <i class="fa fa-arrow-circle-right"></i>
                                    </button>
                                </div>
                            </div>
                        </fieldset>
                    </form>

                    <div class="copyright">
                        &copy; <span class="current-year"></span><span class="text-bold text-uppercase"> FS Hospital</span>. <span>All rights reserved</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function valid() {
            if(document.registration.password.value != document.registration.password_again.value) {
                alert("Password and Confirm Password Field do not match!!");
                document.registration.password_again.focus();
                return false;
            }
            return true;
        }
    </script>
    <script src="{{ asset('Patient/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Patient/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
</body>
</html>