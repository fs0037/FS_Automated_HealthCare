@extends('patient.layouts.master')

@section('title', 'User | Book Appointment')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">User | Book Appointment</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>User</span></li>
            <li class="active"><span>Book Appointment</span></li>
        </ol>
    </div>
</section>

<div class="container-fluid container-fullw bg-white">
    <div class="row">
        <div class="col-md-12">
            <div class="row margin-top-30">
                <div class="col-lg-8 col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-heading">
                            <h5 class="panel-title">Book Appointment</h5>
                        </div>
                        <div class="panel-body">
                            
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <form role="form" name="book" method="post" action="{{ route('patient.book-appointment.submit') }}">
                                @csrf

                                <div class="form-group">
                                    <label for="DoctorSpecialization">Doctor Specialization</label>
                                    <select name="Doctorspecialization" class="form-control" required>
                                        <option value="">Select Specialization</option>
                                        <option value="Cardiology">Cardiology (Demo)</option>
                                        <option value="Neurology">Neurology (Demo)</option>
                                        <option value="Orthopedics">Orthopedics (Demo)</option>
                                        <option value="Pediatrics">Pediatrics (Demo)</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="doctor">Doctors</label>
                                    <select name="doctor" class="form-control" id="doctor" required>
                                        <option value="">Select Doctor</option>
                                        <option value="1">Dr. Demo One</option>
                                        <option value="2">Dr. Demo Two</option>
                                        <option value="3">Dr. Demo Three</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="consultancyfees">Consultancy Fees</label>
                                    <select name="fees" class="form-control" id="fees" required>
                                        <option value="">Select Fees</option>
                                        <option value="500">500 Tk</option>
                                        <option value="800">800 Tk</option>
                                        <option value="1000">1000 Tk</option>
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="AppointmentDate">Date</label>
                                    <input type="date" class="form-control" name="appdate" required min="{{ date('Y-m-d') }}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="Appointmenttime">Time</label>
                                    <input type="time" class="form-control" name="apptime" required>
                                </div>                                                      
                                
                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                    Submit
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection