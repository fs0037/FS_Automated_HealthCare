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

                                <!-- স্পেশালাইজেশন সিলেক্ট -->
                                <div class="form-group">
                                    <label>Doctor Specialization</label>
                                    <select name="Doctorspecialization" class="form-control" id="specialization" required>
                                        <option value="">Select Specialization</option>
                                        @foreach(\App\Models\Admin\DoctorSpecialization::all() as $spec)
                                            <option value="{{ $spec->specilization }}">{{ $spec->specilization }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- ডক্টর সিলেক্ট -->
                                <div class="form-group">
                                    <label>Doctors</label>
                                    <select name="doctor" class="form-control" id="doctor" required>
                                        <option value="">Select Doctor</option>
                                    </select>
                                </div>

                                <!-- ডেট সিলেক্ট -->
                                <div class="form-group">
                                    <label>Date</label>
                                    <input type="date" class="form-control" name="appdate" id="date" required min="{{ date('Y-m-d') }}">
                                </div>

                                <!-- সময় স্লট (যা অটোমেটিক আসবে) -->
                                <div class="form-group">
                                    <label>Available Time Slots</label>
                                    <select name="apptime" class="form-control" id="slots" required>
                                        <option value="">Select Date & Doctor first</option>
                                    </select>
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
@section('scripts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('#specialization').change(function() {
        let spec = $(this).val();
        $.get('/get-doctors/' + spec, function(data) {
            $('#doctor').empty().append('<option>Select Doctor</option>');
            data.forEach(d => $('#doctor').append(`<option value="${d.id}">${d.doctorName}</option>`));
        });
    });

    $('#doctor, #date').change(function() {
        let docId = $('#doctor').val();
        let date = $('#date').val();
        if(docId && date) {
            $.get('/get-slots', {doctor_id: docId, date: date}, function(data) {
                $('#slots').empty().append('<option>Select Time</option>');
                data.forEach(s => $('#slots').append(`<option value="${s}">${s}</option>`));
            });
        }
    });
</script>
@endsection