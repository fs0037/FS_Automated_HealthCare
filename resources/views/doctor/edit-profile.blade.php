@extends('doctor.layouts.master')

@section('title', 'Doctor | Edit Profile')

@section('content')
<section id="page-title">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="mainTitle">Doctor | Edit Doctor Details</h1>
        </div>
        <ol class="breadcrumb">
            <li><span>Doctor</span></li>
            <li class="active"><span>Edit Doctor Details</span></li>
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
                            <h5 class="panel-title">Edit Doctor</h5>
                        </div>
                        <div class="panel-body">
                            
                            <h4>{{ $doctor->doctorName }}'s Profile</h4>
                            <p><b>Profile Reg. Date: </b>{{ $doctor->created_at }}</p>
                            @if($doctor->updated_at != $doctor->created_at)
                                <p><b>Profile Last Updation Date: </b>{{ $doctor->updated_at }}</p>
                            @endif
                            <hr />
                            
                            @if(session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul style="margin-bottom: 0;">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form role="form" method="post" action="{{ route('doctor.profile.update') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="DoctorSpecialization">Doctor Specialization</label>
                                    <select name="Doctorspecialization" class="form-control" required="required">
                                        <option value="{{ $doctor->specilization }}">{{ $doctor->specilization }}</option>
                                        @foreach($specializations as $spec)
                                            @if($spec->specilization != $doctor->specilization)
                                                <option value="{{ $spec->specilization }}">{{ $spec->specilization }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Doctor Name</label>
                                    <input type="text" name="docname" class="form-control" value="{{ $doctor->doctorName }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Clinic Address</label>
                                    <textarea name="clinicaddress" class="form-control" required>{{ $doctor->address }}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label>Consultancy Fees</label>
                                    <input type="text" name="docfees" class="form-control" value="{{ $doctor->docFees }}" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Contact no</label>
                                    <input type="text" name="doccontact" class="form-control" value="{{ $doctor->contactno }}" required>
                                </div>

                                <div class="form-group">
                                    <label>Doctor Email (Cannot be changed)</label>
                                    <input type="email" name="docemail" class="form-control" readonly="readonly" value="{{ $doctor->docEmail }}">
                                </div>
                                
                                <button type="submit" name="submit" class="btn btn-o btn-primary">
                                    Update
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