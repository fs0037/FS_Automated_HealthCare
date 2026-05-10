<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard | FS Hospital</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('Patient/assets/css/style.css') }}" />

</head>

<body>

    <header class="custom-header">
        <div class="header-brand">
            <a href="{{ url('/') }}" style="text-decoration: none;"><h2>FS</h2></a>
        </div>
        <div class="header-title d-none d-md-block">
            <h4>Automated Health Care System</h4>
        </div>
        <div class="user-dropdown dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="{{ asset('Patient/assets/images/images.jpg') }}" alt="User"> 
                <span class="username">
                    {{ Session::get('patient_name') ?? 'Guest User' }}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="#">My Profile</a>
                <a class="dropdown-item" href="#">Change Password</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Log Out</a>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="wrap-content container" id="container">
            
            <section id="page-title">
                <div class="row align-items-center">
                    <div class="col-sm-8">
                        <h1 class="mainTitle">{{ Session::get('patient_name') ?? 'Guest' }}'s Dashboard</h1>
                    </div>
                    <div class="col-sm-4 text-right">
                        <ol class="breadcrumb justify-content-end">
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </section>

            <div class="container-fluid container-fullw">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <span class="fa-stack"> 
                                    <i class="fas fa-square fa-stack-2x text-primary"></i> 
                                    <i class="fas fa-smile fa-stack-1x fa-inverse"></i> 
                                </span>
                                <h2 class="StepTitle">My Profile</h2>
                                <p class="links cl-effect-1">
                                    <a href="#">Update Profile</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <span class="fa-stack"> 
                                    <i class="fas fa-square fa-stack-2x text-primary"></i> 
                                    <i class="fas fa-paperclip fa-stack-1x fa-inverse"></i> 
                                </span>
                                <h2 class="StepTitle">My Appointments</h2>
                                <p class="cl-effect-1">
                                    <a href="#">View Appointment History</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-4">
                        <div class="panel panel-white">
                            <div class="panel-body">
                                <span class="fa-stack"> 
                                    <i class="fas fa-square fa-stack-2x text-primary"></i> 
                                    <i class="fas fa-terminal fa-stack-1x fa-inverse"></i> 
                                </span>
                                <h2 class="StepTitle">Book My Appointment</h2>
                                <p class="links cl-effect-1">
                                    <a href="#">Book Appointment</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>